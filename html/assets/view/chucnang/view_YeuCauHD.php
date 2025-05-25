<?php
session_start();
error_reporting(1);
include_once("../../model/mUser.php");
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
$layMaYC = $p->laycot("SELECT maYeuCau FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layTenSan = $p->laycot("SELECT tenSan FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$laySoLuongSan = $p->laycot("SELECT soLuongSan FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layGioMoCua = $p->laycot("SELECT gioMoCua FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layGiaMacDinh = $p->laycot("SELECT giaMacDinh FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layGiaGioVang = $p->laycot("SELECT giaGioVang FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layDiaChi = $p->laycot("SELECT diaChi FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layHinhAnh = $p->laycot("SELECT hinhAnhSan FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layCCCD = $p->laycot("SELECT CCCD FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
$layTenChuSan = $p->laycot("SELECT tenChuSan FROM yeucauhoatdong WHERE maYeuCau = '$layid' LIMIT 1");
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
									if(isset($_REQUEST['id']))
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
                <h1 class="text-white">QUẢN LÝ YÊU CẦU</h1>
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
                                    <a href="../../../admin-dashboard.php?id=<?php echo $layid ?>">
                                        <img src="../../img/icons/dashboard-icon.svg" alt="Icon">
                                        <span>TỔNG QUAN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="view_YeuCauHD.php?id=<?php echo $layid ?>"class="active">
                                        <img src="../../img/icons/booking-icon.svg" alt="Icon">
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
                                    <a href="../admin/customer.php?id=<?php echo $layid ?>" >
                                        <i class="fa fa-address-card-o" style="font-size: 29px;"></i>
                                        <br><span>KHÁCH HÀNG</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../admin/business.php?id=<?php echo $layid ?>">
                                        <img src="../../img/icons/chat-icon.svg" alt="Icon">
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
                    <div style="padding: 30px; width: 100%; height: 150px; border-bottom: 1px solid #E5E5E5;">
                        <div>
                            <i class="fa fa-address-card-o" style="font-size: 25px;"></i>
                            <h4 style="width: 190px; height: 40px; float: left;"><span>TỔNG SỐ LƯỢNG</span><br><br>
                                <span style="color:red; margin-right: 20px;">
                                    <?php
										include_once("../../controller/cUser.php");
										$p = new CUser();
										$countReq = $p->getCountReq();
										echo $countReq;
									?>
                                </span>YÊU CẦU<br>
                                <span style="color:red; margin-right: 20px;">
                                    <?php
										include_once("../../controller/cUser.php");
										$p = new CUser();
										$countReq = $p->getCountReqAccept();
										echo $countReq;
									?>
                                </span>ĐÃ DUYỆT<br>
                                <span style="color:red; margin-right: 20px;">
                                    <?php
										include_once("../../controller/cUser.php");
										$p = new CUser();
										$countReq = $p->getCountReqRefuse();
										echo $countReq;
									?>
                                </span>TỪ CHỐI<br>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-->
            <div class="col-md-9">
                <div id="ds_all">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;"><b>YÊU CẦU</b></p>
                    </div>

                    <a href="../admin/requirement.php?id=<?php echo $layid ?>" class="fa fa-angle-left" style="padding: 10px 0;height: 45px; width: 45px; background-color: #097E52; color: white; 
											text-align: center; border-radius: 10px; text-decoration: none; border: 0; font-weight: 700; display: inline-block; margin: 5px;"></a>
                    <h3>THÔNG TIN YÊU CẦU</h3>
                    <form method="post" enctype="multipart/form-data" name="form1" id="form1" style="width: 100%;">
                        <table style="margin:0; height: 500px;" style="width: 50%; float:left;">
                            <tr>
                                <td style="width: 150px;"><label for="maYeuCau">Mã Yêu Cầu:</label></td>
                                <td><input type="input" class="form-control" size="76" id="maYeuCau" value="<?php echo $layMaYC;?>" name="maYeuCau" readonly></td>
                                <!-- <td style="width: 200px;"><span id="errMaNV" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="tenSan">Tên Sân:</label></td>
                                <td><input type="input" class="form-control" size="76" id="tenSan" value="<?php echo $layTenSan;?>" name="tenSan" readonly></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="soLuongSan">Số Lượng Sân:</label></td>
                                <td><input type="input" class="form-control" size="76" id="soLuongSan" value="<?php echo $laySoLuongSan;?>" name="soLuongSan"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="	gioMoCua">Giờ Mở Cửa:</label></td>
                                <td><input type="input" class="form-control" size="76" id="	gioMoCua" value="<?php echo $layGioMoCua;?>" name="	gioMoCua"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="giaMacDinh">Giá Mặc Định</label></td>
                                <td><input type="input" class="form-control" size="76" id="giaMacDinh" value="<?php echo $layGiaMacDinh;?>" name="giaMacDinh"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="giaGioVang">Giá Giờ Vàng:</label></td>
                                <td><input type="input" class="form-control" size="76" id="giaGioVang" value="<?php echo $layGiaGioVang;?>" name="tenDgiaGioVangN"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="diaChi">Địa Chỉ:</label></td>
                                <td><input type="input" class="form-control" size="76" id="diaChi" value="<?php echo $layDiaChi;?>" name="diaChi"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="tenChuSan">Tên Chủ Sân:</label></td>
                                <td><input type="input" class="form-control" size="76" id="tenChuSan" value="<?php echo $layTenChuSan;?>" name="tenChuSan"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="CCCD">CCCD</label></td>
                                <td><input type="input" class="form-control" size="76" id="CCCD" value="<?php echo $layCCCD;?>" name="CCCD"readonly></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <!-- <tr>
                                <td style="width: 400px; height: 400px; position: absolute; top: 500px; right: 150px; background-color: black;"><label for="hinhAnhSan">Hình Ảnh:</label></td>
                                <td><img src="../../img/venues/<?php echo $layHinhAnh?>" alt="" style="width: 100%; height: 100%;"></td>
                                
                            </tr> -->

                            <tr>
                                <?php
                                    $layid = $_GET['id'];
                                    $sql = "SELECT * FROM yeucauhoatdong WHERE maYeuCau = '$layid'";

                                ?>
                                <td colspan=2 style="text-align:right;">
                                    <input type="hidden" name="id" value="<?php echo $layMaYC; ?>">
                                    <input type="submit" name="btn" id="btnsubmit" value="Phê Duyệt" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
										text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">
                                    <input type="submit" name="btn" id="btnrefuse" value="Từ Chối" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
										text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;"> 
                                </td>
                            </tr>
                        </table>
                        <div style="width: 400px; height: 400px; position: absolute; top: 510px; right: 150px; background-color: black;">
                            <img src="../../img/venues/<?php echo $layHinhAnh?>" alt="" style="width: 100%; height: 100%;">
                            
                        </div>
                        <?php
                        error_reporting(1);
                        include_once("../../model/mUser.php");
                        $k = new mUser();
                        if($_REQUEST['id']!='')
                        {
                            switch($_REQUEST['btn'])
                            {
                                case 'Phê Duyệt':
                                {
                                    $maYeuCau=$_REQUEST['id'];
                                    if($maYeuCau!='')
                                    {
                                        if($k->themxoasua("UPDATE yeucauhoatdong SET trangThai = 'Phê Duyệt' WHERE maYeuCau = '$maYeuCau' LIMIT 1")==1)
                                        {
                                            echo'<script language="javascript">
                                            alert("Phê duyệt thành công");
                                            window.location="../admin/requirement.php?id='.$layid.'";	
                                            </script>';
                                        }
                                        echo'<script language="javascript">
                                        window.location="view_YeuCauHD.php?id='.$layid.'";
                                        </script>';
                                        
                                    }
                                    else
                                    {
                                        echo'<script language="javascript">
                                            alert("Lỗi");	
                                            </script>';
                                    }
                                    break;
                                }
                                case 'Từ Chối':
                                {
                                    $maYeuCau=$_REQUEST['id'];
                                    if($maYeuCau!='')
                                    {
                                        if($k->themxoasua("UPDATE yeucauhoatdong SET trangThai = 'Từ Chối' WHERE maYeuCau = '$maYeuCau' LIMIT 1")==1)
                                        {
                                            echo'<script language="javascript">
                                            alert("Từ chối yêu cầu");
                                            window.location="../admin/requirement.php?id='.$layid.'";	
                                            </script>';
                                        }
                                        echo'<script language="javascript">
                                        window.location="view_YeuCauHD.php?id='.$layid.'";
                                        </script>';
                                        
                                    }
                                    else
                                    {
                                        echo'<script language="javascript">
                                            alert("Lỗi");	
                                            </script>';
                                    }
                                    break;
                                }

                            }
                        } 
                        else 
                        {
                            echo'<script language="javascript">
                            alert("Vui lòng chọn hợp đồng");	
                            window.location="../admin/requirement.php";
                            </script>';
                        }
                    ?>
                </form>
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

    </div>

</body>

<!-- Mirrored from dreamsports.dreamstechnologies.com/html/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 04:32:23 GMT -->

</html> 