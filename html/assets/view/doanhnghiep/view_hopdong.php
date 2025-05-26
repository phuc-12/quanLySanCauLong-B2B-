<?php
error_reporting(1);
include_once("../../model/mUser.php");
$p = new mUser();

session_start();
$_SESSION['id']
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:32:23 GMT -->

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
        $layid = $_REQUEST['id'];
        $laymasan=$p->laycot("SELECT s.maSan FROM taikhoannguoidung t join doanhnghiep d on t.idnguoidung=d.idnguoidung join thongtinsan s on d.maDN=s.maSan WHERE t.idnguoidung = '$layid' LIMIT 1");
        session_start();
        $_SESSION['maSan']=$laymasan;
    ?>
    <!-- <div id="global-loader" >
		<div class="loader-img">
			<img src="../../../assets/img/loader.png" class="img-fluid" alt="Global">
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
                        <a href="#" class="navbar-brand logo">
                            <img src="../../../assets/img/logo.svg" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="#" class="menu-logo">
                                <img src="../../../assets/img/logo-black.svg" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                                                  
                    </div>
                    <ul class="nav header-navbar-rht logged-in">

                        <!-- <a href="login.php"><span><i class="feather-users"></i></span>Đăng Nhập</a> / <a href="register.php">Đăng Ký</a> -->

                        <?php
									if(isset($_REQUEST['id']) || isset($_REQUEST['maDN']))
									{
										echo '
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
															<h6>Admin</h6>
														</div>
													</div>
													
													<p><a class="dropdown-item"  href="../../../login.php">Logout</a></p>
												</div>
											</li>		
											
										';
									}
									else 
									{
										echo '
										<li class="nav-item">
											<div class="nav-link btn btn-white log-register">	
												<a href="../../../login.php"><span><i class="feather-users"></i></span>Đăng Nhập</a> / <a href="../../../register.php">Đăng Ký</a>
										</div>
										</li>
										<li class="nav-item">
										<a class="nav-link btn btn-secondary" href="../../../add-court.php"><span><i class="feather-check-circle"></i></span>Sân Của Bạn</a>
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
                <h1 class="text-white">QUẢN LÝ DOANH NGHIỆP</h1>
                <!-- <ul>
					<li><a href="index.html">Home</a></li>
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
                                        <img src="../../img/icons/dashboard-icon.svg" alt="Icon">
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
                                    <a href="assets/view/admin/business.php?id=<?php echo $layid ?>">
                                        <i class="fa-regular fa-handshake" style="font-size: 29px;"></i>
                                        <span>HỢP ĐỒNG THUÊ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/view/admin/customer.php?id=<?php echo $layid ?>">
                                        <i class="fa-regular fa-money-bill-1" style="font-size: 29px;"></i>
                                        <br><span>HÓA ĐƠN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="assets/view/admin/business.php?id=<?php echo $layid ?>">
                                        <i class="fa-regular fa-map" style="font-size: 29px;"></i>
                                        <span>SÂN</span>
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
										include_once("../../controller/cUser.php");
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
                        <p style="font-size: 20px; float: left;"><b>DANH SÁCH DOANH NGHIỆP</b></p>
                    </div>

                    <!-- Tabs -->
                    <div style="display: flex; gap: 20px; margin-bottom: 20px;">
                        <!-- <button class="nav-link active" onclick="showTab('khachhang')"
                            style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
											text-align: center; border-radius: 5px; text-decoration: none;border: 0; font-weight: 700; display: inline-block;">Doanh Nghiệp</button> -->
                        <button class="nav-link" onclick="showTab('doanhnghiep')" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
											text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">Doanh Nghiệp</button>

                    </div>

                    <!-- Bảng doanh nghiệp -->
                    <div id="tab-doanhnghiep">
                        <?php 
                            include_once("../sancaulong/viewhopdongdn.php");
                        ?>
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

    <div>
        <?php
        include_once('../../model/mUser.php');
        $k = new mUser();
        switch ($_POST['btnxoa'])
                    {
                        case 'XÓA':
                        {
                            if(isset($_REQUEST['id']))
                            {
                                $maXoa = $_REQUEST['id'];
                                if($k->themxoasua("DELETE FROM doanhnghiep WHERE maDN = '$maXoa' LIMIT 1")==1)
                                {
                                    echo'<script language="javascript">
                                        alert("Xóa doanh nghiệp thành công");	
                                        </script>';
                                }
                                
                                echo'<script language="javascript">
                                        window.location="business.php?id='.$layid.'";
                                        </script>';
                            }
                            else 
                            {
                                echo'<script language="javascript">
                                    alert("Vui lòng chọn doanh nghiệp cần xóa");	
                                    </script>';
                            }
                            break;
                        }
                    }
        ?>

    </div>
    </div>

</body>
<script>
function confirmDelete() {
    return confirm("Bạn có chắc chắn muốn xóa doanh nghiệp này?");
}
</script>
<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:32:23 GMT -->

</html>