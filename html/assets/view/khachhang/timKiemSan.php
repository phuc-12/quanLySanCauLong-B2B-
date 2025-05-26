<?php
session_start();
// error_reporting(0);
$idnguoidung = $_SESSION['idnguoidung'];
$maDN = $_SESSION['maDN'];

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:25:18 GMT -->
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>DreamSports</title>

	<!-- Meta Tags -->
	<meta name="twitter:description" content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
	<meta name="keywords" content="badminton, coaching, event, players, training, courts, tournament, athletes, courts rent, lessons, court booking, stores, sports faqs, leagues, chat, wallet, invoice">
	<meta name="author" content="Dreamguys - DreamSports">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@dreamguystech">
	<meta name="twitter:title" content="DreamSports -  Booking Coaches, Venue for tournaments, Court Rental template">

	<meta name="twitter:image" content="../../img/meta-image.jpg">
	<meta name="twitter:image:alt" content="DreamSports">

	<meta property="og:url" content="https://dreamsports.dreamguystech.com/">
	<meta property="og:title" content="DreamSports -  Booking Coaches, Venue for tournaments, Court Rental template">
	<meta property="og:description" content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
	<meta property="og:image" content="../../img/meta-image.jpg">
	<meta property="og:image:secure_url" content="../../img/meta-image.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">

	<link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../img/apple-touch-icon-152x152.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Bootstrap Bundle (bao gồm Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../../plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../../plugins/fontawesome/css/all.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="../../css/feather.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
include_once("../../model/mUser.php");
$a= new mUser();
// $laymaKH = $maKH;	
$layid = $_REQUEST['id'];
$laytenND = $a->laycot("select tenKH from khachhang limit 1");
$laymaKH = $a->laycot("select maKH from khachhang where idnguoidung=$layid limit 1");
$laymaDN = $a->laycot("select maDN from doanhnghiep limit 1");
$laytenDN = $a->laycot("select tenDN from doanhnghiep limit 1");
?>
	<!-- <div id="global-loader" >
		<div class="loader-img">
			<img src="../../img/loader.png" class="img-fluid" alt="Global">
		</div>
	</div> -->
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<header class="header header-trans">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="../../../index.php" class="navbar-brand logo">
							<img src="../../img/logo.svg" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo-black.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav">
							<li class="active"><a href="index.php">Trang Chủ</a></li>
							<li class="has-submenu">
								<a href="#">Sân Cầu Lông <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Coaches Map</a>
										<ul class="submenu inner-submenu">
											<li><a href="coaches-map.html">Coaches Map</a></li>
											<li><a href="coaches-map-sidebar.html">Coaches Map Sidebar</a></li>
										</ul>
									</li>
									<li><a href="coaches-grid.html">Coaches Grid</a></li>
									<li><a href="coaches-list.html">Coaches List</a></li>
									<li><a href="coaches-grid-sidebar.html">Coaches Grid Sidebar</a></li>
									<li><a href="coaches-list-sidebar.html">Coaches List Sidebar</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Booking</a>
										<ul class="submenu">
											<li><a href="cage-details.html">Book a Court</a></li>
											<li><a href="coach-details.html">Book a Coach</a></li>
										</ul>
									</li>
									<li><a href="coach-detail.html">Coach Details</a></li>
									<li class="has-submenu">
										<a href="#">Venue</a>
										<ul class="submenu inner-submenu">
											<li><a href="listing-list.html">Venue List</a></li>
											<li><a href="venue-details.html">Venue Details</a></li>
										</ul>
									</li>
									<li><a href="coach-dashboard.html">Coach Dashboard</a></li>
									<li><a href="all-court.html">Coach Courts</a></li>
									<li><a href="add-court.html">List Your Court</a></li>
									<li><a href="coach-chat.html">Chat</a></li>
									<li><a href="coach-earning.html">Earnings</a></li>
									<li><a href="coach-wallet.html">Wallet</a></li>
									<li><a href="coach-profile.html">Profile Settings</a></li>
									<li><a href="invoice.html">Invoice</a></li>
								</ul>
								
							</li>
							<li class="has-submenu">
								<a href="#">Người Dùng <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="user-dashboard.html">User Dashboard</a></li>
									<li><a href="user-bookings.html">Bookings</a></li>
									<li><a href="user-chat.html">Chat</a></li>
									<li><a href="user-invoice.html">Invoice</a></li>
									<li><a href="user-wallet.html">Wallet</a></li>
									<li><a href="user-profile.php">Profile Edit</a></li>
									<li><a href="user-setting-password.html">Change Password</a></li>
									<li><a href="user-profile-othersetting.html">Other Settings</a></li>
								</ul>
								
							</li>
							<li class="has-submenu">
								<a href="#">Diễn Đàn <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="blog-list.html">Blog List</a></li>
								    <li class="has-submenu">
										<a href="javascript:void(0);">Blog List Sidebar</a>
										<ul class="submenu">
											<li><a href="blog-list-sidebar-left.html">Blog List Sidebar Left</a></li>
											<li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
										</ul>
									</li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Blog Grid Sidebar</a>
										<ul class="submenu">
											<li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar Left</a></li>
											<li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
										</ul>
									</li>
									<li><a href="blog-details.html">Blog Details</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Blog Details Sidebar</a>
										<ul class="submenu">
											<li><a href="blog-details-sidebar-left.html">Blog Detail Sidebar Left</a></li>
											<li><a href="blog-details-sidebar-right.html">Blog Detail Sidebar Right</a></li>
										</ul>
									</li>
									<li><a href="blog-carousel.html">Blog Carousel</a></li>
								</ul>
							</li>
							<li><a href="contact-us.html">Liên Hệ</a></li>
							<li class="login-link">
								<a href="register.php">Sign Up</a>
							</li>
							<li class="login-link">
								<a href="login.html">Sign In</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht logged-in">
								<?php
									if(isset($_REQUEST['id']) || isset($_REQUEST['maKH']))
									{
										echo '
											<li class="nav-item">
												<a class="nav-link btn btn-secondary" href="add-court.php"><span><i class="feather-check-circle"></i></span>Sân Của Bạn</a>
											</li>
											<li class="nav-item dropdown has-arrow logged-item">
												<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
													<span class="user-img">
														<img class="rounded-circle" src="../../img/profiles/avatar-05.jpg" width="31" alt="Darren Elder">
													</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<div class="user-header">
														<div class="avatar avatar-sm">
															<img src="../../img/profiles/avatar-05.jpg" alt="User" class="avatar-img rounded-circle">
														</div>
														<div class="user-text">
															<h6>'.$laytenND.'</h6>
															<a href="../../../user-profile.php?id='.$layid.'" style="color:black;" class="text-profile mb-0">Go to Profile</a>
														</div>
													</div>
													<p><a class="dropdown-item"  href="coach-profile.php">Settings</a></p>
													<p><a class="dropdown-item"  href="login.php">Logout</a></p>
												</div>
											</li>
										';
									}
									else 
									{
										echo '
										<li class="nav-item">
											<div class="nav-link btn btn-white log-register">	
												<a href="login.php"><span><i class="feather-users"></i></span>Đăng Nhập</a> / <a href="register.php">Đăng Ký</a>
										</div>
										</li>
										';
									}
								?>
					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->

		<!-- Hero Section -->
		<section class="hero-section">	
			<div class="banner-cock-one">
				<img src="../../img/icons/banner-cock1.svg" alt="Banner">
			</div>
			<div class="banner-shapes">
				<div class="banner-dot-one">
					<span></span>
				</div>
				<div class="banner-cock-two">
					<img src="../../img/icons/banner-cock2.svg" alt="Banner">
					<span></span>
				</div>
				<div class="banner-dot-two">
					<span></span>
				</div>
			</div>	
			<div class="container">
				<div class="home-banner">
					<div class="row align-items-center w-100">
						<div class="col-lg-7 col-md-10 mx-auto">
							<div class="section-search aos" data-aos="fade-up">
								<h4>Sân cầu lông cao cấp và Dịch vụ chuyên nghiệp</h4>
								<h1>Chọn <span>Sân Cầu Lông Tốt</span> Và Bắt Đầu Hành Trình Rèn Luyện</h1>
								<p class="sub-info">Giải phóng tiềm năng thể thao của bạn với cơ sở vật chất hiện đại và dịch vụ chuẩn thi đấu.</p>
								<div class="search-box">
									<form action="timKiemSan.php" method="GET">
										<input type="search" name="keyword" placeholder="Bạn cần tìm gì" autocomplete="off" required>
										<input type="submit" name="btn" id="btn" value="Search">
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="banner-imgs text-center aos" data-aos="fade-up">
								<img class="img-fluid" src="../../img/bg/banner-right.png" alt="Banner">
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!-- /Hero Section -->
        <!-- search  -->
        <section class="section featured-venues" >
			<div class="container" style="height: 800px">
				<div class="section-heading aos" data-aos="fade-up">
					<h2><span>Địa Điểm Liên Quan</span></h2>
					<!-- <p class="sub-title">Các địa điểm thể thao tiên tiến cung cấp cơ sở vật chất mới nhất, môi trường năng động và độc đáo để nâng cao hiệu suất chơi cầu lông.</p> -->
				</div>
				<div class="row">
			        <div class="featured-slider-group ">
			        	<div class="owl-carousel featured-venues-slider owl-theme">
							<?php
								if (isset($_GET['btn'])) {
									$keyword = $_GET['keyword'];  // Get the search query from the GET parameter
									include_once("../../controller/cUser.php");  // Include the controller

									// Create a controller object and call the searchAction method
									$p = new CUser();
									$timSan = $p->searchAction($keyword);  // Pass the search term to the controller's searchAction
								}

								if (!empty($timSan)) { ?>
									<h2>Kết quả tìm kiếm được là: </h2>
									<?php 
										while($r = $timSan->fetch_assoc())
											{
												echo '
												<div class="menu-item" style="width: 350px; height: 350px; margin-bottom: 20px; margin-right: 30px; float: left;">
													<div class="featured-venues-item aos" data-aos="fade-up">
														<div class="listing-item mb-0">										
															<div class="listing-img">
																<a href="../../../venue-details.php?maSan='.$r['maSan'].'">
																	<img src="../../img/venues/'.$r['hinhAnh'].'" alt="Venue">
																</a>
																<div class="fav-item-venues">
																	<span class="tag tag-blue">Đang Hoạt Động</span>		
																	<h5 class="tag tag-primary">'.$r['giaMacDinh'].'<span>/Giờ</span></h5>
																</div>
															</div>										
															<div class="listing-content">
																<div class="list-reviews">							
																	<div class="d-flex align-items-center">
																		<span class="rating-bg">4.2</span><span>300 Reviews</span> 
																	</div>
																	<a href="javascript:void(0)" class="fav-icon">
																		<i class="feather-heart"></i>
																	</a>
																</div>	
																<h3 class="listing-title">
																	<a href="../../../venue-details.php?maSan='.$r['maSan'].'">'.$r['tenSan'].'</a>
																</h3>
																<div class="listing-details-group">
																	<p>'.$r['moTa'].'</p>
																	<ul>
																		<li>
																			<span>
																				<i class="feather-map-pin"></i>'.$r['diaChi'].'
																			</span>
																		</li>
																		<li>
																			<span>
																				<i class="feather-calendar"></i>Giờ mở cửa: <span class="primary-text">'.$r['gioMoCua'].'</span>
																			</span>
																		</li>
																	</ul>
																</div>
																<div class="listing-button">
																	<div class="listing-venue-owner">											
																	</div>
																	<a href="venue-details.php" class="user-book-now"><span><i class="feather-calendar me-2"></i></span>Đặt Ngay</a>
																</div>	
															</div>
														</div>
													</div>
													</div>
												';
											}
								} ?>
						</div>	
					</div>
				</div>

				<!-- View More -->
				<!-- <div class="view-all text-center aos" data-aos="fade-up">
					<a href="listing-grid.php" class="btn btn-secondary d-inline-flex align-items-center">Xem tất cả<span class="lh-1"><i class="feather-arrow-right-circle ms-2"></i></span></a>
				</div> -->
				<!-- View More -->

			</div>
		</section>
		<!-- /Newsletter -->

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<!-- Footer Join -->
				<div class="footer-join aos" data-aos="fade-up">
					<h2>We Welcome Your Passion And Expertise</h2>
					<p class="sub-title">Join our empowering sports community today and grow with us.</p>
					<a href="register.php" class="btn btn-primary"><i class="feather-user-plus"></i> Tham gia cùng chúng tôi</a>
				</div>
				<!-- /Footer Join -->
			
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="row">
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h4 class="footer-title">Contact us</h4>
								<div class="footer-address-blk">
									<div class="footer-call">
										<span>Toll free Customer Care</span>
										<p>+017 123 456 78</p>
									</div>
									<div class="footer-call">
										<span>Need Live Suppot</span>
										<p><a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94f0e6f1f5f9e7e4fbe6e0e7d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a></p>
									</div>
								</div>
								<div class="social-icon">
									<ul>
										<li>
											<a href="javascript:void(0);" class="facebook" ><i class="fab fa-facebook-f"></i> </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="twitter" ><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="javascript:void(0);" class="instagram" ><i class="fab fa-instagram"></i></a>
										</li>
										<li>
											<a href="javascript:void(0);" class="linked-in" ><i class="fab fa-linkedin-in"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h4 class="footer-title">Quick Links</h4>
								<ul>
									<li>
										<a href="about-us.html">About us</a>
									</li>
									<li>
										<a href="services.html">Services</a>
									</li>
									<li>
										<a href="events.html">Events</a>
									</li>
									<li>
										<a href="blog-grid.html">Blogs</a>
									</li>
									<li>
										<a href="contact-us.html">Contact us</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h4 class="footer-title">Support</h4>
								<ul>
									<li>
										<a href="contact-us.html">Contact Us</a>
									</li>
									<li>
										<a href="faq.html">Faq</a>
									</li>
									<li>
										<a href="privacy-policy.html">Privacy Policy</a>
									</li>
									<li>
										<a href="terms-condition.html">Terms & Conditions</a>
									</li>
									<li>
										<a href="pricing.html">Pricing</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h4 class="footer-title">Other Links</h4>
								<ul>
									<li>
										<a href="coaches-grid.html">Coaches</a>
									</li>
									<li>
										<a href="listing-grid.html">Sports Venue</a>
									</li>
									<li>
										<a href="coach-details.html">Join As Coach</a>
									</li>
									<li>
										<a href="coaches-map.html">Add Venue</a>
									</li>
									<li>
										<a href="my-profile.html">My Account</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h4 class="footer-title">Our Locations</h4>
								<ul>
									<li>
										<a href="javascript:void(0);">Germany</a>
									</li>
									<li>
										<a href="javascript:void(0);">Russia</a>
									</li>
									<li>
										<a href="javascript:void(0);">France</a>
									</li>
									<li>
										<a href="javascript:void(0);">UK</a>
									</li>
									<li>
										<a href="javascript:void(0);">Colombia</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h4 class="footer-title">Download</h4>
								<ul>
									<li>
										<a href="#"><img src="assets/img/icons/icon-apple.svg" alt="Apple"></a>
									</li>
									<li>
										<a href="#"><img src="assets/img/icons/google-icon.svg" alt="Google"></a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row align-items-center">
							<div class="col-md-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2023 DreamSports  - All rights reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<!-- Copyright Menu -->
								<div class="dropdown-blk">
									<ul class="navbar-nav selection-list">
										<li class="nav-item dropdown">
											<div class="lang-select">
												<span class="select-icon"><i class="feather-globe"></i></span>
												<select class="select">
													<option>English (US)</option>
													<option>UK</option>
													<option>Vietnamese</option>
												</select>
											</div>
										</li>
										<li class="nav-item dropdown">
											<!-- <div class="lang-select">
												<span class="select-icon"></span>
												<select class="select">
													<option>$ USD</option>
													<option>$ Euro</option>
												</select>				
											</div>	 -->
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
		<!-- chatbox -->
		<!-- <div class="chatbox">
			<input type="checkbox" id="click">
			<label for="click">
			<i class="fab fa-facebook-messenger"></i>
			<i class="fas fa-times"></i>
			</label>
			<div class="wrapper">
				<div class="head-text">
					Bắt đầu chat? - Online
				</div>
				<div class="chat-box">
					<form id="chatRequestForm">
						
						<div class="field">
							<input type="hidden" id="maDN" value="<?php echo $laymaDN; ?>" />
							<input type="hidden" id="tenDN" value="<?php echo $laytenDN; ?>" />
							<select id="companySelect" style="color:black; border: 1px solid red; padding: 5px;">
								<option value="">Loading...</option>
							</select>
						</div>
						
						<div class="field textarea">
							<textarea name="message" cols="30" rows="10" placeholder="Yêu cầu của bạn" required></textarea>
						</div>
						 
						<div class="field">
							<input type="hidden" name="maKH" id="maKH" value="<?php echo $laymaKH ?>">
							<button type="submit">Bắt đầu chat</button>
						</div>
					</form>
				</div>
			</div>
		</div> -->
		<!-- /chatbox -->
	</div>
	<!-- /Main Wrapper -->

	<!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->

	

	<!-- jQuery -->
	    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../js/jquery-3.7.1.min.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="../../js/bootstrap.bundle.min.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <!-- Select JS -->
    <script src="../../plugins/select2/js/select2.min.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <!-- Custom JS -->
    <script src="../../js/script.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="f8cd716c2156471ab2fab488-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"92a5cd62af4a1a5b","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>

</body>
</html>