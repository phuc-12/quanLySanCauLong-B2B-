<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:33:39 GMT -->
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
	<script src="assets/js/register.js"></script>

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
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 no-padding">
						<div class="banner-bg register">
							<div class="row no-margin h-100">
								<div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
									<div class="h-100 d-flex justify-content-center align-items-center">
										<div class="text-bg register text-center">
											<button type="button" class="btn btn-limegreen text-capitalize"><i class="fa-solid fa-thumbs-up me-3"></i>Đăng ký ngay!</button>
											<p>Đăng ký ngay để nhận thêm nhiều ưu đãi.	</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 no-padding">
						<div class="dull-pg">
							<div class="row no-margin vph-100 d-flex align-items-center justify-content-center">	
								<div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
									<header class="text-center">
										<a href="index.html">
											<img src="assets/img/logo-black.svg" class="img-fluid" alt="Logo">
										</a>
									</header>
									<div class="shadow-card">
										<h2>Bắt đầu với Dreamsports</h2>
										<p>Khơi dậy hành trình thể thao của bạn với DreamSports và bắt đầu ngay bây giờ.
										</p>
										
											
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
												<button class="nav-link active d-flex align-items-center" id="customer-tab"
														data-bs-toggle="tab" data-bs-target="#customer" type="button" role="tab"
														aria-controls="customer" aria-selected="true"
														onclick="setLoaiNguoiDung(1)">
													<span class="d-flex justify-content-center align-items-center"></span>Khách Hàng
												</button>
												</li>
												<li class="nav-item" role="presentation">
												<button class="nav-link d-flex align-items-center" id="business-tab"
														data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab"
														aria-controls="business" aria-selected="false"
														onclick="setLoaiNguoiDung(2)">
													<span class="d-flex justify-content-center align-items-center"></span>Doanh Nghiệp
												</button>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent">
												
												<div class="tab-pane fade show active" id="customer" role="tabpanel" aria-labelledby="customer-tab">
													<!-- Register Form -->
													<form action="register.php" method="POST">
													<input type="hidden" name="loainguoidung" id="loainguoidung" value="1">
													<div class="form-group">
															<div class="group-img">
																<i class="feather-user"></i>
																<input type="text" class="form-control" placeholder="Username" name="txtUsername">
																<!-- <div ><span id="errUsername" class="err text-danger">*<b style="font-size: 20px; color: red;"></b></span></div> -->
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-user"></i>
																<input type="text" class="form-control" placeholder="Họ Tên" name="txtKH">
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-mail"></i>
																<input type="text" class="form-control" placeholder="Email" name="txtEmail">
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-phone"></i>
																<input type="text" class="form-control" placeholder="Số điện thoại" name="txtPhone">
															</div>
														</div>
														<div class="form-group">
															<div class="pass-group group-img">
																<i class="toggle-password feather-eye-off"></i>
																<input type="password" class="form-control pass-input" placeholder="Password" name="txtPassword">
																<!-- <div ><span id="errPW" class="err text-danger">*<b style="font-size: 20px; color: red;"></b></span></div> -->
															</div>
														</div>
														<div class="form-group">
															<div class="pass-group group-img">
																<i class="toggle-password-confirm feather-eye-off"></i>
																<input type="password" class="form-control pass-confirm" placeholder="Confirm Password" name="txt-rePassword">
																<!-- <div ><span id="errRePW" class="err text-danger">*<b style="font-size: 20px; color: red;"></b></span></div> -->
															</div>
														</div>
														
														<input class="btn btn-secondary register-btn d-inline-flex justify-content-center align-items-center w-100 btn-block" type="submit" name="guiDK" value="Đăng Ký"></input>
																				
													</form>
													<!-- /Register Form -->
												</div>

												<div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
													<form action="register.php" method="POST">	
														<input type="hidden" name="loainguoidung" id="loainguoidung" value="2">
														<div class="form-group">
															<div class="group-img">
																<i class="feather-user"></i>
																<input type="text" class="form-control" placeholder="Username" name="txtUsername">
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-user"></i>
																<input type="text" class="form-control" placeholder="Họ Tên" name="txtKH">
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-mail"></i>
																<input type="text" class="form-control" placeholder="Email" name="txtEmail">
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-phone"></i>
																<input type="text" class="form-control" placeholder="Số điện thoại" name="txtPhone">
															</div>
														</div>
														<div class="form-group">
															<div class="group-img">
																<i class="feather-phone"></i>
																<input type="text" class="form-control pass-input" name="txtDiaChi" placeholder="Địa chỉ">
															</div>
														</div>
														<div class="form-group">
															<div class="pass-group group-img">
																<i class="toggle-password feather-eye-off"></i>
																<input type="password" class="form-control pass-input" placeholder="Password" name="txtPassword">
															</div>
														</div>
														<div class="form-group">
															<div class="pass-group group-img">
																<i class="toggle-password-confirm feather-eye-off"></i>
																<input type="password" class="form-control pass-confirm" placeholder="Confirm Password" name="txt-rePassword">
															</div>
														</div>
														
														<input class="btn btn-secondary register-btn d-inline-flex justify-content-center align-items-center w-100 btn-block" type="submit" name="guiDK" value="Đăng Ký"></input>
													</form>
													</div> 
											</div>
										
									</div>
									<div class="bottom-text text-center">
										<p>Đã có tài khoản? <a href="login.php">Đăng nhập!</a></p>
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
	<script src="assets/js/jquery-3.7.1.min.js" type="d1c12692096f8058307b97c0-text/javascript"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js" type="d1c12692096f8058307b97c0-text/javascript"></script>

	<!-- Select JS -->
	<script src="assets/plugins/select2/js/select2.min.js" type="d1c12692096f8058307b97c0-text/javascript"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js" type="d1c12692096f8058307b97c0-text/javascript"></script>

<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="d1c12692096f8058307b97c0-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92a5cd7dbdec1a5b","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:33:41 GMT -->
</html>
<?php
    include('assets/controller/cRegister.php');
	$p = new cRegister();

	if ($_POST['guiDK'] === 'Đăng Ký') {
		$username = $_POST['txtUsername'];
		$pw = $_POST['txt-rePassword'];
		$tenKH = $_POST['txtKH'];
		$email = $_POST['txtEmail'];
		$sdt = $_POST['txtPhone'];
		$loaiND = isset($_POST['loainguoidung']) ? $_POST['loainguoidung'] : 1;
		$diaChi = isset($_POST['txtDiaChi']) ? $_POST['txtDiaChi'] : "";

		if ($username && $tenKH && $pw && $email && $sdt) {
			$p->cRegister1User($username, $tenKH, $pw, $email, $loaiND, $sdt, $diaChi);
		} else {
			echo "<script>alert('Vui lòng nhập đầy đủ thông tin!!!')</script>";
		}
	}



?>
<script>
  function setLoaiNguoiDung(value) {
    document.getElementById('loainguoidung').value = value;
  }
</script>
