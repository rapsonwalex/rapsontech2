@extends('layouts.master')
@section('title')
    {{ $article->article_title }}
@endsection
@section('mata_description')
    <meta content="{{ $article->meta_description }}" name="description" />
@endsection
@section('mata_keywords')
    <meta content="{{ $article->meta_keyword }}" name="keywords" />
@endsection
@section('content')
    {{-- ////////////////////////////////////////////////////////////////// --}}
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <section id="subheader" class="jarallax text-white">
            <img src="{{ asset('asset_justica/justica_html/images/background/6.jpg') }}" class="jarallax-img" alt="">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Blog Post</h1>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        <!-- section begin -->
        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-read">
                            <img alt="" src="images/news/5.jpg" class="img-fullwidth">
                            <div class="post-text">
                                <h3 align="center"><a href="{{ url('read_full_post/' . $article->article_id) }}"
                                        style="color: black">{{ $article->article_title }}</a></h3>
                                <hr>

                                @if ($article->averta != 'balance.png')
                                    <img src="{{ asset('article_images/' . $article->averta) }}" alt="Cover Image"
                                        class="responsive" style="max-width: 100%; height: auto;">
                                    <br>
                                    <br>
                                @endif

                                <!-- <div class="container"> -->
                                <div id="editor">{!! $article->article_body !!}</div>
                                <!-- </div> -->

                                <span class="post-date">{{ Carbon\Carbon::parse($article->date_created)->format('M, d Y') }}
                                </span>
                                <span class="post-date">Akintunde F. Adeyemo, Esq.</span>

                                <br>
                                @if ($article->reference != '')
                                    References:<br>
                                    <?php
                                    $url = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
                                    $string = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $article->reference);
                                    echo nl2br($string);
                                    ?>
                                    <br>
                                @endif

                                @if (!$article_files->isEmpty())
                                    <p>
                                    <h6>Downloads</h6>
                                    </p>
                                    @foreach ($article_files as $article_file)
                                        <a href="{{ url('/article_file_uploads/' . $article_file->filename) }}"
                                            download="{{ $article_file->original_filename }}"><i class="fa fa-download"
                                                style="color: rgb(0, 140, 255);"></i> </a>

                                        <a href="{{ url('/article_file_uploads/' . $article_file->filename) }}"
                                            target="_blank">
                                            &nbsp;&nbsp;{{ $article_file->original_filename }}</a>
                                        <br>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="spacer-single"></div>

                    </div>
                    <div id="sidebar" class="col-md-4">
                        <div class="widget widget-post">
                            <h4>Recent Posts</h4>
                            <div class="small-border"></div>
                            <ul>
                                @foreach ($article_archives as $article_archive)
                                    <li><span
                                            class="date">{{ Carbon\Carbon::parse($article_archive->date_created)->format('d M') }}</span><a
                                            href="{{ url('read_full_post/' . $article_archive->article_id) }}">{{ $article_archive->article_title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-text">
                            <h4>Akintunde F. Adeyemo, Esq.</h4>
                            <div class="small-border"></div>
                            The Law Office of Akintunde F. Adeyemo, PLLC is principally dedicated to immigration law,
                            providing unparalleled immigration services to the immigrant community. With our client-centric
                            approach, we fiercely advocate on behalf of immigrants.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content close -->

    <script>
        var quill = new Quill('#editor', {
            readOnly: true,
            modules: {
                toolbar: false // Snow includes toolbar by default
            },
            theme: 'bubble'
        });
    </script>
    @include('layouts.jqueryminjs')
@endsection
