@extends('layouts.master')
@section('title')
    Blog Posts
@endsection
@section('mata_description')
    <meta content="The Law Office of Akintunde F. Adeyemo, PLLC" name="description" />
@endsection
@section('mata_keywords')
    <meta content="The Law Office of Akintunde F. Adeyemo, PLLC, Metropolitan Detroit, Michigan, USA, immigration law"
        name="keywords" />
@endsection
@section('content')
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
                            <h1>Blog Posts</h1>
                            <p>Attorney | Counselor | Solicitor</p>
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



                <form method="GET" action="{{ url('search_articles_public') }}">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search Blog Posts" name="search" id="search"
                            type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i
                                    class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>

                @if ($show_searched_vrase == '1')
                    <h4 align="center">SEARCH RESULTS FOR: {{ $searching }} </h4>
                @endif
                <hr>

                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-lg-4 col-md-6">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="date-box">
                                        <div class="m">{{ Carbon\Carbon::parse($article->date_created)->format('d') }}
                                        </div>
                                        {{-- <div class="d">NOV</div> --}}
                                        <div class="d">
                                            {{ Carbon\Carbon::parse($article->date_created)->format('M Y') }}
                                        </div>

                                    </div>
                                    <div class="post-image">
                                        <a href="{{ url('/read_full_post/' . $article->article_id) }}">
                                            <img alt="" src="{{ asset('article_images/' . $article->averta) }}">
                                        </a>
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Law Firm</span>
                                        <h4><a href="{{ url('/read_full_post/' . $article->article_id) }}">{{ $article->article_title }}
                                                <span></span></a>
                                        </h4>
                                        <p>
                                            {{ substr($article->article_body_searchable, 0, 135) }}
                                        </p>
                                        <span class="p-author">Akintunde F. Adeyemo, Esq.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="spacer-single"></div>
                    {{-- <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul> --}}


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
        </section>
    </div>
    <!-- content close -->
    @include('layouts.jqueryminjs')
    <!-- WARNING!!! don't use togeter with dashboard_header -->
@endsection
