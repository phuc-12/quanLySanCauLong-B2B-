<?php

	session_start();
	$_SESSION['maKH']=$_REQUEST['maKH'];

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:34:48 GMT -->
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

	<meta name="twitter:image" content="assets/img/meta-image.jpg">
	<meta name="twitter:image:alt" content="DreamSports">

	<meta property="og:url" content="https://dreamsports.dreamguystech.com/">
	<meta property="og:title" content="DreamSports -  Booking Coaches, Venue for tournaments, Court Rental template">
	<meta property="og:description" content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
	<meta property="og:image" content="../assets/img/meta-image.jpg">
	<meta property="og:image:secure_url" content="assets/img/meta-image.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.default.min.css">

	<!-- Select CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
	
	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<div id="global-loader" >
		<div class="loader-img">
			<img src="assets/img/loader.png" class="img-fluid" alt="Global">
		</div>
	</div>
<?php
	include_once("assets/model/mUser.php");
	$p = new mUser();
	$maKH = $_REQUEST['maKH'];
	$layidnguoidung = $p->laycot("SELECT idnguoidung FROM khachhang WHERE maKH = '$maKH' LIMIT 1");
?>
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
						<a href="index.php?id=<?php echo $layidnguoidung; ?>" class="navbar-brand logo">
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
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
							<li class="active"><a href="index.php?id=<?php echo $layidnguoidung; ?>">Trang Chủ</a></li>
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
						
								<!-- <a href="login.php"><span><i class="feather-users"></i></span>Đăng Nhập</a> / <a href="register.php">Đăng Ký</a> -->

								<?php
									if(isset($_REQUEST['maKH']))
									{
										echo '
											<li class="nav-item">
												<a class="nav-link btn btn-secondary" href="add-court.php"><span><i class="feather-check-circle"></i></span>Sân Của Bạn</a>
											</li>
											<li class="nav-item dropdown has-arrow logged-item">
												<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
													<span class="user-img">
														<img class="rounded-circle" src="assets/img/profiles/avatar-05.jpg" width="31" alt="Darren Elder">
													</span>
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<div class="user-header">
														<div class="avatar avatar-sm">
															<img src="assets/img/profiles/avatar-05.jpg" alt="User" class="avatar-img rounded-circle">
														</div>
														<div class="user-text">
															<h6>'.$laytenND.'</h6>
															<a href="user-profile.php?id='.$layid.'" style="color:black;" class="text-profile mb-0">Go to Profile</a>
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

		<!-- Breadcrumb -->
		<section class="breadcrumb breadcrumb-list mb-0">
			<span class="primary-right-round"></span>
			<div class="container">
				<h1 class="text-white">Lịch Sử Giao Dịch</h1>
				<ul>
					<li><a href="index.html">Trang Chủ</a></li>
					<li >Lịch Sử Giao Dịch</li>
				</ul>
			</div>
		</section>
		<!-- /Breadcrumb -->

		<!-- Dashboard Menu -->
		<!-- <div class="dashboard-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="dashboard-menu">
							<ul>
								<li>
									<a href="user-dashboard.html">
										<img src="assets/img/icons/dashboard-icon.svg" alt="Icon">
										<span>Dashboard</span>
									</a>
								</li>
								<li>
									<a href="user-bookings.html" class="active">
										<img src="assets/img/icons/booking-icon.svg" alt="Icon">
										<span>My Bookings</span>
									</a>
								</li>
								<li>
									<a href="user-chat.html">
										<img src="assets/img/icons/chat-icon.svg" alt="Icon">
										<span>Chat</span>
									</a>
								</li>
								<li>
									<a href="user-invoice.html">
										<img src="assets/img/icons/invoice-icon.svg" alt="Icon">
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="user-wallet.html">
										<img src="assets/img/icons/wallet-icon.svg" alt="Icon">
										<span>Wallet</span>
									</a>
								</li>
								<li>
									<a href="user-profile.html">
										<img src="assets/img/icons/profile-icon.svg" alt="Icon">
										<span>Profile Setting</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- /Dashboard Menu -->

		<!-- Page Content -->
		<div class="content court-bg">
			<div class="container">

				<!-- Sort By -->
				<div class="row">
					<div class="col-lg-12">
						<div class="sortby-section court-sortby-section">
							<div class="sorting-info">
								<div class="row d-flex align-items-center">
									<div class="col-xl-7 col-lg-7 col-sm-12 col-12">
										<div class="coach-court-list">
											<ul class="nav">
												<!-- <li><a href="user-bookings.html">Upcoming</a></li> -->
												<li><a href="user-complete.php?maKH=<?php echo $_SESSION['maKH']?>">Đã Thanh Toán</a></li>
												<li><a href="user-uncomplete.php?maKH=<?php echo $_SESSION['maKH']?>">Chưa Thanh Toán</a></li>
												<li><a class="active"  href="user-completeHD.php?maKH=<?php echo $_SESSION['maKH']?>">Dài Hạn</a></li>
											</ul>
										</div>
									</div>
									<div class="col-xl-5 col-lg-5 col-sm-12 col-12">
										<div class="sortby-filter-group court-sortby">
											<div class="sortbyset week-bg">
												<div class="sorting-select">
													<select class="form-control select">
														<option>This Week</option>
														<option>One Day</option>
													</select>
												</div>
											</div>
											<div class="sortbyset">
												<span class="sortbytitle">Sort By</span>
												<div class="sorting-select">
													<select class="form-control select">
														<option>Relevance</option>
														<option>Price</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- Sort By -->

				<div class="row">
					<div class="col-sm-12">
						<div class="court-tab-content">
							<div class="card card-tableset">
								<div class="card-body">
									<div class="coache-head-blk">
										<div class="row align-items-center">
											<div class="col-md-5">
												<div class="court-table-head">
													<h4>Giao Dịch Của Bạn</h4>
													<p>Theo dõi và quản lý các sân đã hoàn thành của bạn</p>
												</div>
											</div>
											<div class="col-md-7">
												<!-- <div class="table-search-top">
													<div id="tablefilter"></div>
													<div class="request-coach-list">
														<div class="card-header-btns">
															<nav>
																<div class="nav nav-tabs" role="tablist">
																	<button class="nav-link active" id="nav-Recent-tab" data-bs-toggle="tab" data-bs-target="#nav-Recent" type="button" role="tab" aria-controls="nav-Recent" aria-selected="true">Courts</button>
																	<button class="nav-link" id="nav-RecentCoaching-tab" data-bs-toggle="tab" data-bs-target="#nav-RecentCoaching" type="button" role="tab" aria-controls="nav-RecentCoaching" aria-selected="false">Coaches</button>
																</div>
															</nav>
														</div>
													</div>
												</div> -->
											</div>
										</div>
									</div>
									<div>
										
											<?php
												include_once("assets/view/sancaulong/viewlichsuhd.php");
											?>

										
										
										<div>
											<?php
												include_once('assets/model/mUser.php');
												$k = new mUser();

												if (isset($_POST['btn_xoa']) && isset($_POST['maDat'])) {
													$maXoa = $_POST['maDat'];
													if ($k->themxoasua("DELETE FROM hopdong WHERE maHopDong = '$maXoa' LIMIT 1") == 1) {
														echo '<script>
															alert("Đã hủy thành công!");
															window.location.href="user-completeHD.php?maKH=' . $_SESSION['maKH'] . '";
														</script>';
														exit();
													} else {
														echo '<script>alert("Hủy không thành công!");</script>';
													}
												}
											?>



										</div>
										
									</div>
									
								</div>
							</div> 
							
							<!-- <div class="tab-footer">
								<div class="row">
									<div class="col-md-6">
										<div id="tablelength"></div>
									</div>
									<div class="col-md-6">
										<div id="tablepage"></div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Content -->

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<!-- Footer Join -->
				<div class="footer-join">
					<h2>We Welcome Your Passion And Expertise</h2>
					<p class="sub-title">Join our empowering sports community today and grow with us.</p>
					<a href="register.html" class="btn btn-primary"><i class="feather-user-plus"></i> Join With Us</a>
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
										<p><a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45213720242836352a37313605203d24283529206b262a28">[email&#160;protected]</a></p>
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
										<a href="#"><img src="assets/img/icons/google-icon.svg" alt="Apple"></a>
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
													<option>Japan</option>
												</select>
											</div>
										</li>
										<li class="nav-item dropdown">
											<div class="lang-select">
												<span class="select-icon"></span>
												<select class="select">
													<option>$ USD</option>
													<option>$ Euro</option>
												</select>				
											</div>	
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

		<!-- complete Modal -->
		<div class="modal custom-modal fade request-modal" id="complete-court" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<div class="form-header modal-header-title">
							<h4 class="mb-0">Court Booking Details<span class="badge bg-success ms-2">Completed</span></h4>
						</div>
						<a  class="close" data-bs-dismiss="modal" aria-label="Close">
							<span class="align-center" aria-hidden="true"><i class="feather-x"></i></span>
						</a>
					</div>
					<div class="modal-body">

						<!-- Court Request -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Court Information</h4>
									</div>
									<div class="appointment-info">
										<ul class="appointmentset">
											<li>
												<div class="appointment-item">
													<div class="appointment-img">
														<img src="assets/img/booking/booking-03.jpg" alt="Appointment">
													</div>
													<div class="appointment-content">
														<h6>Wing Sports Academy</h6>
														<p class="color-green">Court 1</p>
													</div>
												</div>
											</li>
											<li>
												<h6>Booked On</h6>
												<p>$150 Upto 2 guests</p>
											</li>
											<li>
												<h6>Price Per Guest</h6>
												<p>$15</p>
											</li>
											<li>
												<h6>Maximum Number of Guests</h6>
												<p>2</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Appointment Information</h4>
									</div>
									<div class="appointment-info appoin-border">
										<ul class="appointmentset">
											<li>
												<h6>Booked On</h6>
												<p>Mon, Jul 14</p>
											</li>
											<li>
												<h6>Date & Time</h6>
												<p>Mon, Jul 14<span class="d-block">05:00 PM - 08:00 PM</span></p>
											</li>
											<li>
												<h6>Total Number of Hours</h6>
												<p>2</p>
											</li>
										</ul>
									</div>
								</div>
								
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Payment Details</h4>
									</div>
									<div class="appointment-info appoin-border double-row">
										<ul class="appointmentset">
											<li>
												<h6>Court Booking Amount</h6>
												<p>$150</p>
											</li>
											<li>
												<h6>Additional Guests</h6>
												<p>2</p>
											</li>
											<li>
												<h6>Amount Additional Guests</h6>
												<p>$30</p>
											</li>
											<li>
												<h6>Service Charge</h6>
												<p>$20</p>
											</li>
										</ul>
									</div>
									<div class="appointment-info appoin-border ">
										<ul class="appointmentsetview">
											<li>
												<h6>Total Amount Paid</h6>
												<p class="color-green">$180</p>
											</li>
											<li>
												<h6>Paid On</h6>
												<p>Mon, Jul 14</p>
											</li>
											<li>
												<h6>Transaction ID</h6>
												<p>#5464164445676781641</p>
											</li>
											<li>
												<h6>Payment type</h6>
												<p>Wallet</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Review Details</h4>
									</div>
									<div class="user-review-details">
										<div class="user-review-img">
											<img src="assets/img/profiles/avatar-01.jpg" alt="User">	
										</div>
										<div class="user-review-content">
											<div class="table-rating">
												<div class="rating-point">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<span>5.0</span>
											   </div>
											</div>
											<span><i class="fa fa-check me-2" aria-hidden="true"></i>Yes, I would book again.</span>
											<h6>Absolutely perfect</h6>
											<p>If you are looking for a perfect place for friendly matches with your friends or a competitive match, It is the best place.</p>
											<h5>Sent on 11/03/2023</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Court Request -->

					</div>
					<div class="modal-footer">
						<div class="table-accept-btn">
							<a href="javascript:;" data-bs-dismiss="modal" class="btn cancel-table-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /complete Modal -->

		<!-- complete Modal -->
		<div class="modal custom-modal fade request-modal" id="complete-coach" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<div class="form-header modal-header-title">
							<h4 class="mb-0">Coach Booking Details<span class="badge bg-success ms-2">Complete</span></h4>
						</div>
						<a  class="close" data-bs-dismiss="modal" aria-label="Close">
							<span class="align-center" aria-hidden="true"><i class="feather-x"></i></span>
						</a>
					</div>
					<div class="modal-body">

						<!-- Court Request -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Court Information</h4>
									</div>
									<div class="appointment-info">
										<ul class="appointmentset">
											<li>
												<div class="appointment-item">
													<div class="appointment-img">
														<img src="assets/img/featured/featured-06.jpg" alt="Venue">
													</div>
													<div class="appointment-content">
														<h6>Angela Roudrigez</h6>
														<div class="table-rating">
															<div class="rating-point">
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<i class="fas fa-star filled"></i>
																<span>30 Reviews</span>
														   </div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<h6>Location</h6>
												<p>Santa Monica, CA</p>
											</li>
											<li>
												<h6>Price Per Hour</h6>
												<p>$200.00 / hr</p>
											</li>
											<li>
												<h6>Rank</h6>
												<p>Expert</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Appointment Information</h4>
									</div>
									<div class="appointment-info appoin-border">
										<ul class="appointmentset">
											<li>
												<h6>Booked On</h6>
												<p>Mon, Jul 14</p>
											</li>
											<li>
												<h6>Booking Type</h6>
												<p>Onetime</p>
											</li>
											<li>
												<h6>Date & Time</h6>
												<p>Mon, Jul 14
												<span>05:00 PM - 08:00 PM</span></p>

											</li>
											<li>
												<h6>Total Number of Hours</h6>
												<p>2</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Booking Days</h4>
									</div>
									<div class="booking-days">
										<ul>
											<li class="active">
												<img src="assets/img/icons/reset.svg" class="me-2" alt="Icon">
												<i class="feather-check-circle me-2"></i>
												14  May 2023 - 7:00 PM
												<i class="fa fa-check-circle ms-2"></i>
											</li>
											<li class="active">
												<img src="assets/img/icons/reset.svg" class="me-2" alt="Icon">
												<i class="feather-check-circle me-2"></i>
												15  May 2023 - 7:00 PM
												<i class="fa fa-check-circle ms-2"></i>
											</li>
										</ul>
									</div>
								</div>
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Payment Details</h4>
									</div>
									<div class="appointment-info appoin-border double-row">
										<ul class="appointmentset">
											<li>
												<h6>Coaching Booking Amount</h6>
												<p>$200</p>
											</li>
											<li>
												<h6>Number of Hours</h6>
												<p>2</p>
											</li>
											<li>
												<h6>Service Charge</h6>
												<p>$20</p>
											</li>
										</ul>
									</div>
									<div class="appointment-info appoin-border ">
										<ul class="appointmentset">
											<li>
												<h6>Total Amount Paid</h6>
												<p class="color-green">$180</p>
											</li>
											<li>
												<h6>Paid On</h6>
												<p>Mon, Jul 14</p>
											</li>
											<li>
												<h6>Transaction ID</h6>
												<p>#5464164445676781641</p>
											</li>
											<li>
												<h6>Payment type</h6>
												<p>Wallet</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="card dashboard-card court-information">
									<div class="card-header">
										<h4>Review Details</h4>
									</div>
									<div class="user-review-details">
										<div class="user-review-img">
											<img src="assets/img/profiles/avatar-01.jpg" alt="User">	
										</div>
										<div class="user-review-content">
											<div class="table-rating">
												<div class="rating-point">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<span>5.0</span>
											   </div>
											</div>
											<span><i class="fa fa-check me-2" aria-hidden="true"></i>Yes, I would book again.</span>
											<h6>Absolutely perfect</h6>
											<p>If you are looking for a perfect place for friendly matches with your friends or a competitive match, It is the best place.</p>
											<h5>Sent on 11/03/2023</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Court Request -->

					</div>
					<div class="modal-footer">
						<div class="table-accept-btn">
							<a href="javascript:;" data-bs-dismiss="modal" class="btn cancel-table-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /complete Modal -->

		<!-- profile Modal -->
		<div class="modal custom-modal fade request-modal" id="profile-coach" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<div class="form-header modal-header-title">
							<h4 class="mb-0">Coach Profile</h4>
						</div>
						<a  class="close" data-bs-dismiss="modal" aria-label="Close">
							<span class="align-center" aria-hidden="true"><i class="feather-x"></i></span>
						</a>
					</div>
					<div class="modal-body">

						<!-- Court Request -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card dashboard-card court-information">
									<div class="profile-set">
										<div class="profile-set-image">
											<img src="assets/img/featured/featured-05.jpg" alt="Venue">
										</div>
										<div class="profile-set-content">
											<h3>Kevin Anderson</h3>
											<div class="rating-city">
												<div class="profile-set-rating">
													<span>4.5</span>
													<h6>300 Reviews</h6>
												</div>
												<div class="profile-set-img">
													<img src="assets/img/flag/usa.png" alt="User">
													<h6>Santamanica, United states</h6>
												</div>
											</div>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.industry's</p>
											<ul>
												<li>
													<img src="assets/img/icons/rank.svg" alt="Icon">
													<h6>Rank : Expert</h6>
												</li>
												<li>
													<img src="assets/img/icons/process.svg" alt="Icon">
													<h6>Sessions Completed : 25</h6>
												</li>
												<li>
													<img src="assets/img/icons/calendar-alt.svg" alt="Icon">
													<h6>With Dreamsport since<span> Apr 5, 2023</span></h6>
												</li>
											</ul>
										</div>
										<div class="price-set-price">
											<h6>Start’s From</h6>
											<h5>$250<span>/hr</span></h5>
										</div>
									</div>
								</div>
								<div class="profile-tab">
									<ul class="nav nav-tabs"  role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
												role="tab"  aria-selected="true">Profile Info</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="appointment-tab" data-bs-toggle="tab" data-bs-target="#appointment" type="button"
												role="tab"  aria-selected="false">Appointment Details</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
												role="tab" aria-selected="false">Reviews</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="previous-tab" data-bs-toggle="tab" data-bs-target="#previous" type="button"
												role="tab"  aria-selected="false">Previous Booking</button>
										</li>
									</ul>
									<div class="tab-content" >
										<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<div class="profile-card mb-0">
												<div class="profile-card-title">
													<h4>Contact  Information</h4>
												</div>
												<div class="profile-contact-details">
													<ul>
														<li>
															<span>Email Address</span>
															<h6><a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b3834352f3a382f1b3e233a362b373e75383436">[email&#160;protected]</a></h6>
														</li>
														<li>
															<span>Phone Number</span>
															<h6>+1 56565 556558</h6>
														</li>
														<li>
															<span> Address</span>
															<h6>1653 Davisson Street,Indianapolis, IN 46225</h6>
														</li>
													</ul>
												</div>
												<div class="profile-card-title">
													<h4>Short Bio</h4>
												</div>
												<div class="profile-card-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius consectetur a at est diam ultricies. Egestas eros leo dapibus tellus neque turpis. Nec in morbi adipiscing pretium accumsan urna ac,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius consectetur a at est diam ultricies. Egestas eros leo dapibus tellus neque turpis. Nec in morbi adipiscing pretium accumsan urna ac,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius consectetur a at est diam ultricies. Egestas eros leo dapibus tellus neque turpis. Nec in morbi adipiscing pretium accumsan urna ac,</p>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="appointment" role="tabpanel" aria-labelledby="appointment-tab">
											<!-- Accordian Contents -->
											<div class="accordion" >
												<div class="accordion-item mb-4" >
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button">
															<span class="icon-bg"><img src="assets/img/icons/short-bio.svg" alt="Icon"></span> Short Bio
														</button>
													</h4>
													<div id="panelsStayOpen-collapseOne" class="accordion-collapse">
														<div class="accordion-body">
															<div class="text show-more-height">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

																<ul>
																	<li>4 years of high school (3 years varsity)</li>
																	<li>3 years of college club badminton at Loyola Marymount</li>
																	<li>I grew up at North Venice Little League and represented</li><li>Southern California in 2017 for Senior State Champs.</li>
																	<li>3 years on Varsity   at Venice High School. Venice Varsity</li>
																	<li>badminton Western League Champs 2017.</li>
																	<li>2 years of Loyola Marymount University Club badminton.</li>
																</ul>

																<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

																<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
															</div>
															<div class="show-more d align-items-center primary-text"><i class="feather-plus-circle"></i>Show More</div>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4" >
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button" >
															<span class="icon-bg"><img src="assets/img/icons/lesson-with-me.svg" alt="Icon"></span> Lesson With me
														</button>
													</h4>
													<div  class="accordion-collapse">
														<div class="accordion-body">
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
															<ul>
																<li><i class="feather-check-square"></i>Single Lesson</li>
																<li><i class="feather-check-square"></i>2 Player Lesson</li>
																<li><i class="feather-check-square"></i>Small group Lesson</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4" >
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button" >
															<span class="icon-bg"><img src="assets/img/icons/coaching.svg" alt="Icon"></span> Coaching
														</button>
													</h4>
													<div class="accordion-collapse">
														<div class="accordion-body">
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4">
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button" >
															<span class="icon-bg"><img src="assets/img/icons/gallery.svg" alt="Icon"></span> Gallery
														</button>
													</h4>
													<div  class="accordion-collapse">
														<div class="accordion-body">
															<div class="owl-carousel gallery-slider owl-theme">
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-15.jpg">
																</div>
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-16.jpg">
																</div>
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-17.jpg">
																</div>
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-16.jpg">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h4 class="accordion-header">
														<button class="accordion-button" type="button" >
															<span class="icon-bg"><img src="assets/img/icons/location.svg" alt="Icon"></span> Location
														</button>
													</h4>
													<div id="panelsStayOpen-collapseSeven" class="accordion-collapse">
														<div class="accordion-body">
															<div class="google-maps">
																<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.8862835683544!2d-73.98256668525309!3d41.93829486962529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd0ee3286615b7%3A0x42bfa96cc2ce4381!2s132%20Kingston%20St%2C%20Kingston%2C%20NY%2012401%2C%20USA!5e0!3m2!1sen!2sin!4v1670922579281!5m2!1sen!2sin" height="170" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
															</div>
															<div class="dull-bg d-flex justify-content-start align-items-center mb-3">
																<div class="white-bg me-2">
																	<i class="fas fa-location-arrow"></i>
																</div>
																<div class="">
																	<h6>Our Venue Location</h6>
																	<p>70 Bright St New York, USA</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Accordian Contents -->
										</div>
										<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
											<div class="review-box review-box-user d-flex">
												<div class="review-profile">
													<img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt="User">
												</div>
												<div class="review-info">
													<h6 class="mb-2 tittle">Amanda Booked on 06/04/2023</h6>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<span class="">5.0</span>
												   </div>
													<span class="success-text"><i class="feather-check"></i>Yes, I would book again.</span>
													<h6>Absolutely perfect</h6>
													<p>If you are looking for a perfect place for friendly matches with your friends or a competitive match, It is the best place.</p>
													<ul class="review-gallery">
														<li>
															<a href="assets/img/gallery/gallery-01.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-01.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-02.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-02.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-03.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-03.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-04.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-04.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-05.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-05.jpg">
															  </a>
														</li>
													</ul>
													<span class="post-date">Sent on 11/03/2023</span>
												</div>
											</div>
											<div class="review-box review-box-user d-flex">
												<div class="review-profile">
													<img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt="User">
												</div>
												<div class="review-info">
													<h6 class="mb-2 tittle">Amanda Booked on 06/04/2023</h6>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<span class="">5.0</span>
												   </div>
													<h6>Awesome. Its very convenient to play.</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic!!</p>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="previous" role="tabpanel" aria-labelledby="previous-tab">
											<div class="preview-tab">
												<ul>
													<li>
														<div class="preview-tabcontent">
															<div class="preview-tabimg">
																<img src="assets/img/services/service-01.jpg" alt="Service">
															</div>
															<div class="preview-tabname">
																<h4>Leap Sports Academy</h4>
																<h5>Court 1</h5>
																<ul>
																	<li><span>Guests : 4</span></li>
																	<li><span>2 Hrs</span></li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<h6>Date & Time</h6>
														<span class="d-block">Mon, Jul 11</span>
														<span>06:00 PM - 08:00 PM</span>
													</li>
													<li>
														<h6>$400</h6>
													</li>
												</ul>
											</div>
											<div class="preview-tab">
												<ul>
													<li>
														<div class="preview-tabcontent">
															<div class="preview-tabimg">
																<img src="assets/img/services/service-02.jpg" alt="Service">
															</div>
															<div class="preview-tabname">
																<h4>Marsh Academy</h4>
																<h5>Court 1</h5>
																<ul>
																	<li><span>Guests : 4</span></li>
																	<li><span>2 Hrs</span></li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<h6>Date & Time</h6>
														<span class="d-block">Mon, Jul 11</span>
														<span>06:00 PM - 08:00 PM</span>
													</li>
													<li>
														<h6>$300</h6>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Court Request -->
					</div>
				</div>
			</div>
		</div>
		<!-- /upcoming Modal -->

		<!-- profile Modal -->
		<div class="modal custom-modal fade request-modal" id="profile-court" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<div class="form-header modal-header-title">
							<h4 class="mb-0">Coach Profile</h4>
						</div>
						<a  class="close" data-bs-dismiss="modal" aria-label="Close">
							<span class="align-center" aria-hidden="true"><i class="feather-x"></i></span>
						</a>
					</div>
					<div class="modal-body">

						<!-- Court Request -->
						<div class="row">
							<div class="col-lg-12">
								<div class="master-academy dull-whitesmoke-bg card master-academyview">
									<div class="row d-flex align-items-center justify-content-center">
										<div class="col-12 col-sm-12 col-md-12 col-lg-8">
											<div class="d-sm-flex justify-content-start align-items-center">
												<a href="javascript:void(0);"><img class="corner-radius-10" src="assets/img/master-academy.png" alt="Academy"></a>
												<div class="info">
													<h3 class="mb-2">Manchester Academy</h3>
													<div class="profile-set-content w-100 p-0">
														<ul class="bg-transparent p-0">
															<li>
																<img src="assets/img/icons/location.svg" alt="Icon">
																<h6> 70 Bright St New York, USA</h6>
															</li>
															<li>
																<img src="assets/img/icons/call.svg" alt="Icon">
																<h6>+3 80992 31212</h6>
															</li>
															<li>
																<img src="assets/img/icons/mail.svg" alt="Icon">
																<h6> <a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e39a8c96918e828a8fa3869b828e938f86cd808c8e">[email&#160;protected]</a></h6>
															</li>
														</ul>
													</div>
													<div class="coach-profile-set">
														<ul class="bg-transparent p-0">
															<li>
																<div class="coach-profile-set-img">
																	<img src="assets/img/icons/indoor.svg" alt="Icon">
																</div>
																<div class="coach-profile-set-contemt">
																	<h5>Venue </h5>
																	<span> Indoor</span>
																</div>
															</li>
															<li>
																<div class="coach-profile-set-img ">
																	<img src="assets/img/profiles/avatar-01.jpg" alt="Icon">
																</div>
																<div class="coach-profile-set-contemt">
																	<h5>Venue </h5>
																	<span> Indoor</span>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-12 col-md-12 col-lg-4">
											<ul class="d-sm-flex align-items-center justify-content-evenly">
												<li>
													<h3 class="d-inline-block">$150</h3><span>/hr</span>
													<p>up to 1 guests</p>
												</li>
												<li>
													<span><i class="feather-plus"></i></span>
												</li>
												<li class="text-center">
													<h3 class="d-inline-block">$5</h3><span>/hr</span>
													<p>each additional guest <br>up to 4 guests max</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="profile-tab">
									<ul class="nav nav-tabs"  role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="profile-tab1" data-bs-toggle="tab" data-bs-target="#profile1" type="button"
												role="tab"  aria-selected="true">Profile Info</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="appointment-tab1" data-bs-toggle="tab" data-bs-target="#appointment1" type="button"
												role="tab"  aria-selected="false">Appointment Details</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="reviews-tab1" data-bs-toggle="tab" data-bs-target="#reviews1" type="button"
												role="tab"  aria-selected="false">Reviews</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="previous-tab1" data-bs-toggle="tab" data-bs-target="#previous1" type="button"
												role="tab"  aria-selected="false">Previous Booking</button>
										</li>
									</ul>
									<div class="tab-content" >
										<div class="tab-pane fade show active" id="profile1" role="tabpanel" aria-labelledby="profile-tab1">
											<div class="profile-card mb-0">
												<div class="profile-card-title">
													<h4>Contact  Information</h4>
												</div>
												<div class="profile-contact-details mb-0">
													<ul>
														<li>
															<span>Email Address</span>
															<h6><a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="60030f0e14010314200518010d100c054e030f0d">[email&#160;protected]</a></h6>
														</li>
														<li>
															<span>Phone Number</span>
															<h6>+1 56565 556558</h6>
														</li>
														<li>
															<span> Address</span>
															<h6>1653 Davisson Street,Indianapolis, IN 46225</h6>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="appointment1" role="tabpanel" aria-labelledby="appointment-tab1">
											<!-- Accordian Contents -->
											<div class="accordion">
												<div class="accordion-item mb-4">
													<h4 class="accordion-header">
														<button class="accordion-button" type="button">
															<span class="icon-bg"><img src="assets/img/icons/Black.svg" alt="Icon"></span>Overview						
														</button>
													</h4>
													<div class="accordion-collapse">
														<div class="accordion-body">
															<div class="text">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
																<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4">
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button" >
															<span class="icon-bg"><img src="assets/img/icons/lesson-with-me.svg" alt="Icon"></span> Rules
														</button>
													</h4>
													<div  class="accordion-collapse">
														<div class="accordion-body">
															<p><i class="feather-alert-octagon text-danger me-2"></i>Non Marking Shoes are recommended not mandatory for Badminton.</p>
																<p><i class="feather-alert-octagon text-danger me-2"></i>A maximum number of members per booking per badminton court is admissible fixed by Venue Vendors</p>
																<p><i class="feather-alert-octagon text-danger me-2"></i>No pets, no seeds, no gum, no glass, no hitting or swinging outside of the cage</p>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4">
													<h4 class="accordion-header">
														<button class="accordion-button" type="button">
															<span class="icon-bg"><img src="assets/img/icons/lesson-with-me.svg" alt="Icon"></span> Amenities
														</button>
													</h4>
													<div class="accordion-collapse">
														<div class="accordion-body">
															<ul class="amenities-set">
																<li>
																	<span><i class="fa fa-check-circle text-success me-2" aria-hidden="true"></i>Parking</span>
																</li>
																<li>
																	<span><i class="fa fa-check-circle text-success me-2" aria-hidden="true"></i>Drinking Water</span>
																</li>
																<li>
																	<span><i class="fa fa-check-circle text-success me-2" aria-hidden="true"></i>First Aid</span>
																</li>
																<li>
																	<span><i class="fa fa-check-circle text-success me-2" aria-hidden="true"></i>Change Room</span>
																</li>
																<li>
																	<span><i class="fa fa-check-circle text-success me-2" aria-hidden="true"></i>Shower</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4">
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button" >
															<span class="icon-bg"><img src="assets/img/icons/includes1.svg" alt="Icon"></span> Includes
														</button>
													</h4>
													<div  class="accordion-collapse">
														<div class="accordion-body includes-set">
															<ul>
																<li><i class="feather-check-square"></i>Badminton Racket Unlimited</li>
																<li><i class="feather-check-square"></i>Bats</li>
																<li><i class="feather-check-square"></i>Hitting Machines</li>
																<li><i class="feather-check-square"></i>Multiple Courts</li>
															</ul>
															<ul>
																<li><i class="feather-check-square"></i>Spare Players</li>
																<li><i class="feather-check-square"></i>Instant Racket</li>
																<li><i class="feather-check-square"></i>Hitting Machines</li>
																<li><i class="feather-check-square"></i>Green Turfs</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="accordion-item mb-4" >
													<h4 class="accordion-header" >
														<button class="accordion-button" type="button">
															<span class="icon-bg"><img src="assets/img/icons/gallery.svg" alt="Icon"></span> Gallery
														</button>
													</h4>
													<div  class="accordion-collapse">
														<div class="accordion-body">
															<div class="owl-carousel gallery-slider owl-theme">
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-18.jpg">
																</div>
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-19.jpg">
																</div>
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-20.jpg">
																</div>
																<div>
																	<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery4/gallery-19.jpg">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Accordian Contents -->
										</div>
										<div class="tab-pane fade" id="reviews1" role="tabpanel" aria-labelledby="reviews-tab1">
											<div class="review-box review-box-user d-flex">
												<div class="review-profile">
													<img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt="User">
												</div>
												<div class="review-info">
													<h6 class="mb-2 tittle">Amanda Booked on 06/04/2023</h6>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<span class="">5.0</span>
												   </div>
													<span class="success-text"><i class="feather-check"></i>Yes, I would book again.</span>
													<h6>Absolutely perfect</h6>
													<p>If you are looking for a perfect place for friendly matches with your friends or a competitive match, It is the best place.</p>
													<ul class="review-gallery">
														<li>
															<a href="assets/img/gallery/gallery-01.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-01.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-02.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-02.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-03.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-03.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-04.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-04.jpg">
															  </a>
														</li>
														<li>
															<a href="assets/img/gallery/gallery-05.jpg" data-fancybox="gallery">
																<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-05.jpg">
															  </a>
														</li>
													</ul>
													<span class="post-date">Sent on 11/03/2023</span>
												</div>
											</div>
											<div class="review-box review-box-user d-flex">
												<div class="review-profile">
													<img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt="User">
												</div>
												<div class="review-info">
													<h6 class="mb-2 tittle">Amanda Booked on 06/04/2023</h6>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<span class="">5.0</span>
												   </div>
													<h6>Awesome. Its very convenient to play.</h6>
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic!!</p>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="previous1" role="tabpanel" aria-labelledby="previous-tab1">
											<div class="preview-tab">
												<ul>
													<li>
														<div class="preview-tabcontent">
															<div class="preview-tabimg">
																<img src="assets/img/featured/featured-05.jpg" alt="Venue">
															</div>
															<div class="preview-tabname">
																<h4>Kevin Anderson</h4>
																<h5>Onetime</h5>
															</div>
														</div>
													</li>
													<li>
														<h6>Date & Time</h6>
														<span class="d-block">Mon, Jul 11</span>
														<span>06:00 PM - 08:00 PM</span>
													</li>
													<li>
														<h6>$400</h6>
													</li>
												</ul>
											</div>
											<div class="preview-tab">
												<ul>
													<li>
														<div class="preview-tabcontent">
															<div class="preview-tabimg">
																<img src="assets/img/featured/featured-06.jpg" alt="Venue">
															</div>
															<div class="preview-tabname">
																<h4>Evon Raddick</h4>
																<h5>Onetime</h5>
															</div>
														</div>
													</li>
													<li>
														<h6>Date & Time</h6>
														<span class="d-block">Mon, Jul 11</span>
														<span>06:00 PM - 08:00 PM</span>
													</li>
													<li>
														<h6>$300</h6>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Court Request -->
					</div>
				</div>
			</div>
		</div>
		<!-- /profile Modal -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

	<!-- Owl Carousel JS -->
	<script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

	<!-- Fancybox JS -->
	<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

	<!-- Select JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="61f309e901d890560bfbfc57-text/javascript"></script>

<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="61f309e901d890560bfbfc57-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92a5d6f2ea178142","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-complete.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:34:49 GMT -->
</html>