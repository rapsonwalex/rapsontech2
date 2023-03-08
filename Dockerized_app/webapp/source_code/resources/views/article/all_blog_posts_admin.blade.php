@extends('layouts.master')
@section('title')
    ALL Blog Posts
@endsection
@section('content')
    @include('layouts.dashboard_header')

    <h3>
        ALL Blog Posts
    </h3>

    @include('article.common_search_bar_admin_panel')


    @if ($show_searched_vrase == '1')
        <h4 align="center">SEARCH RESULTS FOR: {{ $searching }} </h4>
    @endif

    {{-- @include('article.common_to_all_articles_admin') --}}


    <style>
        .bdnjd {
            padding-right: 9%
        }
    </style>
    {{-- ////////////////////////////////////////////////////////////// --}}

    <section aria-label="section">
        <div class="container">
            <div class="bdnjd">
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-lg-4 col-md-6">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">
                                            {{ Carbon\Carbon::parse($article->date_created)->format('d') }}
                                        </div>
                                        {{-- <div class="d">NOV</div> --}}
                                        <div class="d">
                                            {{ Carbon\Carbon::parse($article->date_created)->format('M Y') }}
                                        </div>

                                    </div>
                                    <div class="post-image">
                                        <a href="{{ url('/read_full_article_admin/' . $article->article_id) }}">
                                            <img alt="" src="{{ asset('article_images/' . $article->averta) }}">
                                        </a>
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Law Firm</span>
                                        <h4><a href="{{ url('/read_full_article_admin/' . $article->article_id) }}">{{ $article->article_title }}
                                                <span></span></a>
                                        </h4>
                                        <p>
                                            {{ substr($article->article_body_searchable, 0, 135) }}
                                        </p>
                                        <span class="p-author">Akintunde F. Adeyemo, Esq.</span><br>
                                        <span class="p-author"> {{ $article->Publis_status_func->publish_status_name }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="spacer-single"></div>

                    <div>
                        Showing {{ $articles->firstItem() }} to {{ $articles->lastItem() }} of {{ $articles->total() }}
                        entries
                    </div>
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

                </div>
            </div>
        </div>
    </section>
    {{-- /////////////////////////////////////////////////////// --}}

    <script>
        function deletearticle(e) {
            //alert(e);
            // var id = $(e.currentTarget).attr("id");
            // alert= $id,
            // var userId = $(e.currentTarget).data("id");
            swal({
                    title: "Are you sure?",
                    text: "You want to delete this Record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function() {
                    window.location.href = "{{ url('/delete_article') }}" + '/' + e;

                    // $("#myform").submit();
                });
        }
    </script>
    @include('layouts.dashboard_footer')
@endsection
