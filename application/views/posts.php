<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O.P.S - Ottakarathevar Panneerselvam</title>
     <!-- favicon -->
     <link rel=icon href=<?php echo base_url(); ?>assets/basic/img/favicon.png sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/magnific-popup.css">
    <!-- Slick -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/slick.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/slick-theme.css" />
    <!-- nice select -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/nice-select.css">
    <!-- swiper -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/swiper.min.css" />
    <!-- animated css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/animated-slider.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/flaticon.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/responsive.css">
	
</head>
<body>


    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!--sidebar menu start-->
    <div class="sidebar-menu" id="sidebar-menu">
        <button class="sidebar-menu-close"><i class="flaticon-close"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <img src="assets/img/logo.png" alt="logo"/>
            </div>
            <div class="sidemenu-text">
                <p>We believe brand interaction is key in commu- nication. Real inno vations and a positive customer experience are the heart of successful commu- nication.</p>
            </div>
            <div class="sidebar-contact">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Lavaca Street, Suite 2000</li>
                    <li><i class="fa fa-envelope"></i>email@evha.com</li>
                    <li><i class="fa fa-phone"></i>(+880) 172570051</li>
                </ul>
            </div>
            <div class="sidebar-subscribe">
                <input type="text" placeholder="Email">
                <button><i class="fa fa-long-arrow-right"></i></button>
            </div>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sidebar menu end-->

    <!-- navbar start -->
    <div class="politix-navbar">
        <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu" 
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>assets/basic/img/ops_web_logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="billatrail_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="menu-item-has-children">
                            <a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>index/about_ops/"><i class="fa fa-long-arrow-right"></i>About OPS</a></li>
                                <li><a href="<?php echo base_url(); ?>index/about_party/"><i class="fa fa-long-arrow-right"></i>About Party</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index/posts/">Posts</a></li>
                        <li><a href="<?php echo base_url(); ?>index/events/">Events</a></li>
						
                        <li class="menu-item-has-children">
                            <a href="#">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>index/photos/"><i class="fa fa-long-arrow-right"></i>Photos</a></li>
                                <li><a href="<?php echo base_url(); ?>index/videos/"><i class="fa fa-long-arrow-right"></i>Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="nav-right-part">
                    <ul>
                        <li class="search" id="search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="menubar d-none d-lg-block" id="navigation-button">
                            <a><i class="flaticon-menu-button"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">Posts</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/posts/">Recent Posts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-icon">
            <i class="flaticon-fireworks"></i>
        </div>
    </div>
    <!-- breadcrumb-area end -->

  

    <div class="blog-area margin-top-100 padding-bottom-100">
        <div class="container">
            <div class="row blog-no-sidebar">
                <div class="col-lg-8 offset-lg-4">
                    <div class="blog-item-style-02 margin-top-120">
                        <div class="b-img">
                            <a href="#"><img src="<?php echo base_url(); ?>assets/basic/img/blog/blog1.png" alt=""></a>
                        </div>
                        <div class="b-content">
                            <span class="causes-tag mr-3"><a href="#">Politics</a></span>
                            <div class="blog-date-box">
                                <h4>28<br><span>Dec</span></h4>
                            </div>
                            <h4 class="section-title"><a href="blog-details.html">Key chairs call to cancel the press conference</a></h4>
                            <p>Completely synergize resource taxing relationships via premier niche Professionally cultivate one-to-one customer service with.</p>
                        </div>
                        
                        <div class="blog-meta d-flex flex-column flex-lg-row">
                            <div class="blog-social-share d-flex mr-4">
                                <span>Share</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-wrapper">
                                <a href="<?php echo base_url(); ?>/index/post_details/">Read more</a> ➝
                            </div>
                        </div>
                    </div>
                    <div class="blog-item-style-02 margin-top-120">
                        <div class="b-img">
                            <a href="#"><img src="<?php echo base_url(); ?>assets/basic/img/blog/blog2.png" alt=""></a>
                        </div>
                        <div class="b-content">
                            <span class="causes-tag mr-3"><a href="#">Politics</a></span>
                            <div class="blog-date-box">
                                <h4>28<br><span>Dec</span></h4>
                            </div>
                            <h4 class="section-title"><a href="blog-details.html">Key chairs call to cancel the press conference</a></h4>
                            <p>Completely synergize resource taxing relationships via premier niche Professionally cultivate one-to-one customer service with.</p>
                        </div>
                        
                        <div class="blog-meta d-flex flex-column flex-lg-row">
                            <div class="blog-social-share d-flex mr-4">
                                <span>Share</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-wrapper">
                                <a href="<?php echo base_url(); ?>/index/post_details/">Read more</a> ➝
                            </div>
                        </div>
                    </div>
                    <div class="blog-item-style-02 margin-top-120">
                        <div class="b-img">
                            <a href="#"><img src="<?php echo base_url(); ?>assets/basic/img/blog/blog3.png" alt=""></a>
                        </div>
                        <div class="b-content">
                            <span class="causes-tag mr-3"><a href="#">Politics</a></span>
                            <div class="blog-date-box">
                                <h4>28<br><span>Dec</span></h4>
                            </div>
                            <h4 class="section-title"><a href="blog-details.html">Key chairs call to cancel the press conference</a></h4>
                            <p>Completely synergize resource taxing relationships via premier niche Professionally cultivate one-to-one customer service with.</p>
                        </div>
                        
                        <div class="blog-meta d-flex flex-column flex-lg-row">
                            <div class="blog-social-share d-flex mr-4">
                                <span>Share</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fa fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-wrapper">
                                <a href="<?php echo base_url(); ?>/index/post_details/">Read more</a> ➝
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="pagination-area d-flex justify-content-center margin-top-50 padding-bottom-50">
                        <ul>
                            <li>
                                <span class="page-bumber current">01</span>
                            </li>
                            <li>
                                <span class="page-bumber">02</span>
                            </li>
                            <li>
                                <span class="page-bumber">03</span>
                            </li>
                            <li>
                                <span class="next page-bumber"> <i class="fa fa-angle-right"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <!-- footer area start -->
   <footer class="footer-area footer-style-1 main-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 margin-xlt-80">
						<div class="row">
							<img src="<?php echo base_url(); ?>assets/basic/img/ops_web_logo.png" alt="logo">
							<p style="padding-top:20px;color:#ffffff;">Ottakarathevar Panneerselvam is an Indian politician serving as the 2nd and current Deputy Chief Minister of Tamil Nadu since 21 August 2017. He is the coordinator of All India Anna Dravida Munnetra Kazhagam.</p>
						</div>
                    </div>
                    <div class="col-xl-9 margin-xlt-80">
                        <div class="row">
                            <div class="col-lg-3 col-xl-3 offset-xl-1">
                                <div class="footer-widget widget widget_nav_menu">
                                    <h4 class="widget-title">Follow Us On</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Donate</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Manifesto</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Members</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Call To Action</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Volunteer</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="footer-widget widget">
                                    <h4 class="widget-title">Download Our APP On</h4>
									 <div class="row">
										<div class="col-xl-5"><img src="<?php echo base_url(); ?>assets/basic/img/app_store.png" alt="news"></div>
										<div class="col-xl-5"><img src="<?php echo base_url(); ?>assets/basic/img/playstore.png" alt="news"></div>
									</div>
                                </div>
								<div class="copyright-area-inner copyright-sm margin-top-35">
                                    Copyrights@All rights reserved. Developed by Happy sanz tech</a>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- jquery -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="<?php echo base_url(); ?>assets/basic/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/basic/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="<?php echo base_url(); ?>assets/basic/js/wow.min.js"></script>
    <!-- animated slider -->
    <script src="<?php echo base_url(); ?>assets/basic/js/animated-slider.js"></script>
    <!-- nice select -->
    <script src="<?php echo base_url(); ?>assets/basic/js/nice-select.js"></script>
    <!-- owl carousel -->
    <script src="<?php echo base_url(); ?>assets/basic/js/owl.carousel.min.js"></script>
    <!-- Slick -->
    <script src="<?php echo base_url(); ?>assets/basic/js/slick.min.js"></script>
    <!-- Slick Animation -->
    <script src="<?php echo base_url(); ?>assets/basic/js/slick-animation.js"></script>
    <!-- counterup -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.counterup.min.js"></script>
    <!-- waypoint -->
    <script src="<?php echo base_url(); ?>assets/basic/js/waypoints.min.js"></script>
    <!-- imageloaded -->
    <script src="<?php echo base_url(); ?>assets/basic/js/imagesloaded.pkgd.min.js"></script>
    <!-- swiper -->
    <script src="<?php echo base_url(); ?>assets/basic/js/swiper.min.js"></script>
    <!-- isotope -->
    <script src="<?php echo base_url(); ?>assets/basic/js/isotope.pkgd.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.classyloader.js"></script>

    <!-- main js -->
    <script src="<?php echo base_url(); ?>assets/basic/js/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/basic/js/main.js"></script>
</body>
</html>
