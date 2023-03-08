{{-- <div id="topbar" class="topbar-noborder">
    <div class="container">
        <div class="topbar-left sm-hide">
            <span class="topbar-widget tb-social">
                <a href="https://www.facebook.com/The-Law-Office-of-Akintunde-F-Adeyemo-PLLC-103019422444789/"
                    target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
            </span>
        </div>
        <div class="topbar-right">
            <div class="topbar-right">
                <span class="topbar-widget"><a href="{{ url('/disclaimer_and_privacy_policy') }}">Disclaimer & Privacy
                        Policy</a></span>
                <span class="topbar-widget"><a href="{{ url('/faq') }}">FAQ</a></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div> --}}
<!-- header begin -->
<header class="scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <img alt="" class="logo"
                                    src="{{ asset('asset_justica/justica_html/images/logo-light.png') }}" />
                                <img alt="" class="logo-2"
                                    src="{{ asset('asset_justica/justica_html/images/logo.png') }}" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a>
                                <ul>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/read_full_post/11') }}">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            @guest
                                <li><a href="{{ url('/login') }}">Login</a>
                                    {{-- <ul>
                                        <li><a href="{{ route('login') }}">{{ __('login') }}</a></li>
                                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    </ul> --}}

                                </li>
                            @else
                                <li><a href="{{ url('/login') }}">{{ Auth::user()->name }}</a>
                                    <ul>

                                        @permission('can-view-dashboard')
                                            <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
                                        @endpermission
                                        <li><a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                        <!-- mainmenu close -->
                    </div>
                    <div class="de-flex-col">
                        <div class="h-phone md-hide"><span>Need&nbsp;Help?</span><i class="fa fa-phone"></i>
                            734-318-7053</div>
                        <span id="menu-btn"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
