<?php
include_once("assets/model/mUser.php");
$p = new mUser();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/coach-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:34:42 GMT -->
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

	<!-- Select CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<script src="assets/js/thanhtoanqr.js"></script>
</head>

<body>
	<?php
		$layid = $_REQUEST['maKH'];
		$layngaydat = $p->laycot("SELECT ngayDat FROM bookings WHERE maKH = '$layid'");
		$laygiobd = $p->laycot("SELECT t.start_time FROM bookings b join time_slots t on b.time_slot_id = t.id WHERE maKH = '$layid' ORDER BY maDat ASC LIMIT 1");
		$laygiokt = $p->laycot("SELECT t.end_time FROM bookings b join time_slots t on b.time_slot_id = t.id WHERE maKH = '$layid' ORDER BY maDat DESC LIMIT 1");
		$laytongtg = $p->laycot("SELECT COUNT(*) FROM bookings WHERE maKH = '$layid'");
		$layten = $p->laycot("SELECT tenKH FROM khachhang WHERE maKH = '$layid' LIMIT 1");
		$laysdt = $p->laycot("SELECT soDienThoai FROM khachhang WHERE maKH = '$layid' LIMIT 1");
		$layemail = $p->laycot("SELECT email FROM khachhang WHERE maKH = '$layid' LIMIT 1");
		$_SESSION['maKH'] = $layid;

		//lay ten san
		//lay ngay dat
		//lay gio bat dau 
		//lay gio ket thuc
	?>
	<div id="global-loader" >
		<div class="loader-img">
			<img src="assets/img/loader.png" class="img-fluid" alt="Global">
		</div>
	</div>
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
						<a href="index.php" class="navbar-brand logo">
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
						
								<!-- <a href="login.php"><span><i class="feather-users"></i></span>Đăng Nhập</a> / <a href="register.php">Đăng Ký</a> -->

								<?php
									if(isset($_REQUEST['maKH']))
									{
										echo '
							
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
															<h6>'.$layten.'</h6>
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
										<li class="nav-item">
										<a class="nav-link btn btn-secondary" href="add-court.php"><span><i class="feather-check-circle"></i></span>Sân Của Bạn</a>
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
		<div class="breadcrumb mb-0">
			<span class="primary-right-round"></span>
			<div class="container">
				<h1 class="text-white">Hoàn Thành Đặt Sân</h1>
				<ul>
					<li><a href="index.html">Trang Chủ</a></li>
					<li>Thanh Toán</li>
				</ul>
			</div>
		</div>
		<!-- /Breadcrumb -->
		<!-- <section class="booking-steps py-30">
			<div class="container">
				<ul class="d-xl-flex justify-content-center align-items-center">
					<li><h5><a href="coach-details.html"><span>1</span>Type of Booking</a></h5></li>
					<li><h5><a href="coach-timedate.html"><span>2</span>Time & Date</a></h5></li>
					<li><h5><a href="coach-personalinfo.html"><span>3</span>Personal Information</a></h5></li>
					<li><h5><a href="coach-order-confirm.html"><span>4</span>Order Confirmation</a></h5></li>
					<li class="active"><h5><a href="coach-payment.html"><span>5</span>Payment</a></h5></li>
				</ul>
			</div>
		</section> -->

		<!-- Page Content -->
		<div class="content">
			<div class="container">
				<section>
					<!-- <div class="text-center mb-40">
						<h3 class="mb-1">THANH TOÁN</h3>
						<p class="sub-title">Thanh toán an toàn cho đặt phòng của bạn.</p>
					</div> -->
					<!-- <div class="master-academy dull-whitesmoke-bg card mb-40">
						<div class="d-flex justify-content-between align-items-center">
							<div class="d-sm-flex justify-content-start align-items-center">
								<a href="javascript:void(0);"><img class="corner-radius-10" src="assets/img/profiles/avatar-02.png" alt="User"></a>
								<div class="info">
									<div class="d-flex justify-content-start align-items-center mb-3">
										<span class="text-white dark-yellow-bg color-white me-2 d-flex justify-content-center align-items-center">4.5</span>
										<span>300 Reviews</span>
									</div>
									<h3 class="mb-2">Kevin Anderson</h3>
									<p>Certified Badminton Coach with a deep understanding of the sport's  strategies.</p>
								</div>
							</div>
						</div>
					</div> -->
					<div class="row checkout">
						<div class="col-12 col-sm-12 col-md-12 col-lg-7">
							<div class="card booking-details">
								<h3 class="border-bottom">Thông tin đặt sân</h3>
								<ul>
									<div style="float:left; width: 300px;">
										<li><i class="feather-calendar me-2"></i><?php echo $layngaydat; ?></li>
										<li><i class="feather-clock me-2"></i><?php echo $laygiobd.' Đến '.$laygiokt; ?> </li>
										<li><i class="feather-users me-2"></i>Tổng thời gian : <?php echo $laytongtg.' Tiếng'; ?></li>
									</div>
									
									<div style="float:left; width: 350px;">
										<li><i class="feather-user me-2"></i>Tên: <?php echo $layten; ?></li>
										<li><i class="feather-phone me-2"></i>SĐT: <?php echo $laysdt; ?></li>
										<li><i class="feather-mail me-2"></i><?php echo $layemail; ?></li>
									</div>
								</ul>
								
							</div>
							<div class="course_qr" align="center">
								<img 
									class="course_qr_img" style="width: 300px;"
									src="">
								<!-- <p>Nội dung chuyển khoản: <span id="paid_content"></span></p>
								<p>Số tiền: <span id="paid_price"></span></p>
								<p>Số tiền đã chuyển <span id="ketqua"></span></p> -->
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-5">
							<aside class="card payment-modes">
								<h3 class="border-bottom">Thanh toán</h3>
								<!-- <h6 class="mb-3">Chọn phương thức thanh toán</h6> -->
								<div class="radio">
									<!-- <div class="form-check form-check-inline mb-3">
									  	<input class="form-check-input default-check me-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Credit Card">
									  	<label class="form-check-label" for="inlineRadio1">Chuyển khoản</label>
									</div>
									<div class="form-check form-check-inline mb-3">
									  	<input class="form-check-input default-check me-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Paypal">
									  	<label class="form-check-label" for="inlineRadio2">Tiền mặt</label>
									</div> -->
									<!-- <div class="form-check form-check-inline">
									  	<input class="form-check-input default-check me-2" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Wallet">
									  	<label class="form-check-label" for="inlineRadio3">Wallet</label>
									</div> -->
								</div>
								<!-- <hr> -->
								<!-- <ul class="order-sub-total">
									<li>
										<p>Sub total</p>
										<h6>$250</h6>
									</li>
									<li>
										<p>Additional Guest</p>
										<h6>$25</h6>
									</li>
									<li>
										<p>Service charge</p>
										<h6>$70</h6>
									</li>
								</ul> -->
								<div class="mb-10">
									<div>
										<form method="POST" action=""></form>
											<table style="border: 1px solid grey; width: 100%;">
												<thead>
													<tr style="border: 1px solid grey">
														<td style="border: 1px solid grey" align="center"><b>STT</b></td>
														<td style="border: 1px solid grey" align="center"><b>Bắt đầu</b></td>
														<td style="border: 1px solid grey" align="center"><b>Kết thúc</b></td>
														<td style="border: 1px solid grey" align="center"><b>Giá</b></td>
														<!-- <td style="border: 1px solid grey" align="center"></td> -->
													</tr>
												</thead>
												<tbody>
													<?php
														include_once("assets/view/sancaulong/viewgiodat.php");
													?>
												</tbody>
											</table>
										</form>
									</div>
									
								</div>
								<div class="order-total d-flex justify-content-between align-items-center">
									<?php
										include_once("assets/view/sancaulong/viewtongtien.php");
									?>
									<input type="hidden" id="maKH" value="<?php echo $layid; ?>">
									<input type="hidden" id="tongtien" value="<?php echo $tongtien*1000; ?>">
								</div>
								<div class="form-check d-flex justify-content-start align-items-center policy">
									<div class="d-inline-block">
										<input class="form-check-input" type="checkbox" value="" id="policy">
									</div>
									<label class="form-check-label" for="policy">Bằng cách nhấp vào 'Gửi yêu cầu', tôi đồng ý với Chính sách bảo mật và Điều khoản sử dụng của Dreamsport</label>
								</div>
								<!-- <div class="d-grid btn-block">
									<button type="button" class="btn btn-primary course_item_btn">Thanh Toán</button>
								</div> -->
								<div class="d-flex justify-content-center gap-2">
									<button type="button" class="btn btn-primary btn-sm w-100 course_item_btn" style="max-width: 150px;">Chuyển Khoản</button>
									<button type="button" class="btn btn-primary btn-sm w-100 " style="max-width: 150px;">Tiền Mặt</button>
								</div>
							</aside>
						</div>
					</div>
				</section>
			</div>
			<!-- Container -->
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
										<p><a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9b8d9a9e928c8f908d8b8cbf9a879e928f939ad19c9092">[email&#160;protected]</a></p>
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
										<a href="#"><img src="assets/img/icons/icon-apple.svg" alt="Icon"></a>
									</li>
									<li>
										<a href="#"><img src="assets/img/icons/google-icon.svg" alt="Icon"></a>
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

	</div>
	<!-- /Main Wrapper -->

	<!-- Booking Confirmed Modal -->
	<!-- <div class="modal fade" id="bookingconfirmModal" tabindex="-1" aria-labelledby="bookingconfirmModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      	<div class="modal-header text-center d-inline-block">
		        	<img src="assets/img/icons/booking-confirmed.svg" alt="Icon">
		      	</div>
				<div class="modal-body text-center">
				<h3 class="mb-3">Booking has been Confirmed</h3>
				<p>Check your email on the booking confirmation</p>
				</div>
		      	<div class="modal-footer text-center d-inline-block">
		        	<a href="user-dashboard.html" class="btn btn-primary"><i class="feather-arrow-left-circle me-1"></i>Back to Dashboard</a>
		      </div>
		    </div>
		</div>
	</div> -->
	<!-- /Booking Confirmed Modal -->

	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="474a1bba3b5a691783062f77-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="474a1bba3b5a691783062f77-text/javascript"></script>

	<!-- Select JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="474a1bba3b5a691783062f77-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="474a1bba3b5a691783062f77-text/javascript"></script>

<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="474a1bba3b5a691783062f77-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92a5d37ea9de02d6","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/coach-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:34:42 GMT -->
</html>
