<?php

session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title> Article - YouthCare </title>

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/img/Only logo.png" type="img/png" />
	<!--====== Animate Css ======-->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--====== Flaticon css ======-->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!--====== Slick Css ======-->
	<link rel="stylesheet" href="assets/css/slick.min.css" />
	<!--====== Lity Css ======-->
	<link rel="stylesheet" href="assets/css/lity.min.css" />
	<!--====== Main css ======-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--====== Responsive css ======-->
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
	<!--====== Preloader ======-->
	<div id="preloader">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>

	<!--====== Header Start ======-->
	<header class="site-header sticky-header">
		<div class="header-topbar d-none d-sm-block">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-auto">
						<ul class="contact-info">
							<li><a href="#"><i class="far fa-envelope"></i> youthcare2022@gmail.com</a></li>
							<li><a href="#"><i class="far fa-map-marker-alt"></i> Kaliurang KM 14.5, Yogyakarta, Indonesia</a></li>
						</ul>
					</div>
					<div class="col-auto d-none d-md-block">
						<ul class="social-icons">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar-inner">
					<div class="site-logo">
						<a href="index.php"><img src="assets/img/Logo Youthcare (1).png" alt="Logo"></a>
					</div>
					<div class="nav-menu">
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="project-details.php">Health Service</a>
								<ul class="submenu">
									<li><a href="podcast.php">Podcast</a></li>
									<li><a href="shop.php">Shop</a></li>
									<li><a href="donation.php">Donation</a></li>
									<li><a href="project-details.php">Service Details</a></li>
								</ul>
							</li>
							<li>
								<a href="news-standard.php">Article</a>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul class="submenu">
									<li><a href="about.php">About</a></li>
									<li><a href="company-overview.php">Company Overview</a></li>
									<li><a href="team-member.php">Team Member</a></li>
									<li><a href="faq.php">FAQ</a></li>
									<li><a href="testimonial.php">Testimonials</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>	
					<div class="navbar-extra d-flex align-items-center" id="logout">
						<p class="d-none d-sm-inline-block">
							<?php
							echo "Welcome, ".ucfirst($_SESSION['user_name'])."!";
							?>
						</p>
					</div>
					<div class="navbar-extra d-flex align-items-center" id="logout">
						<a href="logout.php" class="main-btn nav-btn d-none d-sm-inline-block">
							Logout
						</a>
						<a href="login.php">
							<span></span>
						</a>
					</div>
					<div class="navbar-extra d-flex align-items-center">
						<a href="#" class="nav-toggler">
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-menu-panel">
			<div class="panel-logo">
				<a href="index.php"><img src="assets/img/Logo Youthcare (1).png" alt="Logo"></a>
			</div>
			<ul class="panel-menu">
				<li class="current">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="project-details.php">Health Services</a>
					<ul class="submenu">
						<li><a href="podcast.php">Podcast</a></li>
						<li><a href="shop.php">Shop</a></li>
						<li><a href="donation.php">Donation</a></li>
						<li><a href="project-details.php">Service Details</a></li>
					</ul>
				</li>
				<li>
					<a href="news-standard.php">Article</a>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul class="submenu">
						<li><a href="about.php">About</a></li>
						<li><a href="company-overview.php">Company Overview</a></li>
						<li><a href="team-member.php">Team Member</a></li>
						<li><a href="faq.php">FAQ</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<div class="panel-extra">
				<a href="#" class="main-btn btn-white">
					Login <i class="far fa-arrow-right"></i>
				</a>
			</div>
			<a href="#" class="panel-close">
				<i class="fal fa-times"></i>
			</a>
		</div>
	</header>
	<!--====== Header End ======-->

	<!--====== Page Title Start ======-->
	<section class="page-title-area">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-8">
					<h1 class="page-title">Articles</h1>
				</div>
				<div class="col-auto">
					<ul class="page-breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>Articles</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== Page Title End ======-->

	<!--====== Blog Standard Area Start ======-->
    <section class="blog-area section-gap-extra-bottom primary-soft-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-loop">
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/01.jpg" alt="Thumbnail">
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Rina Yuita</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i> 10 December 2022</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.php">Mental Health & Neurology</a>
                                </h3>
                                <a href="news-details.php" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
						<div class="post-item video-post">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/03.jpg" alt="Thumbnail">
								<a href="https://www.youtube.com/watch?v=Og5xAdC8EUI" class="video-popup" data-lity><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Rolion Syah</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i> 05 December 2022</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.php">Digestive Services</a>
                                </h3>
                                <a href="news-details.php" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
						<div class="post-item">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/02.jpg" alt="Thumbnail">
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Dion Sakarona</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i> 10 November 2022</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.php">Orthopaedic, Arthritis & Sports Injuries</a>
                                </h3>
                                <a href="news-details.php" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
						<div class="post-item thumbnail-as-bg">
                            <div class="post-thumbnail">
                                <img src="assets/img/blog/01.jpg" alt="Thumbnail">
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Lala Lili</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i>10 February 2022</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.php">Mental Health & Neurology</a>
                                </h3>
                                <a href="news-details.php" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
						<div class="post-item no-thumbnail">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>
                                        <a href="#"><i class="far fa-user-circle"></i>Joni Jatur</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="far fa-calendar-alt"></i>25 February 2021</a>
                                    </li>
                                </ul>
                                <h3 class="title">
                                    <a href="news-details.php">Digestive Services</a>
                                </h3>
                                <a href="news-details.php" class="post-link">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-left"></i></a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-right"></i></a></li>
					</ul>
                </div>
				<div class="col-lg-4">
					<div class="blog-sidebar">
						<div class="widget search-widget">
							<h4 class="widget-title">Search Here</h4>
							<form action="#">
								<input type="text" placeholder="Keywoards">
								<button><i class="fas fa-search"></i></button>
							</form>
						</div>
						<div class="widget category-widget">
							<h4 class="widget-title">Category</h4>
							<ul>
								<li><a href="#">Business (5) <i class="far fa-angle-right"></i></a></li>
								<li><a href="#">Construction (7) <i class="far fa-angle-right"></i></a></li>
								<li><a href="#">Creative (9) <i class="far fa-angle-right"></i></a></li>
								<li><a href="#">International (2) <i class="far fa-angle-right"></i></a></li>
								<li><a href="#">Management (5) <i class="far fa-angle-right"></i></a></li>
								<li><a href="#">Technology (2) <i class="far fa-angle-right"></i></a></li>
								<li><a href="#">Uncategorized (3) <i class="far fa-angle-right"></i></a></li>
							</ul>
						</div>
						<div class="widget latest-blog-widget">
							<h4 class="widget-title">Latest News</h4>
							<ul>
								<li>
									<div class="thumb">
										<img src="assets/img/latest-news/widget-01.jpg" alt="Image">
									</div>
									<div class="desc">
										<h6><a href="news-details.php">Orthopaedic, Arthritis & Sports Injuries</a></h6>
										<span class="date"><i class="far fa-calendar-alt"></i>10 November 2021</span>
									</div>
								</li>
								<li>
									<div class="thumb">
										<img src="assets/img/latest-news/widget-02.jpg" alt="Image">
									</div>
									<div class="desc">
										<h6><a href="news-details.php">Digestive Services</a></h6>
										<span class="date"><i class="far fa-calendar-alt"></i>25 May 2021</span>
									</div>
								</li>
								<li>
									<div class="thumb">
										<img src="assets/img/latest-news/widget-03.jpg" alt="Image">
									</div>
									<div class="desc">
										<h6><a href="news-details.php">Mental Health & Neurology</a></h6>
										<span class="date"><i class="far fa-calendar-alt"></i>25 May 2021</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="widget tags-widget">
							<h4 class="widget-title">Popular Tags</h4>
							<ul>
								<li><a href="#">Lawyer</a></li>
								<li><a href="#">Crowd</a></li>
								<li><a href="#">Funding</a></li>
								<li><a href="#">consultancy</a></li>
								<li><a href="#">Law farms</a></li>
								<li><a href="#">management</a></li>
								<li><a href="#">planning</a></li>
							</ul>
						</div>
						<div class="widget cta-widget">
							<div class="cta-content">
								<h4 class="title">Get Free <br> Consultations</h4>
								<span class="subtitle">Special advisors</span>
								<p>
									Quis autem vel eum iure repreh ende
								</p>
								<a href="#" class="cta-button">Get a Quoate</a>


								<div class="cta-img">
									<img src="assets/img/cta/cta-widget.jpg" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	<!--====== Blog Standard Area End ======-->

	<!--====== Footer Start ======-->
	<footer class="site-footer with-footer-cta">
		<div class="footer-cta">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
					<div class="col-lg-7 col-md-8 col-sm-10">
						<span class="cta-tagline">25 Years Of Experience In Donating</span>
						<h3 class="cta-title">Raise Hand to Help Others</h3>
					</div>
					<div class="col-lg-auto col-md-6">
						<a href="contact.php" class="main-btn bordered-btn bordered-white mt-md-30">
							Donate Now <i class="far fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-content-area">
			<div class="container">
				<div class="footer-widgets">
					<div class="row justify-content-between">
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="widget about-widget">
								<div class="footer-logo">
									<!-- <h3 style="color: aliceblue;">YouthCare</h3> -->
									<img src="assets/img/Logo Youthcare.png" alt="Logo">
								</div>
								<p>
									Assisting your health with our services
								</p>
								<div class="newsletter-form">
									<h5 class="form-title">Join Newsletters</h5>
									<form action="#">
										<input type="text" placeholder="Email Address">
										<button type="submit"><i class="far fa-arrow-right"></i></button>
									</form>
								</div>
							</div>
						</div>
											<div class="col-lg-2 col-md-5 col-sm-6">
							<div class="widget nav-widget">
								<h4 class="widget-title">Our Services</h4>
								<ul>
									<li><a href="podcast.php">Podcast</a></li>
									<li><a href="shop.php">Shop</a></li>
									<li><a href="donation.php">Donation</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="widget nav-widget">
								<h4 class="widget-title">Support</h4>
								<ul>
									<li><a href="about.php">Privacy Policy</a></li>
									<li><a href="contact.php">Conditions</a></li>
									<li><a href="company-overview.php">Company</a></li>
									<li><a href="faq.php">Faq & Terms</a></li>
									<li><a href="contact.php">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-auto col-md-5 col-sm-8">
							<div class="widget contact-widget">
								<h4 class="widget-title">Contact Us</h4>
								<ul class="info-list">
									<li>
										<span class="icon"><i class="far fa-phone"></i></span>
										<span class="info">
											<span class="info-title">Phone Number</span>
											<a href="#">0272-32980</a>
										</span>
									</li>
									<li>
										<span class="icon"><i class="far fa-envelope-open"></i></span>
										<span class="info">
											<span class="info-title">Email Address</span>
											<a href="#">youthcare2022@gmail.com</a>
										</span>
									</li>
									<li>
										<span class="icon"><i class="far fa-map-marker-alt"></i></span>
										<span class="info">
											<span class="info-title">Locations</span>
											<a href="#">Kaliurang KM. 14,5, Yogyakarta, Indonesia</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright-area">
					<div class="row flex-md-row-reverse">
						<div class="col-md-6">
							<ul class="social-icons">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<p class="copyright-text">© 2022 <a href="#">YouthCare</a>. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== Footer End ======-->

	<!--====== jquery js ======-->
	<script src="assets/js/jquery.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!--====== Inview js ======-->
	<script src="assets/js/jquery.inview.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Lity js ======-->
	<script src="assets/js/lity.min.js"></script>
	<!--====== Wow js ======-->
	<script src="assets/js/wow.min.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>

</body>

</html>