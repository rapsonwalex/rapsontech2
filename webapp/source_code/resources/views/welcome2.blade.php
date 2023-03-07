@extends('layouts.master')
@section('content')
    <!--content-->
    <script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            $("#slider2").responsiveSlides({
                auto: true,
                pager: true,
                speed: 300,
                namespace: "callbacks",
            });
        });
    </script>

    <div class="banner">
        <div class="container">

            <!--banner-->
            <div class="slider">
                <ul class="rslides" id="slider2">
                    <li>
                        <div class="banner-text">
                            <h2>IT Infrastructure <span>Management</span></h2>
                            <h6> Networking | Server Admin | Web Hosting | Corporate Mail</h6>
                        </div>
                    </li>
                    <li>
                        <div class="banner-text">

                            <h2> Web Application <span> Development</span></h2>
                            <h6>Personal Websites | Corporate Business | E-commerce | School Mag Sys</h6></b>
                        </div>
                    </li>
                    <li>
                        <div class="banner-text">
                            <h2>Business intelligence <span>(BI)</span></h2>
                            <h6>Qlik Sense | Qlik view | SAP</h6>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--content-->
    <div class="service" id="services">
        <div class="container">
            <div class="ser-top">
                <h3>Services</h3>
                <div class="ser-t">
                    <b></b>
                    <b class="line"></b>
                </div>
                <p> Our Services include IT Infrastructure Management, Business Intelligence, Web Design, IT Training,
                    Graphic Design, Cyber Forensic and Information Security.</p>

            </div>
            <div class="service-head">
                <div class="col-md-5 ser-head">

                    <h5>IT Training</h5>
                    <img src="{{ asset('assets/images/tr2.jpg') }}" class="img-responsive" alt="">
                    <p>We provide world class IT training courses like CCNA, CCNP, MCSE, MCITP, RHCSA RHCE, Ethical Hacking,
                        IT Security Awareness and More. These trainings are conducted by certified trainers.</p>

                    <ul>
                        <li><i class="glyphicon glyphicon-edit"></i><b>One on One Training:
                                Are you a busy type? Do you want to enhance your knowledge and boost up your career? And you
                                want to learn at your own free time? Then don't worry because we are here to serve you.</li>
                        <li><i class="glyphicon glyphicon-edit"></i><b>Corporate Training:</b> Do you want to improve the IT
                            skills of your staff? We provide customized IT trainings to make your employees more efficient
                            and grow your business.</li>
                        <li><i class="glyphicon glyphicon-edit"></i><b>Catch Them Young:</b> Your Kids too can become the
                            next Bill Gate of Microsoft and Mark Zuckerberg of Facebook. Catch them young is our Summer
                            Programming Boot Camp for Kids. Bring your children and let's unlock the potentials in them.
                        </li>
                    </ul>

                </div>
                <div class="col-md-7 ser-head1">
                    <div class="col-md-6 ser-grid ">
                        <span></span>
                        <div class=" hi-icon-effect-7 hi-icon-effect-7a">
                            <i class="glyphicon glyphicon-cog hi-icon "> </i>
                        </div>
                        <h3>IT Infrastructure Management</h3>

                        <p>We can help you manage an existing IT infrastructure or deploy a new one from scratch. We have
                            Experts who can take care of your business</p>

                    </div>
                    <div class="col-md-6 ser-grid ">
                        <div class=" hi-icon-effect-7 hi-icon-effect-7a">
                            <i class="glyphicon glyphicon-cloud-upload hi-icon "> </i>
                        </div>
                        <h3>Web Application Development</h3>

                        <p>Our Programing team can put up a professional responsive website for your organization which will
                            satisfy your needs</p>

                    </div>
                    <div class="col-md-6 ser-grid ">
                        <div class=" hi-icon-effect-7 hi-icon-effect-7a">
                            <i class="glyphicon glyphicon-bold hi-icon "> </i>
                        </div>

                        <h3>Business intelligence</h3>
                        <p>We use Qlik Sense to analyze your data and present meaningful information to help your company
                            make more informed business decisions</p>
                    </div>
                    <div class="col-md-6 ser-grid ">
                        <div class=" hi-icon-effect-7 hi-icon-effect-7a">
                            <i class="glyphicon glyphicon-lock hi-icon"> </i>
                        </div>
                        <h3>IT Security</h3>
                        <p>We offer excellent services on IT Security, Cyber Forensic, Data Recovery, Penetration Testing,
                            Security Training and Awareness.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!---statistics-->
    <div class="statistics" id="success">
        <div class="container">
            <div class="ser-top ser-top1">
                <h3>Our Key To Success</h3>

                <div class="ser-t">
                    <b></b>
                    <b class="line"></b>
                </div>
            </div>
            <div class="statistics-grids">
                <div class="col-md-3 statistics-grid">
                    <div class="statistics-text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='28'
                            data-delay='.5' data-increment="100">28</div>
                        <h5>Happy Clients</h5>
                        <div class="sar-t">
                            <b></b>
                            <b class="line-1"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 statistics-grid">
                    <div class="statistics-text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='86'
                            data-delay='.5' data-increment="100">86</div>
                        <h5>Coffee Cups</h5>
                        <div class="sar-t">
                            <b></b>
                            <b class="line-1"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 statistics-grid">
                    <div class="statistics-text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1'
                            data-delay='.5' data-increment="100">1</div>
                        <h5>Awards Won</h5>
                        <div class="sar-t">
                            <b></b>
                            <b class="line-1"></b>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 statistics-grid">
                    <div class="statistics-text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3'
                            data-delay='.5' data-increment="100">3</div>
                        <h5>Employees</h5>
                        <div class="sar-t">
                            <b></b>
                            <b class="line-1"></b>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---statistics-->

    <!--gallery-->
    <div class="gallery" id="gallery">
        <div class="container">
            <div class="ser-top ga-top">
                <h3>Portfolio </h3>
                <div class="ser-t">
                    <b></b>
                    <b class="line"></b>
                </div>
            </div>

            <ul class="simplefilter">
                <li class="active" data-filter="all">All</li>
                <li data-filter="1">Web Design</li>
                <li data-filter="2">Graphic Design</li>
                <li data-filter="3">Mobile Apps</li>
                <li data-filter="4">IT Infrastructure</li>
                <li data-filter="5">Business intelligence</li>
            </ul>

            <div class="filtr-container">
                <div class="  filtr-item gallery-t" data-category="1, 3" data-sort="Busy streets">

                    <a href="{{ asset('assets/images/webdesign1.jpg') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/webdesign1.jpg') }}" class="img-responsive"
                                alt=" " />
                            <figcaption>
                                <h3>Corporate Website</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>
                <div class=" filtr-item" data-category="2" data-sort="Luminous night">
                    <a href="{{ asset('assets/images/logo1.png') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/logo1.png') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>Logo Design</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>
                <div class=" filtr-item" data-category="5" data-sort="City wonders">
                    <a href="{{ asset('assets/images/bi1.jpg') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/bi1.jpg') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>Business intelligence</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>
                <div class="  filtr-item" data-category="5" data-sort="In production">
                    <a href="{{ asset('assets/images/bi2.jpg') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/bi2.jpg') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>Qlik Products</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>
                <div class=" filtr-item" data-category="3" data-sort="Industrial site">
                    <a href="{{ asset('assets/images/mobile1.jpg') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/mobile1.jpg') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>Mobile App Development</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>

                <div class=" filtr-item" data-category="2" data-sort="Peaceful lake">
                    <a href="{{ asset('assets/images/logo2.png') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/logo2.png') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>Brochure Design</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>

                <div class="  filtr-item" data-category="4" data-sort="City lights">
                    <a href="{{ asset('assets/images/iti2.jpg') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/iti2.jpg') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>IT Infrastructure Management</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>

                <div class=" filtr-item" data-category="2" data-sort="Dreamhouse">
                    <a href="{{ asset('assets/images/logo3.png') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/logo3.png') }}" class="img-responsive" alt=" " />
                            <figcaption>
                                <h3>Letterhead Design</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>

                <div class="  filtr-item" data-category="1" data-sort="City lights">
                    <a href="{{ asset('assets/images/webdesign2.jpg') }}" rel="title"
                        class="b-link-stripe b-animate-go  thickbox">

                        <figure>
                            <img src="{{ asset('assets/images/webdesign2.jpg') }}" class="img-responsive"
                                alt=" " />
                            <figcaption>
                                <h3>Responsive Website</h3>
                            </figcaption>
                        </figure>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery & Filterizr -->

    <script src="{{ asset('assets/js/jquery.filterizr.js') }}"></script>
    <script src="{{ asset('assets/js/controls.js') }}"></script>

    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>
    <!---->
    <script src="{{ asset('assets/js/jquery.chocolat.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/chocolat.css') }}" type="text/css" media="screen"
        charset="utf-8">
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.filtr-item a').Chocolat();
        });
    </script>

    <!--//gallery-->
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

    <!-- requried-jsfiles-for owl -->
    <script>
        $(document).ready(function() {
            $("#owl-demo2").owlCarousel({
                items: 1,
                lazyLoad: false,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <!-- start content_slider -->


    <!---->

    <div class="test" id="testimonials">
        <div class="container">
            <div class="ser-top ga-top">
                <h3>About Us</h3>
                <div class="ser-t">
                    <b></b>
                    <b class="line"></b>
                </div>
                <p>Rapsontech Company is divided in three sub-units. Repsontech IT Solutions, Rapsontech IT Security Consult
                    and Rapsontech IT Training and Development.</p>
            </div>
            <div class=" test-grid-1">
                <div class=" col-md-4 test-wrapper">
                    <img src="{{ asset('assets/images/wa5.png') }}" alt="" class="img-responsive">
                </div>
                <div class="col-md-8 test-grid1">
                    <div id="owl-demo2" class="owl-carousel">
                        <div class=" test-grid">
                            <p>Repsontech IT Solutions (RITS)</p>
                            <br>
                            <p>The Rapsontech IT solutions is the Unit of Rapsontech that takes care of IT Infrastructure
                                Management, Software Development, Business Intelligence and Graphic Design. The RITS is made
                                of able and competent experts in the different fields of IT demands.</p>
                            <img src="{{ asset('assets/images/left-1.png') }}" alt="" class="img-responsive">
                        </div>
                        <div class=" test-grid">
                            <p>Rapsontech IT Security Consult (RITSC)</p>
                            <br>
                            <p>Rapsontech IT Security Consult mission is to increase IT security awareness, and ensures
                                adequate security for IT infrastructures by providing world class security and forensic
                                support with constant research and training for our clients.
                            </p>
                            <img src="{{ asset('assets/images/left-1.png') }}" alt="" class="img-responsive">
                        </div>
                        <div class=" test-grid">
                            <p>Rapsontech IT Training and Development (RITTD)</p>
                            <br>
                            <p>The Rapsontech IT Training and Development is the educational unit of Rasontech. Our primary
                                aim is to provide high quality IT training to corporations and private individuals. Our
                                training programmes are very flexible and are designed to suit our clients demands and time.
                            </p>
                            <img src="{{ asset('assets/images/left-1.png') }}" alt="" class="img-responsive">

                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    </div>
    <!---->
    <div class="team" id="team">
        <div class="container">
            <div class="ser-top ga-top">
                <h3>Our Team</h3>
                <div class="ser-t">
                    <b></b>
                    <b class="line"></b>
                </div>

            </div>

            <div class="col-md-3 bottom-grid ">
                <div class="btm-right">
                    <img src="{{ asset('assets/images/adewale.jpg') }}" class="img-responsive" alt=" ">
                    <div class="captn">
                        <h4>Adewale</h4>
                        <p>Ceo (MSc, BSc, CCNA, RHCE, RHCSA, MCSA)</p>
                        <ul class="captn2">
                            <li><a href="#" class="icon1"></a></li>
                            <li><a href="#" class="icon2"></a></li>
                            <li><a href="#" class="icon3"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 bottom-grid ">
                <div class="btm-right">
                    <img src="{{ asset('assets/images/ibidun.jpg') }}" class="img-responsive" alt=" ">
                    <div class="captn">

                        <h4>Ibidun</h4>
                        <p>Graphic Designer (BA, PMP)</p>
                        <ul class="captn2">
                            <li><a href="#" class="icon1"></a></li>
                            <li><a href="#" class="icon2"></a></li>
                            <li><a href="#" class="icon3"></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>

    <!--contact-->
    <div class="map-top" id="contact">
        <div class="col-md-8 map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.945301083344!2d7.462621014286886!3d9.068747990863374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b1e0f5b2015%3A0xe16251969c0f9ab9!2sWuse+Market!5e0!3m2!1sen!2s!4v1477513659119"></iframe>
        </div>
        <div class="col-md-4 address">
            <div class="contact-grid1">


                <h4>Address</h4>
                <p>Wuse Zone 2 Abuja <span>Nigeria.</span></p>

            </div>

            <div class="contact-grid1">

                <h4>Call Us</h4>
                <p>+234 701 4105 465</p>

            </div>


            <div class="contact-grid1">

                <h4>Email</h4>
                <p><a href="mailto:info@example.com">info@rapsontech.com</a></p>

            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="ser-top ga-top">
                <h3>Contact</h3>
                <div class="ser-t">
                    <b></b>
                    <b class="line"></b>
                </div>
                <p> For Information and inquiries about our services, Please contact us Now.</p>

            </div>
            <div class="top-contact">
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-6 grid-contact">
                        <div class="your-top">
                            <i class="glyphicon glyphicon-user"> </i>
                            <input type="text" placeholder="Name" id="name" name="name"
                                value="{{ Request::old('name') }}" required>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="your-top">
                            <i class="glyphicon glyphicon-envelope"> </i>
                            <input type="text" placeholder="E-mail" id="email" name="email"
                                value="{{ Request::old('email') }}" required>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="your-top">
                            <i class="glyphicon glyphicon-phone"> </i>
                            <input type="text" placeholder="Phone No" id="phone_no" name="phone_no"
                                value="{{ Request::old('phone_no') }}">
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                    <div class="col-md-6 grid-contact-in">
                        <textarea placeholder=" Message" id="message" name="message" value="{{ Request::old('message') }}" required></textarea>
                        <input type="submit" value="Send">
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
@endsection
