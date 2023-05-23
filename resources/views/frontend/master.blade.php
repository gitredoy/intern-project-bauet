<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hello-YourName</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('project/frontend/assets')}}/img/favicon.png" rel="icon">
    <link href="{{asset('project/frontend/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('project/frontend/assets')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('project/frontend/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('project/frontend/assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('project/frontend/assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('project/frontend/assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('project/frontend/assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('project/frontend/assets')}}/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset('project/frontend/assets')}}/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-github"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                <li><a href="#testimonials" class="nav-link scrollto"><i class="bx bx-award"></i> <span>Testimonials</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
@include('frontend.include.hero')
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    @include('frontend.include.about')
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    @include('frontend.include.facts')
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    @include('frontend.include.skills')
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    @include('frontend.include.resume')
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('frontend.include.portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    @include('frontend.include.services')
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('frontend.include.testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->

    @include('frontend.include.contact')

    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Riseup Labs</span></strong>
        </div>
        <div class="credits">
            Designed by <a href="https://nasimredoy.xyz/">Nasim Redoy</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('project/frontend/assets')}}/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/aos/aos.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/typed.js/typed.min.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('project/frontend/assets')}}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('project/frontend/assets')}}/js/main.js"></script>

</body>

</html>
