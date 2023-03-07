@extends('layouts.master')
@section('title')
    Edit BLog Post
@endsection
@section('content')
    @include('layouts.dashboard_header')

        <h3>
          Edit BLog Post
        </h3>

    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-success">

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{url('store_edited_article/'.$article->article_id)}}" method="POST"
                              enctype="multipart/form-data" name="mainform">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('article_title') ? ' has-error' : '' }}">
                                <label>Blog post title</label>
                                <input id="article_title" name="article_title" type="text" class="form-control"
                                       value="{{$article->article_title}}" required>
                                @if ($errors->has('article_title'))
                                    <span class="help-block">
                 <strong>{{ $errors->first('article_title') }}</strong>
                </span>
                                @endif
                            </div>


                            {{-- <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <label>Publisher</label>
                                <input name="author" type="text" class="form-control" value="{{$article->author}}"
                                       required>
                                @if ($errors->has('author'))
                                    <span class="help-block">
                 <strong>{{ $errors->first('author') }}</strong>
                </span>
                                @endif
                            </div> --}}

                            <div class="form-group{{ $errors->has('date_created') ? ' has-error' : '' }}">
                                <label>Publication Date</label>
                                <input id="date_created" name="date_created" type="date" class="form-control"
                                       value="{{$article->date_created}}" required>
                                @if ($errors->has('date_created'))
                                    <span class="help-block">
                 <strong>{{ $errors->first('date_created') }}</strong>
                </span>
                                @endif
                            </div>


                    </div>

                    <!-- /.col -->
                    <div class="col-md-6">


                        <div class="form-group{{ $errors->has('averta') ? ' has-error' : '' }}">
                            <label>Select cover image for this post</label>
                            <input id="averta" name="averta" type="file" class="form-control"
                                   value="{{ old('averta') }}" accept="image/png, image/jpeg, image/gif">
                            @if ($errors->has('averta'))
                                <span class="help-block">
                 <strong>{{ $errors->first('averta') }}</strong>
                </span>
                            @endif
                        </div>



                    {{-- <div class="col-md-4"> --}}
                        <div class="form-group{{ $errors->has('article_files') ? ' has-error' : '' }}">
                            <label>Select File To Upload (You can upload multiple files)</label>
                            <input id="article_files[]" name="article_files[]" type="file" class="form-control"
                                   value="{{ old('article_files') }}" accept="application/pdf, image/*" multiple>
                            @if ($errors->has('article_files'))
                                <span class="help-block">
                 <strong>{{ $errors->first('article_files') }}</strong>
                </span>
                            @endif
                        </div>


                        @foreach($article_files as $article_file)

                            <a href="{{ url('/article_file_uploads/'.$article_file->filename) }}"
                               download="{{$article_file->original_filename}}"><i class="fa fa-download"
                                                                                  style="color: orange;"></i> </a>

                            <a href="{{ url('/article_file_uploads/'.$article_file->filename) }}" target="_blank">
                                &nbsp;&nbsp;{{$article_file->original_filename}}</a>

                            <span id="{{$article_file->id}}" onclick="deletearticlefile(this.id)"><a href="#">
<i class="fa fa-times" style="color: red;"></i> </a>
</span>
                            <br>
                        @endforeach
                    {{-- </div> --}}


                    </div>
                    <!-- /.col -->
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group{{ $errors->has('article_body') ? ' has-error' : '' }}">
                            <label>Write Full Article Here</label>

                            <div id="toolbar"></div>
                            <div id="editor" style="height: 400px">{!! $article->article_body !!}</div>
                            <input type="hidden" id="myHtml" name="article_body" required/>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group{{ $errors->has('reference') ? ' has-error' : '' }}">
                            <label>References </label>
                            <textarea rows="3" cols="50" maxlength="200" class="form-control" id="reference"
                                      name="reference">{{{ $article->reference }}}</textarea>
                            @if ($errors->has('reference'))
                                <span class="help-block">
                 <strong>{{ $errors->first('reference') }}</strong>
                </span>
                            @endif
                        </div>

                    </div>
                </div>

    <h3>
      SEO Tags
      </h3>
    <hr>
                     <div class="row">
                    <div class="col-md-8">
                        <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
                            <label>Meta Description (MAX: 156 characters including spaces ) </label>
                            <textarea rows="2" cols="50" maxlength="156" class="form-control" id="meta_description"
                                      name="meta_description" required>{{{ $article->meta_description }}}</textarea>
                            @if ($errors->has('meta_description'))
                                <span class="help-block">
                 <strong>{{ $errors->first('meta_description') }}</strong>
                </span>
                            @endif
                        </div>

                    </div>
                </div>

                     <div class="row">
                    <div class="col-md-8">
                        <div class="form-group{{ $errors->has('meta_keyword') ? ' has-error' : '' }}">
                            <label>Meta keywords (MAX: 10 words >>100 characters including spaces) </label>
                            <textarea rows="2" cols="50" maxlength="100" class="form-control" id="meta_keyword"
                                      name="meta_keyword" required>{{{ $article->meta_keyword }}}</textarea>
                            @if ($errors->has('meta_keyword'))
                                <span class="help-block">
                 <strong>{{ $errors->first('meta_keyword') }}</strong>
                </span>
                            @endif
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button class='btn btn-primary' type='submit'>Update</button>

            </div>
        </div>
        <!-- /.box -->
        </form>

    </section>


    @if(count($errors))
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    <!-- Initialize Quill editor -->
    <script>
        const editor = document.getElementById('editor');
        const hiddenInput = document.getElementById('myHtml');
        const form = document.forms.mainform;

        var quill = new Quill('#editor', {
            placeholder: 'Write Full Article Here...',
            theme: 'snow',
            modules: {
                imageResize: {
                    displaySize: true
                },
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                    ['blockquote'],

                    [{'list': 'ordered'}, {'list': 'bullet'}],
                    [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
                    [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
                    [{'direction': 'rtl'}],                         // text direction

                    [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
                    // [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                    [{'color': []}, {'background': []}],          // dropdown with defaults from theme
                    [{'font': []}],
                    [{'align': []}],
                    ['link', 'image', 'video'],

                    ['clean']                                         // remove formatting button
                ]
            }
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            hiddenInput.value = editor.firstChild.innerHTML
            this.submit();
        });

    </script>

    <script>
        function deletearticlefile(e) {
            //alert(e);
            // var id = $(e.currentTarget).attr("id");
            // alert= $id,
            // var userId = $(e.currentTarget).data("id");
            swal({
                    title: "Are you sure?",
                    text: "You want to delete this File!", type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function () {
                    window.location.href = "{{ url('/delete_article_file') }}" + '/' + e;

                    // $("#myform").submit();
                });
        }

    </script>
    @include('layouts.dashboard_footer')
@endsection
