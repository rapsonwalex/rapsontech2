<style>
    .responsive {
        max-width: 100%;
        height: auto;
        border: 1px solid #ccc;
        /*style= "height: 160px; width: 320px; border: 1px solid #ccc;"*/
    }
</style>
@if ($articles->count())
    @foreach ($articles as $article)
        <div class="content">


            <div class="left-info">
                <div>
                    <a href="{{ url('read_full_article_admin/' . $article->article_id) }} "><img
                            src="{{ asset('article_images/' . $article->averta) }}" class="responsive" /></a>
                </div>
            </div>

            <div class="right-info">

                <h4 style="color: #337ab7;"> Unique ID*: <b>
                        <font color="green"> {{ $article->article_unique_id }} </font>
                    </b>
                    | Last Review Request:
                    @if ($article->last_request_for_review_date != '')
                        <b>
                            @if ($article->request_for_review == 1)
                                <font color="green">
                                @else()
                                    <font color="red">
                            @endif
                            {{ Carbon\Carbon::parse($article->last_request_for_review_date)->format('d-m-Y H:i:s') }}

                            </font>
                        </b>
                    @else
                        <b>
                            <font color="orange">Non
                        </b></font>
                    @endif
                    | Review Status:
                    @if ($article->review_status != '')
                        <b>
                            <font color="{{ $article->Review_status_func->status_colour }}">
                                {{ $article->Review_status_func->review_status_name }} </font>
                        </b>
                    @else
                        <b>
                            <font color="orange">Pending
                        </b></font>
                    @endif

                    | Publish Status:
                    @if ($article->publish_status != '')
                        <b>
                            <font color="{{ $article->Publis_status_func->status_colour }}">
                                {{ $article->Publis_status_func->publish_status_name }} </font>
                        </b>
                    @else
                        <b>
                            <font color="orange">Pending
                        </b></font>
                    @endif



                    <div class="box-tools pull-right">
                        <a href="{{ url('read_full_article_admin/' . $article->article_id) }} ">
                            <span data-toggle="tooltip" title="{{ $article->article_comment_counter }} Comments"
                                class="badge bg-red">{{ $article->article_comment_counter }}</span></a>
                        {{-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; --}}
                    </div>

                    <h4>



                        <a href="{{ url('read_full_article_admin/' . $article->article_id) }}"
                            style="color: black">{{ $article->article_title }}</a>
                    </h4>
                    <p>
                        @if ($article->article_short_description != '')
                            {{ substr($article->article_short_description, 0, 200) }}
                        @else
                            {{ substr($article->article_body_searchable, 0, 200) }}
                        @endif
                        <a href="{{ url('read_full_article_admin/' . $article->article_id) }}"> more...</a>
                    </p>
                    <h5>By {{ $article->author }}
                        , {{ Carbon\Carbon::parse($article->date_created)->format('d-m-Y') }}</h5>

                    {{-- Record Submitted By:
                    @if ($article->article_submited_by_user_id != '')
                        <a href="{{ url('view_user_details/' . $article->article_submited_by_user_id) }}">
                            {{ $article->article_submited_by_user_func->name }}</a>
                        @if ($article->article_submited_at_date != '')
                            , {{ Carbon\Carbon::parse($article->article_submited_at_date)->format('d-m-Y H:i:s') }}
                        @endif
                    @endif --}}


                    <br>

                    {{-- Record Last Edited By:
                    @if ($article->article_laste_edited_by_user_id != '')
                        <a href="{{ url('view_user_details/' . $article->article_laste_edited_by_user_id) }}">
                            {{ $article->article_laste_edited_by_user_func->name }}</a>
                        @if ($article->article_laste_edited_at_date != '')
                            ,
                            {{ Carbon\Carbon::parse($article->article_laste_edited_at_date)->format('d-m-Y H:i:s') }}
                        @endif
                    @endif --}}
                    <br>
                    @auth
                        @if (Auth::user()->id == $article->article_submited_by_user_id)
                            @permission(['can_create_edit_financial_crimes_articles'])
                                <a href="{{ url('edit_article/' . $article->article_id) }}"><button type="button"
                                        class="btn  btn-success btn-sm btn-flat"
                                        @if ($article->publish_status != 3) disabled @endif><span class="btn-label"><i
                                                class="fa fa-edit"></i></span> Edit</button></a>
                            @endpermission

                            @permission('can_delete_financial_crimes_articles')
                                <button type="button" class="btn btn-danger btn-sm btn-flat" onclick="deletearticle(this.id)"
                                    id="{{ $article->article_id }}" @if ($article->publish_status != 3) disabled @endif><span
                                        class="btn-label"><i class="fa fa-trash"></i></span> Delete</button>
                            @endpermission

                            @if ($article->detected_by_ai == 1)
                                @permission('can_delete_financial_crimes_articles')
                                    <a href="{{ url('move_to_wrongly_predicted_item/' . $article->article_id . '/6') }}"><button
                                            type="button" class="btn  btn-warning btn-sm btn-flat"
                                            @if ($article->publish_status != 3) disabled @endif><span class="btn-label"><i
                                                    class="fa fa-times"></i></span> Move to wrongly predicted item</button></a>
                                @endpermission
                            @endif
                        @endif


                        @permission(['can_edit_any_financial_crimes_articles'])
                            <a href="{{ url('edit_article/' . $article->article_id) }}"><button type="button"
                                    class="btn  btn-success btn-sm btn-flat"><span class="btn-label"><i
                                            class="fa fa-edit"></i></span> Edit (With Super Privilege)</button></a>
                        @endpermission

                        @permission('can_delete_any_financial_crimes_articles')
                            <button type="button" class="btn btn-danger btn-sm btn-flat" onclick="deletearticle(this.id)"
                                id="{{ $article->article_id }}"><span class="btn-label"><i class="fa fa-trash"></i></span>
                                Delete (With Super Privilege)</button>
                        @endpermission

                    @endauth
            </div>

        </div>
        <hr>
    @endforeach
@else
    Result not found.
@endif

<div>
    Showing {{ $articles->firstItem() }} to {{ $articles->lastItem() }} of {{ $articles->total() }}
    entries
</div>
<br>
<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($articles->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ $articles->currentPage() == 1 ? ' disabled' : '' }}">
            <a href="{{ $articles->url(1) }}">First</a>
        </li>
        @for ($i = 1; $i <= $articles->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $articles->currentPage() - $half_total_links;
            $to = $articles->currentPage() + $half_total_links;
            if ($articles->currentPage() < $half_total_links) {
                $to += $half_total_links - $articles->currentPage();
            }
            if ($articles->lastPage() - $articles->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($articles->lastPage() - $articles->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="{{ $articles->currentPage() == $i ? ' active' : '' }}">
                    <a href="{{ $articles->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="{{ $articles->currentPage() == $articles->lastPage() ? ' disabled' : '' }}">
            <a href="{{ $articles->url($articles->lastPage()) }}">Last</a>
        </li>
    </ul>
@endif
