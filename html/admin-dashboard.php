<?php
error_reporting(0);
include_once("assets/model/mUser.php");
$p = new mUser();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:32:23 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DreamSports</title>

    <!-- Meta Tags -->
    <meta name="twitter:description"
        content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
    <meta name="keywords"
        content="badminton, coaching, event, players, training, courts, tournament, athletes, courts rent, lessons, court booking, stores, sports faqs, leagues, chat, wallet, invoice">
    <meta name="author" content="Dreamguys - DreamSports">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@dreamguystech">
    <meta name="twitter:title" content="DreamSports -  Booking Coaches, Venue for tournaments, Court Rental template">

    <meta name="twitter:image" content="assets/img/meta-image.jpg">
    <meta name="twitter:image:alt" content="DreamSports">

    <meta property="og:url" content="https://dreamsports.dreamguystech.com/">
    <meta property="og:title" content="DreamSports -  Booking Coaches, Venue for tournaments, Court Rental template">
    <meta property="og:description"
        content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
	$layid = $_REQUEST['id'];
	$layten = $p->laycot("select tenKH from khachhang where idnguoidung = '$layid' limit 1");
	?>
    <!-- <div id="global-loader">
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
									if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
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
                <h1 class="text-white">Admin Dashboard</h1>
                <!-- <ul>
					<li><a href="index.php">Home</a></li>
					<li >User Dashboard</li>
				</ul> -->
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
                                    <a href="admin-dashboard.php?id=<?php echo $layid ?>" class="active">
                                        <img src="assets/img/icons/dashboard-icon.svg" alt="Icon">
                                        <span>TỔNG QUAN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/view/admin/requirement.php?id=<?php echo $layid ?>">
                                        <img src="assets/img/icons/booking-icon.svg" alt="Icon">
                                        <span>YÊU CẦU HOẠT ĐỘNG</span>
                                    </a>
                                </li>
                                <!-- <li>
									<a href="user-chat.html">
										<img src="assets/img/icons/chat-icon.svg" alt="Icon">
										<span>Chat</span>
									</a>
								</li> -->
                                <li>
                                    <a href="assets/view/admin/customer.php?id=<?php echo $layid ?>">
                                        <i class="fa fa-address-card-o" style="font-size: 29px;"></i>
                                        <br><span>KHÁCH HÀNG</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/view/admin/business.php?id=<?php echo $layid ?>">
                                        <img src="assets/img/icons/chat-icon.svg" alt="Icon">
                                        <span>DOANH NGHIỆP</span>
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
        <div class="row">
            <!-- navbar -->
            <div class="col-md-3">
                <div class="thongKe_KH" style="border-radius: 10px;">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <h2 style="font-size: 20px; float: left; padding-left: 30px;">THỐNG KÊ SỐ LIỆU</h2>
                        <!-- <a href="#ds_food" class="btn btn-outline-secondary" style="float:right;">Tất cả</a> -->
                    </div>
                    <div style="padding: 50px; width: 100%; height: 150px; border-bottom: 1px solid #E5E5E5;">
                        <div>
                            <i class="fa fa-address-card-o" style="font-size: 25px;"></i>
                            <h4 style="width: 190px; height: 30px; float: left;"><span>TỔNG SỐ LƯỢNG</span><br><br>
                                <span style="color:red; margin-right: 20px;">
                                    <?php
										include_once("assets/controller/cUser.php");
										$p = new CUser();
										$countKH = $p->getCountCus();
										echo $countKH;
									?>
                                </span>KHÁCH HÀNG<br>
                                <span style="color:red; margin-right: 20px;">
                                    <?php
									include_once("assets/controller/cUser.php");
									$p = new CUser();
									$countDN = $p->getCountBus();
									echo $countDN;
								?>
                                </span>DOANH NGHIỆP<br>
                            </h4>

                        </div>

                    </div>
                </div>
            </div>
            <!-- section-->
            <div class="col-md-9">
                <div id="ds_all">
				<div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
					<p style="font-size: 20px; float: left;"><b>DANH SÁCH</b></p>
				</div>

				<div style="width: 100%; clear: both; height: auto; background-color: white; padding: 20px;">
					<!-- Tabs -->
					<div style="display: flex; gap: 20px; margin-bottom: 20px;">
						<button class="nav-link active" onclick="showTab('khachhang')" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
											text-align: center; border-radius: 5px; text-decoration: none;border: 0; font-weight: 700; display: inline-block;">Khách Hàng</button>
						<button class="nav-link" onclick="showTab('doanhnghiep')" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
											text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">Doanh Nghiệp</button>
					</div>

					<!-- Bảng Khách Hàng -->
					<div id="tab-khachhang">
						<?php  
						error_reporting(0);
						include_once("assets/controller/cUser.php");
						$p = new CUser();
						$tblKH = $p->getALLKHTop5();

						if (!$tblKH) {
							echo 'Không kết nối được';
						} elseif ($tblKH == -1) {
							echo 'Chưa có dữ liệu Khách Hàng';
						} else {
						?>
						<div style="overflow-x: auto;">
							<table class="table table-striped" style="background-color: white;">
								<thead class="table-dark">
									<tr style="text-align: center;">
										<th>STT</th>
										<th>Tên Khách Hàng</th>
										<th>Điện Thoại</th>
										<th>Loại Khách Hàng</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$dem = 1;
									while ($r = $tblKH->fetch_assoc()) {
										echo '<tr style="text-align: center;">';
										echo '<td>' . $dem . '</td>';
										echo '<td>' . $r['tenKH'] . '</td>';
										echo '<td>' . $r['soDienThoai'] . '</td>';

										$rs = $p->GetLKHByIDKH($r['maKH']);
										if ($rs && $rs->num_rows > 0) {
											$row = $rs->fetch_assoc();
											echo '<td>' . $row['loaiKH'] . '</td>';
										} else {
											echo '<td>Không xác định</td>';
										}

										echo '</tr>';
										$dem++;
									}
									?>
								</tbody>
							</table>
						</div>
						<?php } ?>
					</div>

					<!-- Bảng Doanh Nghiệp -->
					<div id="tab-doanhnghiep" style="display: none;">
						<?php  
						error_reporting(0);
						include_once("assets/controller/cUser.php");
						$p = new CUser();
						$tblDN = $p->getALLDNTop5();

						if (!$tblDN) {
							echo 'Không kết nối được';
						} elseif ($tblDN == -1) {
							echo 'Chưa có dữ liệu Doanh Nghiệp';
						} else {
						?>
						<div style="overflow-x: auto;">
							<table class="table table-striped" style="background-color: white;">
								<thead class="table-dark">
									<tr style="text-align: center;">
										<th>STT</th>
										<th>Tên Doanh Nghiệp</th>
										<th>Điện Thoại</th>
										<th>Địa chỉ</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$dem = 1;
									while ($r = $tblDN->fetch_assoc()) {
										echo '<tr style="text-align: center;">';
										echo '<td>' . $dem . '</td>';
										echo '<td>' . $r['tenDN'] . '</td>';
										echo '<td>' . $r['soDienThoai'] . '</td>';
										echo '<td>' . $r['diaChi'] . '</td>';
										echo '<td>' . $r['email'] . '</td>';
										echo '</tr>';
										$dem++;
									}
									?>
								</tbody>
							</table>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Footer -->

        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <!-- Select JS -->
    <script src="assets/plugins/select2/js/select2.min.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js" type="f8cd716c2156471ab2fab488-text/javascript"></script>

    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="f8cd716c2156471ab2fab488-|49" defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"92a5cd62af4a1a5b","version":"2025.3.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:32:23 GMT -->
 
<!-- JavaScript chuyển đổi tab -->
<script>
function showTab(tabName) {
    document.getElementById('tab-khachhang').style.display = (tabName === 'khachhang') ? 'block' : 'none';
    document.getElementById('tab-doanhnghiep').style.display = (tabName === 'doanhnghiep') ? 'block' : 'none';
}
</script>
</html>