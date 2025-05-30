<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:33:41 GMT -->
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

	<!-- JS -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>
	<script src="assets/js/login.js"></script>
</head>

<body>
	<div id="global-loader" >
		<div class="loader-img">
			<img src="assets/img/loader.png" class="img-fluid" alt="Global">
		</div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper authendication-pages">

		<!-- Page Content -->
		<div class="content">
			<div class="container wrapper no-padding">
				<div class="row no-margin vph-100">
					<div class="col-12 col-sm-12 col-lg-6 no-padding">
						<div class="banner-bg login">
							<div class="row no-margin h-100">
								<div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
									<div class="h-100 d-flex justify-content-center align-items-center">
										<div class="text-bg register text-center">
											<button type="button" class="btn btn-limegreen text-capitalize"><i class="fa-solid fa-thumbs-up me-3"></i>Đăng nhập Khách hàng & Doanh nghiệp</button>
											<p>Đăng nhập ngay để bắt đầu !</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12  col-lg-6 no-padding">
						<div class="dull-pg">
							<div class="row no-margin vph-100 d-flex align-items-center justify-content-center">
								<div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
									<header class="text-center">
										<a href="user-dashboard.html">
											<img src="assets/img/logo-black.svg" class="img-fluid" alt="Logo">
										</a>
									</header>
									<div class="shadow-card">
										<h2>Xin Chào!</h2>
										<p>Đăng Nhập Vào Tài Khoản Của Bạn</p>
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
												<!-- Login Form -->
												<form action="login.php" method="POST">
												    <div class="form-group">
													    <div class="group-img">
															<i class="feather-user"></i>
															<input type="text" class="form-control" placeholder="Username" name="txtUsername" id="txtUsername">
															<div ><span id="errUsername" class="err text-danger">*<b style="font-size: 20px; color: red;"></b></span></div>
														</div>
														
													</div>
													<div class="form-group">
														<div class="pass-group group-img">
															<i class="toggle-password feather-eye-off"></i>
															<input type="password" class="form-control pass-input" placeholder="Password" name="txtPassword" id="txtPassword">
															<div ><span id="errPW" class="err text-danger">*<b style="font-size: 20px; color: red;"></b></span></div>
														</div>
													</div>
													<div class="form-group d-sm-flex align-items-center justify-content-between">
														<div class="form-check form-switch d-flex align-items-center justify-content-start">
														  	<!-- <input class="form-check-input" type="checkbox" id="user-pass"> -->
														  	<!-- <label class="form-check-label" for="user-pass">Nhớ mặt khẩu</label> -->
														</div>																	
														<!-- <span><a href="forgot-password.html" class="forgot-pass">Quên mật khẩu?</a></span> -->
													</div>
													<!-- <button class="btn btn-secondary register-btn d-inline-flex justify-content-center align-items-center w-100 btn-block" type="submit" name="btn-dangnhap" id="btn-dangnhap">Đăng nhập<i class="feather-arrow-right-circle ms-2"></i></button> -->
													<input class="btn btn-secondary register-btn d-inline-flex justify-content-center align-items-center w-100 btn-block" type="submit" name="btn-dangnhap" id="btn-dangnhap" value="Đăng nhập"></input>
												</form>
												<!-- /Login Form -->
											</div>
								
										</div>
									</div>
									<div class="bottom-text text-center">
										<p>Chưa có tài khoản? <a href="register.php">Đăng ký!</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Content -->
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js" type="0b422a26f69e86514a9193bc-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="0b422a26f69e86514a9193bc-text/javascript"></script>

	<!-- Select JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="0b422a26f69e86514a9193bc-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="0b422a26f69e86514a9193bc-text/javascript"></script>

<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0b422a26f69e86514a9193bc-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92a5cd7ff9401065","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:33:41 GMT -->
</html>
<?php
session_start();
include("assets/controller/cLogin.php");

$p = new mylogin();

if (isset($_POST['btn-dangnhap']) && $_POST['btn-dangnhap'] == 'Đăng nhập') {
    $user = trim($_POST['txtUsername']);
    $pass = trim($_POST['txtPassword']);

    // $pass = md5($pass);

    if (!empty($user) && !empty($pass)) {
        $tblTKND = $p->getTKND($user, $pass);

        if ($tblTKND === false) {
            echo '<script>alert("Lỗi kết nối CSDL!")</script>';
        } elseif ($tblTKND == -1) {
            echo '<script>alert("Sai tài khoản hoặc mật khẩu!")</script>';
        } else {
            $row = $tblTKND->fetch_assoc();

            $_SESSION['idnguoidung'] = $row['idnguoidung'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['passwords'] = $row['passwords'];
            $_SESSION['loainguoidung'] = $row['loainguoidung'];
            $_SESSION['maDN'] = $row['maDN'];

            $id = $row['idnguoidung'];
			var_dump($row['loainguoidung']);
            $role = isset($row['loainguoidung']) ? intval($row['loainguoidung']) : 0;
			
            switch ($role) {
                case 1:
				echo '<script>alert("Chào mừng khách hàng!")</script>';
				echo '<script>window.location="index.php?id=' . $id . '";</script>';
				break;
			case 2:
				echo '<script>alert("Chào mừng doanh nghiệp!")</script>';
				echo '<script>window.location="business-dashboard.php?id=' . $id . '";</script>';
				break;
			case 3:
				echo '<script>alert("Chào mừng admin!")</script>';
				echo '<script>window.location="admin-dashboard.php?id=' . $id . '";</script>';
				break;
			default:
				echo '<script>alert("Phân quyền không hợp lệ! Vai trò hiện tại: ' . $role . '")</script>';
				break;
            }
        }
    } else {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin!")</script>';
    }
}
?>



