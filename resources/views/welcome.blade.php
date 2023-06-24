<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        @foreach($tit as $ti)
            {{$ti->title}}
        @endforeach
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <h1>
                    @foreach($tit as $ti)
                        {{$ti->title}}
                    @endforeach
                    <span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Project</a></li>
                    <li><a href="#team">Team</a></li>
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>
                        @foreach($tit as $ti)
                            {{$ti->title}}
                        @endforeach
                    </span></h2>
                    <p>We are a group of web developers</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#contact" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="about" class="about">
            @foreach ($abo as $a)
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>About Us</h2>
                    <p>You can find out about us here</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>{{$a->name}}</h3>
                        <img src="abouts/{{$a->img}}" class="img-fluid rounded-4 mb-4" alt="">
                        <p>{{$a->about}}</p>
                        <p>{{$a->about2}}</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                {{$a->know}}
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>HTML</li>
                                <li><i class="bi bi-check-circle-fill"></i>CSS</li>
                                <li><i class="bi bi-check-circle-fill"></i>JAVA SCRIPT</li>
                                <li><i class="bi bi-check-circle-fill"></i>PHP</li>
                                <li><i class="bi bi-check-circle-fill"></i>SQL</li>
                                <li><i class="bi bi-check-circle-fill"></i>LARAVEL 7</li>
                            </ul>
                            <p>
                                {{$a->work}}
                            </p>
                            <div class="position-relative mt-4">
                                <img src="abouts/{{$a->prevyu}}" class="img-fluid rounded-4" alt="">
                                <a href="{{$a->link}}" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="{{$cmes}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                        </div>
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="{{$cpro}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div>
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </section>
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section> --}}
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Here are the services we provide.</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>We will create a website</h3>
                            <p>We create websites of varying difficulty. The price depends on the difficulty of the website.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h3>We host websites</h3>
                            <p>We upload the sites prepared by us or prepared by others to the desired server, with the desired domain.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <h3>Fix errors</h3>
                            <p>We provide updates, corrections and bug fixes to the sites that were first created and placed on the server.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Projets</h2>
                    <p>Here are the sites we have completed and updated</p>
                </div>
                @foreach($pro as $pr)
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4 portfolio-container">
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{$pr->link}}" class="glightbox"><img src="/team/{{$pr->image}}" style="min-width: 100%; max-height: 250px;"class="img" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details"><a target="_blank" href="{{$pr->link}}">{{$pr->name}}</a></a></h4>
                                    <p>{{$pr->about}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>These are our best employees</p>
                </div>

                <div class="row gy-4">
                    @foreach($tea as $te)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="/team/{{$te->image}}" class="img-fluid" alt="">
                            <h4>{{$te->name}}</h4>
                            <span>{{$te->career}}</span>
                            <div class="social">
                                <a target="_blank" href="{{$te->teleg}}"><i class="bi bi-telegram"></i></a>
                                <a target="_blank" href="{{$te->insta}}"><i class="bi bi-instagram"></i></a>
                                <a target="_blank" href="{{$te->face}}"><i class="bi bi-facebook"></i></a>
                                <a target="_blank" href="{{$te->github}}"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Non consectetur a erat nam at lectus urna duis?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                        <span class="num">5.</span>
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section> --}}

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>contact us if you have an order</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            @foreach ($dat as $d)
                                <div class="info-item d-flex">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h4>Location:</h4>
                                        <p>{{$d->location}}</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h4>Email:</h4>
                                        <p>{{$d->email}}</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-phone flex-shrink-0"></i>
                                    <div>
                                        <h4>Call:</h4>
                                        <p>{{$d->call}}</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex">
                                    <i class="bi bi-clock flex-shrink-0"></i>
                                    <div>
                                        <h4>Open Hours:</h4>
                                        <p>{{$d->online}}</p>
                                    </div>
                                </div><!-- End Info Item -->
                            @endforeach
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="sendmes" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
    <script src="assets/js/main.js"></script>
    {{-- <script src="assets/vendor/lock.js"></script> --}}


</body>
</html>