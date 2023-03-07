@extends('layouts.master')
@section('title')
    {{ $article->article_title }}
@endsection
@section('content')
    @include('layouts.dashboard_header')


    <h3>
        Blog Post
    </h3>
    @include('article.common_search_bar_admin_panel')

    <!-- /////////////////////////////////////////////////////////////////////// -->

    <section class="content">
        <div class="row">
            <div class="col-md-9">
                {{-- <div class="box box-success"> --}}

                <div class="box-body">
                    {{-- <div class="box-body" style="overflow-y: auto; height: 450px;"> --}}

                    <div class="full-article-info">
                        <h3 align="center"><a href="{{ url('read_full_article_admin/' . $article->article_id) }}"
                                style="color: black">{{ $article->article_title }}</a></h3>
                        <hr>
                        @if ($article->averta != 'balance.png')
                            <img src="{{ asset('article_images/' . $article->averta) }}" alt="Cover Image" class="responsive"
                                style="max-width: 100%; height: auto;">
                            <br>
                            <br>
                        @endif
                        <!-- <div class="container"> -->
                        <div id="editor">{!! $article->article_body !!}</div>
                        <!-- </div> -->


                        <input type="hidden" id="myHtml" name="article_body" required />
                        <hr>
                        REFERENCES:<br>

                        <?php
                        $url = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
                        $string = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $article->reference);
                        echo nl2br($string);
                        ?>


                        <br>
                        <hr>
                        DOWNLOADS:<br>


                        @if (!$article_files->isEmpty())
                            @foreach ($article_files as $article_file)
                                <a href="{{ url('/article_file_uploads/' . $article_file->filename) }}"
                                    download="{{ $article_file->original_filename }}"><i class="fa fa-download"
                                        style="color: orange;"></i> </a>

                                <a href="{{ url('/article_file_uploads/' . $article_file->filename) }}" target="_blank">
                                    &nbsp;&nbsp;{{ $article_file->original_filename }}</a>
                                @permission('can-delete-posts')
                                    <span id="{{ $article_file->id }}" onclick="deletearticlefile(this.id)"><a href="#">
                                            <i class="fa fa-times" style="color: red;"></i> </a>
                                    </span>
                                @endpermission
                                <br>
                            @endforeach
                        @endif

                        <hr>
                        OTHER INFO:
                        <br>
                        Record Submitted By:
                        @if ($article->article_submited_by_user_id != '')
                            <a href="{{ url('view_user_details/' . $article->article_submited_by_user_id) }}">
                                {{ $article->article_submited_by_user_func->name }}</a>
                            @if ($article->article_submited_at_date != '')
                                , {{ Carbon\Carbon::parse($article->article_submited_at_date)->format('d-m-Y H:i:s') }}
                            @endif
                        @endif


                        <br>

                        Record Last Edited By:
                        @if ($article->article_laste_edited_by_user_id != '')
                            <a href="{{ url('view_user_details/' . $article->article_laste_edited_by_user_id) }}">
                                {{ $article->article_laste_edited_by_user_func->name }}</a>
                            @if ($article->article_laste_edited_at_date != '')
                                ,
                                {{ Carbon\Carbon::parse($article->article_laste_edited_at_date)->format('d-m-Y H:i:s') }}
                            @endif
                        @endif
                        <hr>
                        <br>
                        SEO Tags:
                        <br>
                        <b> Meta Description:</b>
                        <br>
                        {{ $article->meta_description }}
                        <br>
                        <b>Meta Keywords:</b>
                        <br>
                        {{ $article->meta_keyword }}
                        <hr>
                        @auth
                            @permission('can-create-edit-posts')
                                <a href="{{ url('edit_article/' . $article->article_id) }}"><button type="button"
                                        class="btn  btn-success btn-sm btn-flat"><span class="btn-label"><i
                                                class="fa fa-edit"></i></span> Edit</button></a>
                            @endpermission

                            @permission('can-delete-posts')
                                <button type="button" class="btn btn-danger btn-sm btn-flat" onclick="deletearticle(this.id)"
                                    id="{{ $article->article_id }}"><span class="btn-label"><i class="fa fa-trash"></i></span>
                                    Delete</button>
                            @endpermission
                        @endauth

                    </div>

                </div>
                <!-- /.box-body -->
                {{-- </div> --}}
                <!-- /.box -->
            </div>
            <!-- /.col -->

            {{-- ///////////////////////////////////////////////Action Pan///////////////////////////////////////////////////////////////// --}}
            @permission('can-publish-posts')
                <div class="col-md-2">
                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-gear"></i></span> Action Pan

                            <form action="{{ url('/publish_post/' . $article->article_id) }}" method="POST">
                                {{ method_field('PATCH') }}
                                <input type='hidden' name='_token' value='{{ Session::token() }}'>

                                <div class="form-group{{ $errors->has('publish_status') ? ' has-error' : '' }}">
                                    <label>
                                        <h4 style="color: #337ab7;"> Publish status:
                                            {{ $article->Publis_status_func->publish_status_name }}
                                        </h4>
                                    </label>
                                    <select name='publish_status' id='publish_status' class='form-control'>
                                        <option value="" disabled selected>Select Publish Status</option>
                                        @foreach ($publis_statuss as $key => $value)
                                            @if ($article->publish_status == $key)
                                                <option value="{{ $key }}" selected>{{ $value }}</option>
                                            @elseif (Request::old('publish_status') == $key)
                                                <option value="{{ $key }}" selected>{{ $value }}</option>
                                            @else
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <button class='btn btn-primary' type='submit'>Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endpermission



        </div>
        <!-- /.row -->
    </section>

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

    <script>
        function deletearticlefile(e) {
            //alert(e);
            // var id = $(e.currentTarget).attr("id");
            // alert= $id,
            // var userId = $(e.currentTarget).data("id");
            swal({
                    title: "Are you sure?",
                    text: "You want to delete this File!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function() {
                    window.location.href = "{{ url('/delete_article_file') }}" + '/' + e;

                    // $("#myform").submit();
                });
        }
    </script>

    <script>
        var quill = new Quill('#editor', {
            readOnly: true,
            modules: {
                toolbar: false // Snow includes toolbar by default
            },
            theme: 'bubble'
        });
    </script>
    @include('layouts.dashboard_footer')
@endsection
