        <style>
            .imgx22 {
                height: 150px;
                weight: 150px;
            }
        </style>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget">
                            <a href="{{ url('/') }}"><img alt="" class="img-fluid mb20"
                                    src="{{ asset('asset_justica/justica_html/images/logo-light.png') }}"></a>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>Metropolitan Detroit, Michigan,
                                    USA.</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>734-318-7053</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:contact@example.com">info@akinalaw.com</a></span>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="id-color mb20">SERVICES</h5>
                        <ul class="ul-style-2">
                            <a href="{{ url('/service1') }}">
                                <li>Permanent Residency (“Green Card”)</li>
                            </a>
                            <a href="{{ url('/service2') }}">
                                <li>Citizenship & Naturalization </li>
                            </a>
                            <a href="{{ url('/service3') }}">
                                <li>Removal & Relief</li>
                            </a>
                            <a href="{{ url('/service4') }}">
                                <li>Consular Practice</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget">
                            {{-- <h5 class="id-color">Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news, updates and special offers in your
                                inbox.</p>
                            <form action="blank.php" class="row" id="form_subscribe" method="post"
                                name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="name_1" name="name_1"
                                        placeholder="enter your email" type="text" /> <a href="#"
                                        id="btn-submit"><i class="fa fa-long-arrow-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small> --}}
                            <div class="col text-center">
                                <img class="di-big img-fluid"
                                    src="{{ asset('asset_justica/justica_html/images/misc/p4.jpg') }}" alt="" />
                                <a
                                    href="https://app.clio.com/link/v2/2/2/935ec92fce67512b988b9ccc3017c435?hmac=5feef7bf8e1ce937d9d35dc1155fa4332aafee0ebd49c1a0d72c7901c5e21782">
                                    <img class="di-big img-fluid imgx22"
                                        src="{{ asset('asset_justica/justica_html/images/misc/p5.png') }}"
                                        alt="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>Make a Payment</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div id="topbar" class="topbar-noborder"> --}}
            <div class="container">

                <div class="social-icons">
                    <a href="https://www.facebook.com/The-Law-Office-of-Akintunde-F-Adeyemo-PLLC-103019422444789/"
                        target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                    {{-- <a href="#"><i class="fa fa-pinterest fa-lg"></i></a> --}}
                    {{-- <a href="" target="_blank"><i class="fa fa-rss fa-lg"></i></a> --}}
                </div>

                <div class="topbar-right">
                    <div class="topbar-right">
                        <span class="topbar-widget"><a href="{{ url('/disclaimer_and_privacy_policy') }}">Disclaimer
                                & Privacy
                                Policy</a></span>
                        <span class="topbar-widget"><a href="{{ url('/read_full_post/11') }}">FAQ</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            {{-- </div> --}}


            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    &copy; {{ date('Y') }} The Law Office of Akintunde F. Adeyemo, PLLC • All
                                    Rights
                                    Reserved
                                </div>
                                {{-- <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/The-Law-Office-of-Akintunde-F-Adeyemo-PLLC-103019422444789/"
                                            target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
