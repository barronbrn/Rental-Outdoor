
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>RestoRes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./assets/img/hero-img.png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <style>
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    @vite('resources/css/app.css')

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename ms-5">Dar Der Dor</h1>
                <span>.</span>
            </a>

            <!--  -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#" class="text-lg text-black">Home<br></a></li>
                    <li><a href="#" class="text-lg text-black">About</a></li>
                    <li><a href="#" class="text-lg text-black">Our Products</a></li>
                    <li><a href="" class="text-lg text-black">Cek Pembayaran</a></li>
                    <li><a class="btn-getstarted" href="">Order Now</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <div>

            </div>
            
        </div>
        <a class="btn-getstarted" href="reservasi.php">Login</a>
        <a class="btn-getstarted ms-3 me-5 " href="reservasi.php">Register</a>
    </header>

    @yield('content')

    <footer id="footer" class="footer dark-background">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-geo-alt icon"></i>
                <div class="address">
                    <h4>Address</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p></p>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-telephone icon"></i>
                <div>
                    <h4>Contact</h4>
                    <p>
                        <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                        <strong>Email:</strong> <span>restores@gmail.com</span><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex">
                <i class="bi bi-clock icon"></i>
                <div>
                    <h4>Opening Hours</h4>
                    <p>
                        <strong>Mon-Sat:</strong> <span>9AM - 23PM</span><br>
                        <strong>Sunday</strong>: <span>Closed</span>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4>Follow Us</h4>
                <div class="social-links d-flex">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">RestoRes</strong> <span>All Rights Reserved</span></p>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>