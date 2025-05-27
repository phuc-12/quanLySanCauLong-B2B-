<?php
include_once ("assets/model/ketnoi.php");
$p=new clsketnoi();
$conn = $p->moketnoi();
// Thiết lập múi giờ Việt Nam
date_default_timezone_set('Asia/Ho_Chi_Minh');

$maSan = isset($_GET['maSan']) ? $_GET['maSan'] : 1;
$today = new DateTime(); 
$dates = array();
for ($i = 0; $i < 7; $i++) {
    $date = new DateTime(); // luôn tạo mới để tránh vấn đề clone
    $date->modify("+$i day");
    $dates[] = $date->format('Y-m-d');
}


$dateRange = implode("','", $dates); 

$bookingQuery = $conn->query("     
    SELECT * FROM bookings     
    WHERE maSan = $maSan AND ngayDat IN ('$dateRange') 
"); 

$bookings = array(); 
while ($row = $bookingQuery->fetch_assoc()) {     
    $bookings[$row['ngayDat']][$row['time_slot_id']] = $row; 
} 


session_start();
error_reporting(0);
include_once("assets/model/mUser.php");
$p = new mUser();
$_SESSION['idnguoidung'] = $_REQUEST['id'];
$idnguoidung = $_SESSION['idnguoidung'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

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

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url" content="https://dreamsports.dreamguystech.com/">
    <meta property="og:title" content="DreamSports -  Booking Coaches, Venue for tournaments, Court Rental template">
    <meta property="og:description"
        content="Elevate your badminton business with Dream Sports template. Empower coaches & players, optimize court performance and unlock industry-leading success for your brand.">
    <meta property="og:image" content="		assets/img/meta-image.jpg">
    <meta property="og:image:secure_url" content="assets/img/meta-image.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Bootstrap Bundle (bao gồm Popper.js) -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

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
	<link rel="stylesheet" href="assets/css/chatbox.css">

	<!-- chatbox  -->
	 
	<script src="http://localhost:3000/socket.io/socket.io.js"></script>
	<!-- <script src="assets/js/chatbox/server.js"></script> -->
	

</head>
<style>
        table.fixed-table {
            min-width: 1000px;
            border-collapse: collapse;
        }

        table.fixed-table th,
        table.fixed-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            white-space: nowrap;
        }

        thead th {
            position: sticky;
            top: 0;
            background-color: white;
            z-index: 2;
        }

        

        thead .sticky-col {
            z-index: 4; /* để cột đầu của thead nổi hơn */
        }

		/* Cố định cột đầu tiên (Khung giờ) */
		.sticky-col {
			position: sticky;
			left: 0;
			background: white;
			z-index: 2;
			font-weight: bold;
		}

		/* Ô đã quá hạn */
		td span.het-han {
			color: gray;
			font-weight: 500;
		}

		/* Ô đã được chọn */
		td span.da-chon {
			color: red;
			font-weight: bold;
		}

		/* Button đặt giờ */
		td form button {
			background-color: white;
			border: 2px solid #007F7F;
			color: #007F7F;
			padding: 6px 10px;
			font-weight: bold;
			border-radius: 8px;
			cursor: pointer;
			transition: all 0.2s ease-in-out;
			width: 100%;
		}

		/* Hover hiệu ứng */
		td form button:hover {
			background-color: #007F7F;
			color: white;
		}

		/* Trạng thái nhấn */
		td form button:active {
			transform: scale(0.98);
			background-color: #005f5f;
		}

		/* Đảm bảo phần tử cha của sticky sidebar (ví dụ: .col-lg-4) có đủ không gian để cuộn */
		/* .col-lg-4 {
			align-self: flex-start; 
		}

		aside.theiaStickySidebar { 
			position: sticky;
			top: 10px; 
		} */
</style>
<body>
    <?php
	$layid = $_REQUEST['id'];
	$laytenND = $p->laycot("SELECT tenDN FROM doanhnghiep WHERE idnguoidung = $layid LIMIT 1");
	$laymaDN = $p->laycot("select maDN from doanhnghiep where idnguoidung = $layid limit 1");
	$laytenDN = $p->laycot("select tenDN from doanhnghiep where idnguoidung =$layid limit 1");
	$laymaKH = $p->laycot("select maKH from khachhang where idnguoidung=$layid limit 1");
	?>
    <!-- <div id="global-loader">
        <div class="loader-img">
            <img src="assets/img/loader.png" class="img-fluid" alt="Global">
        </div>
    </div> -->

    <!-- Main Wrapper -->
    <div class="main-wrapper">
	<?php

		include_once("assets/controller/cChucnang.php");
		$p=new tmdt();

		$laymasan=$p->SelectCot("SELECT s.maSan FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE t.idnguoidung = '$layid' LIMIT 1");
		$_SESSION['maSan']=$laymasan;
		$layhinhanh=$p->SelectCot("SELECT s.hinhAnh FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE s.maSan = '$laymasan' LIMIT 1");
		$laytensan=$p->SelectCot("SELECT s.tenSan FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE s.maSan = '$laymasan' LIMIT 1");
		$laydiachi=$p->SelectCot("SELECT s.diaChi FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE s.maSan = '$laymasan' LIMIT 1");
		$laysdt=$p->SelectCot("SELECT s.soDienThoai FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE s.maSan = '$laymasan' LIMIT 1");
		$laygiamacdinh=$p->SelectCot("SELECT s.giaMacDinh FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE s.maSan = '$laymasan' LIMIT 1");
		$laygiagiovang=$p->SelectCot("SELECT s.giaGioVang FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE s.maSan = '$laymasan' LIMIT 1");
		// $laymakh=$p->SelectCot("SELECT maKH FROM khachhang WHERE idnguoidung = $idnguoidung LIMIT 1");
		// $_SESSION['maKH'] = $laymakh;
		// $laytenkh=$p->SelectCot("SELECT tenKH FROM khachhang WHERE idnguoidung = $idnguoidung LIMIT 1");
		// $layemail=$p->SelectCot("SELECT email FROM khachhang WHERE idnguoidung = $idnguoidung LIMIT 1");
		// $laysodienthoai=$p->SelectCot("SELECT soDienThoai FROM khachhang WHERE idnguoidung = $idnguoidung LIMIT 1");

	?>
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
						<a href="index.php?id=<?php echo $layid; ?>" class="navbar-brand logo">
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
							<li class="active"><a href="index.php?id=<?php echo $layid; ?>">Trang Chủ</a></li>
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
                <h1 class="text-white">Business Dashboard</h1>
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
                                    <a href="business-dashboard.php?id=<?php echo $layid ?>" class="active">
                                        <img src="assets/img/icons/dashboard-icon.svg" alt="Icon">
                                        <span>TỔNG QUAN</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="assets/view/doanhnghiep/view_dangKyHoatDong.php?id=<?php echo $layid ?>">
                                        <i class="fa fa-address-card-o" style="font-size: 29px;"></i>
                                        <br><span>ĐĂNG KÝ SÂN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/view/doanhnghiep/view_hopdong.php?id=<?php echo $layid ?>">
                                        <i class="fa-regular fa-handshake" style="font-size: 29px;"></i>
                                        <span>HỢP ĐỒNG THUÊ</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="assets/view/admin/customer.php?id=<?php echo $layid ?>">
                                        <i class="fa-regular fa-money-bill-1" style="font-size: 29px;"></i>
                                        <br><span>HÓA ĐƠN</span>
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="assets/view/admin/business.php?id=<?php echo $layid ?>">
                                        <i class="fa-regular fa-map" style="font-size: 29px;"></i>
                                        <span>SÂN</span>
                                    </a>
                                </li> -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Dashboard Menu -->

        <!-- Page Content -->
        <div class="content">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-8">
						<!-- <div class="venue-options white-bg mb-4">
							<ul class="clearfix">
								<li class="active"><a href="#overview">Chọn Khung Giờ</a></li>
								<li><a href="#includes">Thuê Dài Hạn</a></li>
								<li><a href="#rules">Quy Tắc</a></li>
								<li><a href="#amenities">Tiện Nghi</a></li>
								<li><a href="#gallery">Phòng Trưng Bày</a></li>
								<li><a href="#reviews">Đánh Giá</a></li>
								<li><a href="#location">Địa Điểm</a></li>
							</ul>
						</div> -->

						<!-- Accordian Contents -->
						<div class="accordion" id="accordionPanel">
							<div class="accordion-item mb-4" id="overview">
							    <h4 class="accordion-header" id="panelsStayOpen-overview">
							      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
									  Chọn Khung Giờ
							      	</button>
							    </h4>
							    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-overview">
							      	<div class="accordion-body">
									  <?php
										$thuTiengViet = array(
											'Mon' => 'Thứ hai',
											'Tue' => 'Thứ ba',
											'Wed' => 'Thứ tư',
											'Thu' => 'Thứ năm',
											'Fri' => 'Thứ sáu',
											'Sat' => 'Thứ bảy',
											'Sun' => 'Chủ nhật',
										);
									?>
									  <?php
											$result = $conn->query("SELECT * FROM time_slots");
											$i = mysqli_num_rows($result);
											if($i > 0)
											{
												$timeSlots = array();
												while ($row = mysqli_fetch_array($result)) {
													$id = $row['id'];
													$start_time = $row['start_time'];
													$end_time = $row['end_time'];
													$gia = $row['gia'];
													$timeSlots[] = array("id"=>$id,"start_time"=>$start_time,"end_time"=>$end_time,"gia"=>$gia);
												}
											}
											else 
											{
												echo "Không có dữ liệu";
											}

									  ?>
										<div style="max-height: 500px; overflow-y: auto;">
											<table class="fixed-table">
												<thead>
													<tr>
														<th class="sticky-col">Khung giờ</th>
														<?php foreach ($dates as $d): ?>  
															<?php 
																$dayShort = date('D', strtotime($d)); 
																$thu = isset($thuTiengViet[$dayShort]) ? $thuTiengViet[$dayShort] : $dayShort;
																$ngay = date('d/m', strtotime($d));
															?>
															<th><?php echo $thu . ' ' . $ngay; ?></th>           
														<?php endforeach; ?>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($timeSlots as $slot): ?> 
														<tr>
															<td class="sticky-col">
																<?php echo substr($slot['start_time'], 0, 5) . " - " . substr($slot['end_time'], 0, 5); ?>
															</td>                 
															<?php foreach ($dates as $d): ?>                     
																<?php                         
																$now = new DateTime();
																$slotDateTime = new DateTime("$d {$slot['start_time']}");
																$isPast = $slotDateTime < $now;
																$isBooked = isset($bookings[$d][$slot['id']]);                     
																?>                     
																<td>                         
																	<?php if ($isPast): ?>                             
																		<span class="het-han" title="Khung giờ đã trôi qua">Quá hạn</span>                         
																	<?php elseif ($isBooked): ?>   
																		<?php $ngayTao = $bookings[$d][$slot['id']]['ngayTao']; ?>                          
																		<span class="da-chon" title="Đặt lúc: <?php echo $ngayTao ?>">
																			Đã Chọn
																		</span>                         
																	<?php elseif (isset($idnguoidung)) : ?>
																		<form method="POST" action="booking-process.php">
																			<input type="hidden" name="maKH" value="<?php echo $laymakh; ?>">
																			<input type="hidden" name="maSan" value="<?php echo $maSan; ?>"> <input type="hidden" name="time_slot_id" value="<?php echo $slot['id']; ?>">
																			<input type="hidden" name="ngayDat" value="<?php echo $d; ?>">
																			<button type="submit">
																				<?php
																				$startTime = $slot['start_time'];
																				if ($startTime >= '05:00:00' && $startTime < '16:00:00') {
																					echo $laygiamacdinh;
																				} elseif ($startTime >= '16:00:00' && $startTime <= '23:59:59') {
																					echo $laygiagiovang;
																				}
																				?> K
																			</button>
																		</form>
																	<?php else : ?>
																
																			<script>
																				alert("Vui lòng đăng nhập");
																				window.location="login.php";
																			</script>
																
																		
																	<?php endif; ?>                 
																</td>
																			
															<?php endforeach; ?>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>
							    	</div>
								</div>
							</div>
							<div class="accordion-item mb-4" id="includes">
							    <h4 class="accordion-header" id="panelsStayOpen-includes">
							      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
							        	 Thuê Dài Hạn
							      	</button>
							    </h4>
							    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-includes">
							      	<div class="accordion-body">
							        	<form method="post" enctype="multipart/form-data" name="form1" id="form1">
											<div class="mb-10">
												<!-- <label for="name" class="form-label">Họ tên</label> -->
												<input type="text" class="form-control" id="name" placeholder="Nhập Tên" value="<?php echo $laytenkh ?>">
											</div>
											<div class="mb-10">
												<!-- <label for="email" class="form-label">Email</label> -->
												<input type="email" class="form-control" id="email" placeholder="Nhập Email" value="<?php echo $layemail ?>">
											</div>
											<div class="mb-10">
												<!-- <label for="phonenumber" class="form-label">Số điện thoại</label> -->
												<input type="text" class="form-control" id="phonenumber" placeholder="Nhập Số điện thoại" value="<?php echo $laysodienthoai ?>">
											</div>
											<div class="mb-10">
												<!-- <label for="soluong" class="form-label">Số lượng sân</label> -->
												<input type="text" class="form-control" id="soluong" name="soluong" value="" placeholder="... sân">
											</div>
											<div class="mb-10">
												<!-- <label for="date_start" class="form-label">Ngày bắt đầu</label> -->
												<div class="form-icon">
													<input type="date" class="form-control " placeholder="Ngày bắt đầu" id="date_start" name="date_start">
													<!-- <span class="cus-icon">
														<i class="feather-calendar"></i>
													</span> -->
												</div>
											</div>
											<div class="mb-10">
												<!-- <label for="date_end" class="form-label">Ngày kết thúc</label> -->
												<div class="form-icon">
													<input type="date" class="form-control " placeholder="Ngày kết thúc" id="date_end" name="date_end">
													<!-- <span class="cus-icon">
														<i class="feather-calendar"></i>
													</span> -->
												</div>
											</div>
											<div class="mb-10">
												<!-- <label for="comments" class="form-label">Ghi chú</label> -->
												<textarea class="form-control" id="comments" rows="3" id="comments" name="comments" placeholder="Nhập giờ và thứ trong tuần"></textarea>
											</div>
											<!-- <div class="">
												<label class="form-label">Number of Guests</label>
												<div class="input-group">
													<input type="number" class="form-control" value="1" readonly>
													<input type="number" class="form-control active" value="2" readonly>
													<input type="number" class="form-control" value="3" readonly>
													<input type="number" class="form-control" value="4" readonly>
												</div>
											</div> -->
											<div class="form-check d-flex justify-content-start align-items-center policy">
												<div class="d-inline-block">
													<input class="form-check-input" type="checkbox" value="" id="policy" checked>
												</div>
												<!-- <label class="form-check-label" for="policy">Bằng cách nhấp vào 'Gửi yêu cầu', tôi đồng ý với Chính sách bảo mật và Điều khoản sử dụng của Dreamsport</label> -->
											</div>
											<div class="d-grid btn-block">
												<input type="submit" class="btn btn-secondary d-inline-flex justify-content-center align-items-center" name="btnthemyeucau" value="Gửi Yêu Cầu">
											</div>
														
											<?php
												error_reporting(1);        
												switch($_REQUEST['btnthemyeucau'])
												{
													case 'Gửi Yêu Cầu':
													{
														// echo "hy sinh";
														$maKH=$laymakh;
														$maSan=$laymasan;
														$ngayTao = date('Y-m-d H:i:s');
														$thoiGianBatDau=$_REQUEST['date_start'];
														$thoiGianKetThuc=$_REQUEST['date_end'];
														$soLuongSan=$_REQUEST['soluong'];
														$ghiChu=$_REQUEST['comments'];
														$trangThai="chờ";
														
														if($maKH !='' && $maSan !=''&& $thoiGianBatDau!='' && $thoiGianKetThuc!=''&& $soLuongSan !='' && $ghiChu!=''&& $trangThai!='')
														{
															$conn = new mysqli('localhost','cnm','123','sancaulong');
															if ($conn->connect_error) {
																die("Connection failed: " . $conn->connect_error);
															}
															$conn->set_charset("utf8");	
															if($conn)
															{
																// Chuyển định dạng ngày nếu cần thiết
																
																$str = "INSERT INTO hopdong (maKH,maSan,ngayTao,thoiGianBatDau,thoiGianKetThuc,soLuongSan,ghiChu,trangThai) VALUES ('$maKH','$maSan','$ngayTao','$thoiGianBatDau','$thoiGianKetThuc','$soLuongSan','$ghiChu','$trangThai')";
																
																if ($conn->query($str) === TRUE) {
																	if ($conn->affected_rows > 0) {
																		echo "<script>alert('Gửi yêu cầu thành công!');</script>";
																		echo'<script language="javascript">
																				window.location="venue-details.php?maSan='.$laymasan.'";
																				</script>';
																	} else {
																		echo "<script>alert('không có Khách Hàng nào được thêm!');</script>";
																	}
																} 
																else 
																{
																	echo "Lỗi khi gửi yêu cầu" . $conn->error;
																}
																$conn->close();
															}
														}
														else
														{
															echo "<script>alert('Vui lòng điền đầy đủ thông tin!');</script>";
															
														}
														break;
													}
						
												}
											?>
										</form>
							      	</div>
							    </div>
							</div>
							<div class="accordion-item mb-4" id="rules">
							    <h4 class="accordion-header" id="panelsStayOpen-rules">
							      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
							        	Quy Tắc
							      	</button>
							    </h4>
							    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-rules">
							      	<div class="accordion-body">
							        	<ul>
							        		<li><p><i class="feather-alert-octagon"></i>Giày không để lại dấu được khuyến khích sử dụng nhưng không bắt buộc khi chơi cầu lông.</p></li>
							        		<li><p><i class="feather-alert-octagon"></i>Số lượng thành viên tối đa cho mỗi lần đặt chỗ trên mỗi sân cầu lông được Nhà cung cấp địa điểm chấp nhận.</p></li>
							        		<li><p><i class="feather-alert-octagon"></i>Không nuôi thú cưng, không hạt giống, không kẹo cao su, không thủy tinh, không đánh hoặc đu đưa bên ngoài lồng.</p></li>
							        	</ul>
							      	</div>
							    </div>
							</div>
							<div class="accordion-item mb-4" id="amenities">
							    <h4 class="accordion-header" id="panelsStayOpen-amenities">
							      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
							        	 Tiện Nghi
							      	</button>
							    </h4>
							    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-amenities">
							      	<div class="accordion-body">
							        	<ul class="d-md-flex justify-content-between align-items-center">
							        		<li><i class="fa fa-check-circle" aria-hidden="true"></i>Bãi đậu xe</li>
							        		<li><i class="fa fa-check-circle" aria-hidden="true"></i>Nước uống</li>
							        		<li><i class="fa fa-check-circle" aria-hidden="true"></i>Sơ cứu</li>
							        		<li><i class="fa fa-check-circle" aria-hidden="true"></i>Phòng thay đồ</li>
							        		<li><i class="fa fa-check-circle" aria-hidden="true"></i>Vòi sen</li>
							        	</ul>
							      	</div>
							    </div>
							</div>
							<div class="accordion-item mb-4" id="gallery">
							    <h4 class="accordion-header" id="panelsStayOpen-gallery">
							      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
							        	 Phòng Trưng Bày
							      	</button>
							    </h4>
							    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-gallery">
							      	<div class="accordion-body">
							        	<div class="owl-carousel gallery-slider owl-theme">
							        		<a class="corner-radius-10" href="assets/img/gallery/gallery2/gallery-thumb-01.jpg" data-fancybox="gallery3">
												<img class="img-fluid corner-radius-10" alt="Image" src="assets/img/gallery/gallery2/gallery-01.jpg">
											</a>
							        		<a class="corner-radius-10" href="assets/img/gallery/gallery2/gallery-thumb-02.jpg" data-fancybox="gallery3">
												<img class="img-fluid corner-radius-10" alt="Image" src="assets/img/gallery/gallery2/gallery-02.jpg">
											</a>
							        		<a class="corner-radius-10" href="assets/img/gallery/gallery2/gallery-thumb-03.jpg" data-fancybox="gallery3">
												<img class="img-fluid corner-radius-10" alt="Image" src="assets/img/gallery/gallery2/gallery-03.jpg">
											</a>
							        		<a class="corner-radius-10" href="assets/img/gallery/gallery2/gallery-thumb-01.jpg" data-fancybox="gallery3">
												<img class="img-fluid corner-radius-10" alt="Image" src="assets/img/gallery/gallery2/gallery-01.jpg">
											</a>
							        		<a class="corner-radius-10" href="assets/img/gallery/gallery2/gallery-thumb-02.jpg" data-fancybox="gallery3">
												<img class="img-fluid corner-radius-10" alt="Image" src="assets/img/gallery/gallery2/gallery-02.jpg">
											</a>
							        		<a class="corner-radius-10" href="assets/img/gallery/gallery2/gallery-thumb-03.jpg" data-fancybox="gallery3">
												<img class="img-fluid corner-radius-10" alt="Image" src="assets/img/gallery/gallery2/gallery-03.jpg">
											</a>
							        	</div>
							      	</div>
							    </div>
							</div>
							<div class="accordion-item mb-4" id="reviews">
							    <div class="accordion-header" id="panelsStayOpen-reviews">
							      	<div class="accordion-button d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-controls="panelsStayOpen-collapseSix">
							        	<span class="w-75 mb-0">
							        		 Đánh Giá
							        	</span>
							        	<a href="javascript:void(0);" class="btn btn-gradient pull-right write-review add-review" data-bs-toggle="modal" data-bs-target="#add-review">Viết một đánh giá</a>
							      	</div>
							    </div>
							    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-reviews">
							      	<div class="accordion-body">
							        	<div class="row review-wrapper">
							        		<div class="col-lg-3">
								        		<div class="ratings-info corner-radius-10 text-center">
								        			<h3>4.8</h3>
								        			<span>out of 5.0</span>
								        			<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
												   </div>
								        		</div>
								        	</div>
								        	<div class="col-lg-9">
								        		<div class="recommended">
								        			<h5>Recommended by 97% of Players</h5>
								        			<div class="row">
								        				<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
								        					<p class="mb-0">Quality of service</p>
								        					<ul>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><span>5.0</span></li>
								        					</ul>
								        				</div>
								        				<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
								        					<p class="mb-0">Quality of service</p>
								        					<ul>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><span>5.0</span></li>
								        					</ul>
								        				</div>
								        				<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-3">
								        					<p class="mb-0">Quality of service</p>
								        					<ul>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><span>5.0</span></li>
								        					</ul>
								        				</div>
								        				<div class="col-12 col-sm-12 col-md-4 col-lg-4">
								        					<p class="mb-0">Quality of service</p>
								        					<ul>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><span>5.0</span></li>
								        					</ul>
								        				</div>
								        				<div class="col-12 col-sm-12 col-md-4 col-lg-4">
								        					<p class="mb-0">Quality of service</p>
								        					<ul>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><i></i></li>
								        						<li><span>5.0</span></li>
								        					</ul>
								        				</div>
								        			</div>
								        		</div>
								        	</div>
							        	</div>
							        	<!-- Review Box -->
							        	<div class="review-box d-md-flex">
							        		<div class="review-profile">
							        			<img src="assets/img/profiles/avatar-01.jpg" alt="User">
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
							        			<ul class="review-gallery clearfix">
							        				<li>
														<a href="assets/img/gallery/gallery-thumb-01.jpg" data-fancybox="gallery">
															<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-01.jpg">
													  	</a>
							        				</li>
							        				<li>
														<a href="assets/img/gallery/gallery-thumb-02.jpg" data-fancybox="gallery">
															<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-02.jpg">
													  	</a>
							        				</li>
							        				<li>
														<a href="assets/img/gallery/gallery-thumb-03.jpg" data-fancybox="gallery">
															<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-03.jpg">
													  	</a>
							        				</li>
							        				<li>
														<a href="assets/img/gallery/gallery-thumb-04.jpg" data-fancybox="gallery">
															<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-04.jpg">
													  	</a>
							        				</li>
							        				<li>
														<a href="assets/img/gallery/gallery-thumb-05.jpg" data-fancybox="gallery">
															<img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-05.jpg">
													  	</a>
							        				</li>
							        			</ul>
							        			<span class="post-date">Sent on 11/03/2023</span>
							        		</div>
							        	</div>
							        	<!-- /Review Box -->

							        	<!-- Review Box -->
							        	<div class="review-box d-md-flex">
							        		<div class="review-profile">
							        			<img src="assets/img/profiles/avatar-06.jpg" alt="User">
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
							        			<span class="warning-text"><i class="feather-x"></i>No, I dont want to book again.</span>
							        			<h6>Awesome. Its very convenient to play.</h6>
							        			<p>If you are looking for a perfect place for friendly matches with your friends or a competitive match, It is the best place.</p>
							        			<div class="dull-bg">
							        				<p>Experience badminton excellence at Badminton Academy. Top-notch facilities, well-maintained courts, and a friendly atmosphere. Highly recommended for an exceptional playing experience</p>
							        			</div>
							        		</div>
							        	</div>
							        	<!-- /Review Box -->
							        	<div class="d-flex justify-content-center mt-1">
							        		<button type="button" class="btn btn-load-more d-flex justify-content-center align-items-center">Load More<i class="feather-plus-square"></i></button>
							        	</div>
							      	</div>
							    </div>
							</div>
							<div class="accordion-item" id="location">
							    <h4 class="accordion-header" id="panelsStayOpen-location">
							      	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
							        	 Địa Điểm
							      	</button>
							    </h4>
							    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-location">
							      	<div class="accordion-body">
							        	<div class="google-maps">
										    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.8862835683544!2d-73.98256668525309!3d41.93829486962529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd0ee3286615b7%3A0x42bfa96cc2ce4381!2s132%20Kingston%20St%2C%20Kingston%2C%20NY%2012401%2C%20USA!5e0!3m2!1sen!2sin!4v1670922579281!5m2!1sen!2sin" height="445" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
										<div class="dull-bg d-flex justify-content-start align-items-center mt-3">
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
					<aside class="col-12 col-sm-12 col-md-12 col-lg-4 theiaStickySidebar">
						<div class="white-bg book-court">
							<!-- <h4 class="border-bottom">Đặt sân trực tiếp</h4>
							<h5 class="d-inline-block"><?php echo $laytensan ?></h5><p class="d-inline-block">, có sẵn ngay bây giờ</p>
							<ul class="d-sm-flex align-items-center justify-content-evenly">
								<li>
									<h3 class="d-inline-block primary-text"><?php echo $laygiamacdinh ?></h3><span>/hr</span>
									<p>Giá Mặc Định</p>
								</li>
								<li>
									<span><i class="feather-plus"></i></span>
								</li>
								<li>
									<h4 class="d-inline-block primary-text"><?php echo $laygiagiovang ?></h4><span>/hr</span>
									<p>Giá Giờ Vàng</p>
								</li>
							</ul> -->
							<!-- <div class="d-grid btn-block mt-3">
								<a href="coach-details.html" class="btn btn-secondary d-inline-flex justify-content-center align-items-center"><i class="feather-calendar"></i>Book Now</a>
							</div> -->
						</div>
						
						<div class="white-bg" style="padding: 20px; border-radius: 10px;">
							<h4 class="border-bottom">Thông tin đặt sân</h4>
							<form>
								<div class="mb-10">
									
									<div>
										<form method="POST" action=""></form>
											<table style="border: 1px solid grey; width: 100%;">
												<thead>
													<tr style="border: 1px solid grey">
														<td style="border: 1px solid grey" align="center"><b>STT</b></td>
														<td style="border: 1px solid grey" align="center"><b>Bắt đầu</b></td>
														<td style="border: 1px solid grey" align="center"><b>Kết thúc</b></td>
														<!-- <td style="border: 1px solid grey" align="center"><b>Giá</b></td> -->
														<td style="border: 1px solid grey" align="center"><b>Tên</b></td>
														<!-- <td style="border: 1px solid grey" align="center"><b>Giá</b></td> -->
													</tr>
												</thead>
												<tbody>
													<?php
														include_once("assets/view/sancaulong/viewlichdn.php");
													?>
												</tbody>
											</table>
									</form>
									</div>
									<div>
										<?php
										include_once('assets/model/mUser.php');
										$k = new mUser();

										if (isset($_POST['btn_xoa']) && isset($_POST['maDat'])) {
										$maXoa = $_POST['maDat'];
										if ($k->themxoasua("DELETE FROM bookings WHERE maDat = '$maXoa' LIMIT 1") == 1) {
												echo '<script>window.location.href="venue-details.php?maSan='.$laymasan.'";</script>';
												exit();
											}
										}

										?>


									</div>
								</div>
								<form method="post" enctype="multipart/form-data" name="form1" id="form1">
									<div class="mb-10">
										<!-- <label for="name" class="form-label">Họ tên</label> -->
										<input type="text" class="form-control" id="name" placeholder="Nhập Tên" value="<?php echo $laytenkh ?>">
									</div>
									<div class="mb-10">
										<!-- <label for="email" class="form-label">Email</label> -->
										<input type="email" class="form-control" id="email" placeholder="Nhập Email" value="<?php echo $layemail ?>">
									</div>
									<div class="mb-10">
										<!-- <label for="name" class="form-label">Số điện thoại</label> -->
										<input type="text" class="form-control" id="phonenumber" placeholder="Nhập số điện thoại" value="<?php echo $laysodienthoai ?>">
									</div>
									<div class="mb-10">
										<!-- <label for="date_start" class="form-label">Ngày bắt đầu</label> -->
										<div class="form-icon">
											<input type="date" class="form-control " placeholder="Ngày Đặt" id="date_start" name="date_start">
											<!-- <span class="cus-icon">
												<i class="feather-calendar"></i>
											</span> -->
										</div>
									</div>
									<div class="mb-10">
										<!-- <label for="comments" class="form-label">Ghi chú</label> -->
										<textarea class="form-control" id="comments" rows="3" placeholder="Nhập ghi chú"></textarea>
									</div>
									<!-- <div class="">
										<label class="form-label">Number of Guests</label>
										<div class="input-group">
											<input type="number" class="form-control" value="1" readonly>
											<input type="number" class="form-control active" value="2" readonly>
											<input type="number" class="form-control" value="3" readonly>
											<input type="number" class="form-control" value="4" readonly>
										</div>
									</div> -->
									<!-- <div class="form-check d-flex justify-content-start align-items-center policy">
										<div class="d-inline-block">
											<input class="form-check-input" type="checkbox" value="" id="policy" checked>
										</div>
										<label class="form-check-label" for="policy">Bằng cách nhấp vào 'Gửi yêu cầu', tôi đồng ý với Chính sách bảo mật và Điều khoản sử dụng của Dreamsport</label>
									</div> -->
									<div class="d-grid btn-block">
										<a href="court-payment.php?maKH=<?php echo $layid;?>" class="btn btn-secondary d-inline-flex justify-content-center align-items-center">Thanh Toán<i class="feather-arrow-right-circle ms-1"></i></a>
									</div>
							</form>
						</div>
						<div class="white-bg justify-content-start align-items-center availability">
							
						</div>
						
						
					</aside>
				</div>
				<!-- /Row -->
			</div>
			<!-- /Container -->

			<section class="section innerpagebg">
				<div class="container">
			        <div class="featured-slider-group">
			        	<!-- <h3 class="mb-40">Địa điểm tương tự</h3> -->
			        	<div class="owl-carousel featured-venues-slider owl-theme">

							<!-- Featured Item -->
							
						    <!-- <div class="featured-venues-item">
								<div class="listing-item mb-0">										
									<div class="listing-img">
										<a href="venue-details.html">
											<img src="assets/img/venues/venues-01.jpg" alt="Venue">
										</a>
										<div class="fav-item-venues">
											<span class="tag tag-blue">Featured</span>		
											<h5 class="tag tag-primary">$450<span>/hr</span></h5>
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
											<a href="venue-details.html">Sarah Sports Academy</a>
										</h3>
										<div class="listing-details-group">
											<p>Elevate your athletic journey at Sarah Sports Academy, where excellence meets opportunity.</p>
											<ul>
												<li>
													<span>
														<i class="feather-map-pin"></i>Port Alsworth, AK
													</span>
												</li>
												<li>
													<span>
														<i class="feather-calendar"></i>Next Availablity : <span class="primary-text">15 May 2023</span>
													</span>
												</li>
											</ul>
										</div>
										<div class="listing-button">
											<div class="listing-venue-owner">
												<a class="navigation">
													<img src="assets/img/profiles/avatar-01.jpg" alt="User">Mart Sublin
												</a>												
											</div>
											<a href="venue-details.html" class="user-book-now"><span><i class="feather-calendar me-2"></i></span>Book Now</a>
										</div>	
									</div>
								</div>
							</div> -->
							<!-- /Featured Item -->



						</div>	
					</div>
				</div>
			</section>
			
		</div>
        <!-- /Page Content -->

		<!-- chatbox -->
		<div class="chatbox">
			<input type="checkbox" id="click">
			<label for="click">
			<i class="fab fa-facebook-messenger"></i>
			<i class="fas fa-times"></i>
			</label>
			<div class="wrapper">
				<div class="head-text">
					Doanh Nghiệp Chat
				</div>
				<div id="head-text">Chưa chọn khách hàng</div>
				<!-- <ul id="requests"></ul> -->
				<div class="chat-box">
					<ul id="requests"></ul>
					<form action="" id="chatForm">
					<div class="field">
						<input type="hidden" name="maKH" id="maKH" value="<?php echo $laymaKH ?>">
						<input type="text" id="replyText" name="replyText" placeholder="Phản hồi..." autocomplete="off">
					</div>
					<div class="field">
						<input type="hidden" name="maDN" id="maDN" value="<?php echo $laymaDN ?>">
						
						<button type="submit">Gửi phản hồi</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /chatbox -->
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

	<script>
	document.addEventListener("DOMContentLoaded", () => {
		const maDN = "<?php echo $laymaDN ?>";
		// console.log("Doanh nghiệp online:", maDN);
	});
	</script>
	<script>
    const maDN = "<?php echo $laymaDN; ?>";
    console.log("maDN:", maDN);
</script>
<script src="/quanLySanCauLong-B2B-/html/assets/js/chatbox/business.js"></script>
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