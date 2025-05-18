<?php
include_once("assets/model/mUser.php");
$p = new mUser();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:33:05 GMT -->
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

</head>
<body>
<?php
        $layid = $_REQUEST['id'];
		$layten = $p->laycot("SELECT tenKH FROM khachhang WHERE idnguoidung ='$layid' LIMIT 1");
        $laymakh=$p->laycot("select maKH from khachhang where idnguoidung = '$layid' limit 1");
        $layemail=$p->laycot("select email from khachhang where idnguoidung = '$layid' limit 1");
        // $layusername=$p->laycot("select username from khachhang where maKH = '$layid' limit 1");
        $layusername = $p->laycot("SELECT username FROM taikhoannguoidung 
                           WHERE idnguoidung = '$layid' LIMIT 1");
        $laysdt=$p->laycot("select sodienthoai from khachhang where idnguoidung = '$layid' limit 1");
        $laypassword=$p->laycot("select passwords from taikhoannguoidung where idnguoidung = '$layid' limit 1");
        $laydiachi=$p->laycot("select diachi from khachhang where idnguoidung = '$layid' limit 1");
		$layhinhanh=$p->laycot("select hinhanh from khachhang where idnguoidung = '$layid' limit 1");
    ?>
	<!-- <div id="global-loader" >
		<div class="loader-img">
			<img src="assets/img/loader.png" class="img-fluid" alt="Global">
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
									if(isset($_REQUEST['id']))
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
		<section class="breadcrumb breadcrumb-list mb-0">
			<span class="primary-right-round"></span>
			<div class="container">
				<h1 class="text-white">User Profile</h1>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li >User Profile</li>
				</ul>
			</div>
		</section>
		<!-- /Breadcrumb -->

		<!-- Dashboard Menu -->
		<div class="dashboard-section">
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
									<a href="user-bookings.html" >
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
									<a href="user-invoice.html" >
										<img src="assets/img/icons/invoice-icon.svg" alt="Icon">
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="user-wallet.html" >
										<img src="assets/img/icons/wallet-icon.svg" alt="Icon">
										<span>Wallet</span>
									</a>
								</li>
								<li>
									<a href="user-profile.php" class="active">
										<img src="assets/img/icons/profile-icon.svg" alt="Icon">
										<span>Profile Setting</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Dashboard Menu -->

		<!-- Page Content -->
		<div class="content court-bg">
			<div class="container">

				<div class="coach-court-list profile-court-list">
					<ul class="nav">
						<li><a class="active" href="user-profile.php">Profile</a></li>
						<!-- <li><a href="user-setting-password.html">Change Password</a></li> -->
						<!-- <li><a href="user-profile-othersetting.html">Other Settings</a></li> -->
					</ul>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="profile-detail-group">
							<div class="card ">
							<form method="post">
								<!-- Hidden input để gửi id người dùng -->
								<input type="hidden" name="idnguoidung" value="<?php echo $layid; ?>">

								<div class="row">
									<!-- Username (chỉ đọc) -->
									<div class="col-lg-4 col-md-6">
										<div class="input-space">
											<label class="form-label">Username:</label>
											<input type="text" class="form-control" value="<?php echo $layusername; ?>" name="username" style="color: #999;" readonly>
										</div>
									</div>

									<!-- Họ Tên -->
									<div class="col-lg-4 col-md-6">
										<div class="input-space">
											<label class="form-label">Họ Tên:</label>
											<input type="text" class="form-control" value="<?php echo $layten; ?>" name="tenKH" style="color: #999;">
										</div>
									</div>

									<!-- Email -->
									<div class="col-lg-4 col-md-6">
										<div class="input-space">
											<label class="form-label">Email:</label>
											<input type="email" class="form-control" value="<?php echo $layemail; ?>" name="email" style="color: #999;">
										</div>
									</div>

									<!-- Số điện thoại -->
									<div class="col-lg-4 col-md-6">
										<div class="input-space">
											<label class="form-label">Số Điện Thoại:</label>
											<input type="text" class="form-control" value="<?php echo $laysdt; ?>" name="sodienthoai" style="color: #999;">
										</div>
									</div>

									<!-- Địa chỉ -->
									<div class="col-lg-12 col-md-12">
										<div class="input-space">
											<label class="form-label">Địa chỉ:</label>
											<input type="text" class="form-control" value="<?php echo $laydiachi; ?>" name="diachi" style="color: #999;">
										</div>
									</div>

									<!-- Password -->
									<div class="col-lg-4 col-md-6">
										<div class="form-group">
											<div class="pass-group group-img">
												<label class="form-label">Password:</label>
												<i class="toggle-password feather-eye-off"></i>
												<input type="password" class="form-control pass-input" name="passwords" value="<?php echo $laypassword; ?>" style="color: #999;">
											</div>
										</div>
									</div>
								</div>

								<div class="save-changes text-end">
									<button type="reset" class="btn btn-primary save-profile">Hủy</button>
									<button type="submit" name="btnsua" class="btn btn-primary" value="Cập Nhật">Cập nhật</button>
								</div>
							</form>
							</div>
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
				<!-- <div class="footer-join">
					<h2>We Welcome Your Passion And Expertise</h2>
					<p class="sub-title">Join our empowering sports community today and grow with us.</p>
					<a href="register.html" class="btn btn-primary"><i class="feather-user-plus"></i> Join With Us</a>
				</div> -->
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
										<p><a href="https://dreamsports.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f4908691959987849b868087b4918c9599849891da979b99">[email&#160;protected]</a></p>
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

	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="1481d7a87492a0bc11aba1ae-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="1481d7a87492a0bc11aba1ae-text/javascript"></script>

	<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="1481d7a87492a0bc11aba1ae-text/javascript"></script>
	<script src="assets/plugins/datatables/datatables.min.js" type="1481d7a87492a0bc11aba1ae-text/javascript"></script>

	<!-- Select JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="1481d7a87492a0bc11aba1ae-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="1481d7a87492a0bc11aba1ae-text/javascript"></script>

<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1481d7a87492a0bc11aba1ae-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92a5cd6dcf1b1065","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

<?php
error_reporting(1);        

if (isset($_REQUEST['btnsua'])) {

    $idnguoidung = isset($_REQUEST['idnguoidung']) ? $_REQUEST['idnguoidung'] : '';
    $tenKH = isset($_REQUEST['tenKH']) ? $_REQUEST['tenKH'] : '';
    $username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
    $password = isset($_REQUEST['passwords']) ? $_REQUEST['passwords'] : '';
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
    $diachi = isset($_REQUEST['diachi']) ? $_REQUEST['diachi'] : '';
    $sdt = isset($_REQUEST['sodienthoai']) ? $_REQUEST['sodienthoai'] : '';

    if($idnguoidung != '' && $tenKH != '' && $username != '' && $password != '' && $email != '' && $sdt != '' && $diachi != '') {
        
        $sql = "
            UPDATE khachhang k
            JOIN taikhoannguoidung t ON k.idnguoidung = t.idnguoidung
            SET 
                k.tenKH = '$tenKH',
                k.email = '$email',
                k.soDienThoai = '$sdt',
                k.diachi = '$diachi',
                t.passwords = '$password'
            WHERE k.idnguoidung = '$idnguoidung'
        ";

        if ($p->themxoasua($sql) == 1) {
            echo '<script>alert("Cập nhật thành công");</script>';
        } else {
            echo '<script>alert("Không có thay đổi hoặc cập nhật thất bại!");</script>';
        }

        echo '<script>window.location="user-profile.php?id='.$idnguoidung.'";</script>';
    } else {
        echo '<script>alert("Vui lòng điền đầy đủ thông tin!");</script>';
    }
}
?>





</body>
<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:33:05 GMT -->
</html>