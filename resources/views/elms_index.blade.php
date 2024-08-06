<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ELMS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon"><!-- for title imag -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/profileModal.css" rel="stylesheet">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>ELMS</h1>
                <span>.</span>
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('elms_index#hero') }}"
                            class="{{ request()->is('elms_index') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('elms_index#about') }}">About</a></li>
                    <li><a href="{{ url('elms_index#services') }}">Services</a></li>

                    <li><a href="{{ url('elms_index#contact') }}">Contact</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->

            {{-- <a class="btn-getstarted" href="{{ url('user/profile') }}">Profile</a> --}}
            <div class="">
                <button id="openModalButton" class="btn btn-primary">{{ Auth::user()->name }}</button>
                <div class="modal1" id="myModal">
                    <div class="modal-content1">
                        <span class="close1" id="closeModalButton">&times;</span>
                        <a href="{{ url('user/profile') }}">Profile</a>
                        {{-- <a href="{{ route('logout') }}">Log Out</a> --}}
                        <a><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form></a>
                    </div>
                </div>
            </div>





        </div>
    </header><!-- End Header -->
    <main id="main">

        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <img src="intro-bg.jpg" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to ELMS</h2>
                        <p data-aos="fade-up" data-aos-delay="200">We are providing loan to our emplyees which working
                            in our orgnization</p>
                    </div>
                    <div class="col-lg-5">
                        <form action="{{ route('form.view') }}" class="sign-up-form d-flex" data-aos="fade-up"
                            data-aos-delay="300">
                            <input type="text" class="form-control" placeholder="Make a request for loan" readonly>
                            <input type="submit" class="btn btn-primary" value="Apply now">
                        </form>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->
        <!-- About Section - Home Page -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>About Us</h3>
                        <h2>Empowering Financial Wellness Through Smart Loan Management</h2>
                        <p>ELMS is a leading provider of innovative and efficient employee loan management solutions. We
                            specialize in creating user-friendly platforms that streamline the loan management process,
                            empowering both employees and administrators.</p>
                        <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Our Mission</h3>
                                    <p>Our mission is to revolutionize the loan management experience for organizations
                                        and their employees.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>What We Offer</h3>
                                    <p>Employee Loan Management System: Our advanced web-based platform enables
                                        employees to easily apply for loans, track their loan status, and manage
                                        repayments.

                                    </p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>Why Choose Us</h3>
                                    <p>Cutting-Edge Technology: We leverage the latest technologies to build robust and
                                        secure loan management systems. Our solutions are designed to be scalable,
                                        customizable, and adaptable to meet the unique requirements of each
                                        organization.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Our Approach</h3>
                                    <p>We work closely with our clients to gain a deep understanding of their loan
                                        management requirements</p>
                                </div>
                            </div> <!-- End Icon Box -->

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- Services Section - Home Page -->
        <section id="services" class="services">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Transforming Loan Management with Expert Solutions and Exceptional Service</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Loan
                                        Application Management</a>
                                </h4>
                                <p class="description">Allow employees to easily apply for loans online by providing a
                                    guided application process, collecting necessary information, and supporting
                                    document uploads.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Loan
                                        Approval and Processing</a></h4>
                                <p class="description">Our robust loan approval system automates workflows, allowing
                                    administrators to efficiently review loan applications. Verify eligibility criteria,
                                    make informed decisions, and streamline communication channels for requesting
                                    additional information or documentation. </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Data
                                        Visualization and Analysis</a></h4>
                                <p class="description">Our team of experts specializes in transforming complex data
                                    into clear and visually appealing representations.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Loan
                                        Tracking and Repayment Management</a></h4>
                                <p class="description">Empower employees to monitor the status of their loans, view
                                    repayment schedules, and make payments online through our comprehensive loan
                                    tracking system. Provide administrators with tools to track loan repayments,
                                    generate reports, and manage outstanding balances effectively.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo
                                        Enim</a>
                                </h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod
                                        Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                    libero tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
            <!-- start testimonials -->
            <section id="testimonials" class="testimonials">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
                            <h3>Client Reviews</h3>
                            <p>
                                Our clients are at the center of everything we do. We prioritize your satisfaction and
                                success, working closely with you to understand your goals and deliver solutions that
                                align with your vision. We believe in building long-lasting relationships based on
                                trust, transparency, and open communication.
                            </p>
                        </div>

                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

                            <div class="swiper">
                                <template class="swiper-config">
                                    {
                                    "loop": true,
                                    "speed" : 600,
                                    "autoplay": {
                                    "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                    }
                                    }
                                </template>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-1.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Saul Goodman</h3>
                                                    <h4>Ceo & Founder</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Working with ELMS has been an absolute pleasure. Their team went
                                                    above and beyond to understand our needs and delivered a website
                                                    that exceeded our expectations. The level of professionalism and
                                                    attention to detail is outstanding. Highly recommended!</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-2.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Sara Wilsson</h3>
                                                    <h4>Designer</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>I can't express enough how impressed I am with the loan management
                                                    system provided by ELMS. It has revolutionized the way we handle
                                                    employee loans. The system is intuitive, secure, and customizable to
                                                    our organization's needs.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-3.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Jena Karlis</h3>
                                                    <h4>Store Owner</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Managing employee loans was a daunting task until we implemented
                                                    [Your Company Name]'s loan management system. The system simplified
                                                    the entire process, from application to repayment tracking. It has
                                                    saved us time and significantly reduced paperwork. Their solution is
                                                    a game-changer for loan management!</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-4.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>Matt Brandon</h3>
                                                    <h4>Freelancer</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>I can't imagine managing employee loans without ELMS's system. It
                                                    has streamlined our processes and improved our loan management
                                                    efficiency. The ability to generate reports and track loan
                                                    repayments has been invaluable.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="d-flex">
                                                <img src="assets/img/testimonials/testimonials-5.jpg"
                                                    class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>John Larson</h3>
                                                    <h4>Entrepreneur</h4>
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i><i
                                                            class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>As a financial institution, we needed a reliable loan management
                                                    system, and ELMS delivered. Their platform integrates seamlessly
                                                    with our existing systems and has provided us with comprehensive
                                                    loan tracking and reporting capabilities.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                    </div>

                </div>

            </section><!-- End Testimonials Section -->
            <!-- Contact Section - Home Page -->
            <section id="contact" class="contact">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Get in Touch for Personalized Loan Management Solutions</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-6">

                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>A108 Adam Street</p>
                                        <p>New York, NY 535022</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                        <p>+1 6678 254445 41</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                        <p>contact@example.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                </div><!-- End Info Item -->

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action="{{ route('store_complain') }}" method="post" class="php-email-form1"
                                data-aos="fade-up" data-aos-delay="200" id="">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required>
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Subject" required>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>
    </main>
    </section><!-- End Contact Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>ELMS</span>
                    </a>
                    <p>We are always with you on social media</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">loan</a></li>
                        <li><a href="#">Intalments</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>Lahore, NY 535022</p>
                    <p>Pakistan</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+92 247900527</span></p>
                    <p><strong>Email:</strong> <span>ELMS Info@gmail.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; <span>Copyright</span> <strong class="px-1">ELMS</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">

                Designed by <a href="index.html">Saim Yasin</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/complainForm.js"></script>
    <script src="assets/js/profileModal.js"></script>


    <x-app-layout >
    </x-app-layout>
</body>

</html>
