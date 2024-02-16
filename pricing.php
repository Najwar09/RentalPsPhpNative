<?php
include 'koneksi.php';

$query = "SELECT * FROM ps";
$hasil = mysqli_query($connection,$query);

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AiNext - AI Agency & Startup HTML Template</title>

        <!-- CSS Linked -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/remixicon.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- favicon Linked -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">

    </head>
    <body>

        <!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <h2>AiNext</h2>
                </a>
                <a class="navbar-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link active">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link active">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">
                                        Tearm & Condition
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="not-found.html" class="nav-link">
                                        404 Error Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="portfolio.html" class="nav-link">
                                Portfolio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">
                                        Blog Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-sidebar.html" class="nav-link">
                                        Blog Right Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="nav-btn">
                        <a href="contact.html" class="default-btn">
                            Get Started
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar Area -->

        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="index.html" class="logo d-inline-block">
                    <h2>AiNext</h2>
                </a>
                <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="responsive-menu">
                    <li class="responsive-menu-list without-icon">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="responsive-menu-list"><a href="javascript:void(0);" class="active">Pages</a>
                        <ul class="responsive-menu-items">
                            <li><a href="about.html">About</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="pricing.html" class="active">Pricing</a></li>
                            <li><a href="terms-conditions.html">Terms Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="4o4.html">404 Error Page</a></li>
                            <li><a href="contact.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="responsive-menu-list without-icon">
                        <a href="portfolio.html">Portfolio</a>
                    </li>
                    
                    <li class="responsive-menu-list"><a href="javascript:void(0);">Blog</a>
                        <ul class="responsive-menu-items">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="responsive-menu-list without-icon">
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="others-option d-md-flex align-items-center">
                    <div class="option-item">
                        <a href="contact.html" class="default-btn">
                            <i class="ri-arrow-right-line"></i>
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Responsive Navbar Area -->

        <!-- Start Banner Area -->
        <div class="section-banner">
            <div class="container">
                <div class="section-banner-title">
                    <h1>Pricing</h1>
                    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Pricing Area -->
        <div class="pricing-area ptb-100 section-bg">
            <div class="section-title-center">
                <div class="width">
                    <div class="sub-t">Best Pricing Plans</div>
                    <h2>Our Pricing Plans</h2>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- pertama -->
                    <?php
                    foreach ($hasil as $isi) {
                    ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card">
                            <h2 class="card_title"><i class="ri-vip-crown-line"></i><?= $isi['nama_ps']; ?></h2>
                            <h3 class="pricing"><?= $isi['harga']; ?><span class="small">/jam</span></h3>
                            <hr>
                            <ul class="features">
                                <li>Gratis Ongkir</li>
                                <li>Sewa diatas 5 jam gratis 1 jam</li>
                                <li>jaminan ktp</li>
                            </ul>
                            <a href="contact.html" class="cta_btn">Sewa</a>
                        </div>
                    </div>
                    <?php } ?>
                
                </div>
            </div>
        </div>
        <!-- End Pricing  Area -->

        <!-- Start Article Area -->
        <div class="article-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <div class="width">
                                <div class="sub-t">Our Latest News</div>
                                <h2>Latest News & Articles</h2>
                                <a class="main-btn" href="#"><span></span><i class="ri-pencil-line"></i> See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="article-content owl-carousel owl-theme">
                            <div class="item" data-aos="fade-up" data-aos-duration="1500">
                                <img src="assets/img/blogs/artical-1.jpg" alt="image">
                                <div class="pop-content">
                                    <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>
                                    <ul>
                                        <li>March 18, 2022</li>
                                        <li><span>0</span>Comments</li>
                                    </ul>
                                </div>
                                <a href="blog-details.html">
                                    <div class="go-corner" href="#">
                                        <div class="go-arrow">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-duration="1500">
                                <img src="assets/img/blogs/artical-3.jpg" alt="image">
                                <div class="pop-content">
                                    <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>
                                    <ul>
                                        <li>March 18, 2022</li>
                                        <li><span>0</span>Comments</li>
                                    </ul>
                                </div>
                                <a href="blog-details.html">
                                    <div class="go-corner" href="#">
                                        <div class="go-arrow">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-duration="1500">
                                <img src="assets/img/blogs/artical-2.jpg" alt="image">
                                <div class="pop-content">
                                    <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>
                                    <ul>
                                        <li>March 18, 2022</li>
                                        <li><span>0</span>Comments</li>
                                    </ul>
                                </div>
                                <a href="blog-details.html">
                                    <div class="go-corner" href="#">
                                        <div class="go-arrow">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item" data-aos="fade-up" data-aos-duration="1500">
                                <img src="assets/img/blogs/artical-4.jpg" alt="image">
                                <div class="pop-content">
                                    <h3><a href="blog-details.html">The actual history of machine intelligence</a></h3>
                                    <ul>
                                        <li>March 18, 2022</li>
                                        <li><span>0</span>Comments</li>
                                    </ul>
                                </div>
                                <a href="blog-details.html">
                                    <div class="go-corner" href="#">
                                        <div class="go-arrow">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Article Area -->

        <!-- Start Brands Area -->
        <div class="brands-area pt-70 pb-70">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image">
                            <img src="assets/img/01.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image">
                            <img src="assets/img/02.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image">
                            <img src="assets/img/03.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image">
                            <img src="assets/img/04.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image">
                            <img src="assets/img/05.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brands Area -->

        <!-- Start Insta Gallery Area -->
        <div class="insta-gallery">
            <div class="conatiner-fluid">
                <div class="ins-gallery owl-carousel owl-theme">
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-1.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-10.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-2.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-3.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-4.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-5.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-6.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-7.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-8.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                    <div class="items">
                        <a href="https://www.instagram.com/" target="_blank" >
                            <img src="assets/img/gallery/insta-9.jpg" alt="image">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Insta Gallery Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top-area pt-100">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <a href="index.html" class="logo">
                                    <h2>AiNext</h2>
                                </a>
                                <p>Lorem ipsum amet, consectetur adipiscing elit. Suspendis varius enim eros elementum tristique. Duis cursus.</p>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                    <li><a href="https://www.youtube.com/" target="_blank"><i class="ri-youtube-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget pl-5">
                                <h3>Links</h3>
                                <ul class="links-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Legal</h3>
                                <ul class="links-list">
                                    <li><a href="contact.html">Legal</a></li>
                                    <li><a href="terms-conditions.html">Tearms of Use</a></li>
                                    <li><a href="terms-conditions.html">Tearm & Condition</a></li>
                                    <li><a href="contact.html">Payment Method</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Newsletter</h3>
                                <div class="footer-newsletter-info">
                                    <p>Join over <span>68,000</span> people getting our emails Lorem ipsum dolor sit amet consectet </p>
                                    <form class="newsletter-form" data-toggle="validator">
                                        <label><i class='bx bx-envelope-open'></i></label>
                                        <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required autocomplete="off">
                                        <button type="submit" class="default-btn"><i class="ri-send-plane-line"></i> Subscribe Now</button>
                                        <div id="validator-newsletter2" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-line"></div>
                <div class="footer-bottom-area">
                    <p>© Copyright | <a href="https://alhikmahsoft.com" target="_blank">AlHikmahSoft</a>  | All Rights Reserved is Proudly </p>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Top to Bottom -->
        <div id="progress">
            <span id="progress-value"><i class="ri-arrow-up-line"></i></span>
        </div>
        <!-- End Top to Bottom -->

        <!-- Js Linked -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/ainext.js"></script>
    </body>
</html>