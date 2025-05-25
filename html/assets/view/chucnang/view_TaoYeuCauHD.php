<?php
session_start();
error_reporting(1);
include_once("../../model/mUser.php");
$p = new mUser();
$conn =$p->connect();
$query = "SELECT MAX(maYeuCau) as maxMa FROM yeucauhoatdong";
$result = $conn->query($query);
$newInvoiceCode = 1; 
    if ($result && $row = $result->fetch_assoc()) {
        $maxMa = $row['maxMa'];
        $newInvoiceCode = $maxMa + 1; 
    }
$_SESSION['idnguoidung'] = $_REQUEST['id'];
// if (!isset($_SESSION['id'])) {
//     die("Chưa đăng nhập hoặc session id chưa được thiết lập!");
// }
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
session_start();
$layid = $_REQUEST['id'];
$laymaDN = $p->laycot("select maDN FROM doanhnghiep where idnguoidung = $layid limit 1");
$laytenND = $p->laycot("SELECT tenDN FROM doanhnghiep WHERE idnguoidung = $layid LIMIT 1");
$layMaYC = $p->laycot("select maYeuCau FROM yeucauhoatdong limit 1");
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
															<h6>'.$laytenND.'</h6>
															<a href="view_updateDN.php?id='.$layid.'" style="color:black;" class="text-profile mb-0">Go to Profile</a>
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
                                    <a href="../../../business-dashboard.php?id=<?php echo $layid ?>" >
                                        <img src="../../img/icons/dashboard-icon.svg" alt="Icon">
                                        <span>TỔNG QUAN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../admin/requirement.php?id=<?php echo $layid ?>">
                                        <img src="../../img/icons/booking-icon.svg" alt="Icon">
                                        <span>YÊU CẦU THUÊ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../doanhnghiep/view_dangKyHoatDong.php?id=<?php echo $layid ?>"class="active">
                                        <i class="fa fa-address-card-o" style="font-size: 29px;"></i>
                                        <br><span>ĐĂNG KÝ SÂN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../admin/business.php?id=<?php echo $layid ?>">
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
										$countReq = $p->getCountALLReqDN();
										echo $countReq;
									?>
                                </span>YÊU CẦU<br>
                                <!-- <?php 
                                    session_start();
                                    echo '<pre>';
                                    echo "<pre>";
                                    print_r($_POST);
                                    print_r($_FILES);
                                    echo "</pre>";
                                    echo '</pre>';
                                    var_dump($layid); 
                                    var_dump($laymaDN);
                                    echo "Đường dẫn đầy đủ: " . realpath($targetFile);
                                ?> -->
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-->
            <div class="col-md-9">
                <div id="ds_all">
                    <div style="width: 100%; height: 60px; padding: 10px; border-bottom: 0.5px solid #E5E5E5;">
                        <p style="font-size: 20px; float: left;"><b>DANH SÁCH YÊU CẦU</b></p>
                    </div>
                    <a href="../doanhnghiep/view_dangKyHoatDong.php?id=<?php echo $layid ?>" class="fa fa-angle-left" style="padding: 10px 0;height: 45px; width: 45px; background-color: #097E52; color: white; 
											text-align: center; border-radius: 10px; text-decoration: none; border: 0; font-weight: 700; display: inline-block; margin: 5px;"></a>
                    <h3>THÔNG TIN YÊU CẦU</h3>
                    <form method="post" action="" enctype="multipart/form-data" name="form1" id="form1" style="width: 100%;">
                        <table style="margin:0; height: 500px; width: 50%; float:left;">
                            <tr>
                                <td style="width: 150px;"><label for="maYeuCau">Mã Yêu Cầu:</label></td>
                                <td><input type="input" class="form-control" size="76" id="maYeuCau" value="<?php echo $newInvoiceCode;?>" name="maYeuCau" readonly></td>
                                <!-- <td style="width: 200px;"><span id="errMaNV" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td><input type="hidden" class="form-control" size="76" id="maDN" value="<?php echo $laymaDN;?>" name="maDN" readonly></td>
                                <!-- <td style="width: 200px;"><span id="errMaNV" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="tenSan">Tên Sân:</label></td>
                                <td><input type="input" class="form-control" size="76" id="tenSan" value="" name="tenSan" ></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="soLuongSan">Số Lượng Sân:</label></td>
                                <td><input type="input" class="form-control" size="76" id="soLuongSan" value="" name="soLuongSan"></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="	gioMoCua">Giờ Mở Cửa:</label></td>
                                <td><input type="input" class="form-control" size="76" id="gioMoCua" value="" name="gioMoCua"></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="giaMacDinh">Giá Mặc Định</label></td>
                                <td><input type="input" class="form-control" size="76" id="giaMacDinh" value="" name="giaMacDinh"></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="giaGioVang">Giá Giờ Vàng:</label></td>
                                <td><input type="input" class="form-control" size="76" id="giaGioVang" value="" name="giaGioVang"></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="diaChi">Địa Chỉ:</label></td>
                                <td><input type="input" class="form-control" size="76" id="diaChi" value="" name="diaChi"></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="tenChuSan">Tên Chủ Sân:</label></td>
                                <td><input type="input" class="form-control" size="76" id="tenChuSan" value="" name="tenChuSan"></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="ngayTao">Ngày Tạo:</label></td>
                                <td><input type="date" class="form-control" size="76" id="ngayTao" value="" name="ngayTao"></td>
                                <!-- <td style="width: 200px;"><span id="errHoTen" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td style="width: 150px;"><label for="CCCD">CCCD</label></td>
                                <td><input type="input" class="form-control" size="76" id="CCCD" value="" name="CCCD"></td>
                                <!-- <td style="width: 200px;"><span id="errNgaySinh" class="err text-danger"></span></td> -->
                            </tr>
                            <tr>
                                <td><label for="myfile">Thêm Ảnh:</label></td>
                                <td><input type="file" name="myfile" id="myfile"></td>
                                
                            </tr>
                            <tr>
                                <?php
                                    $layid = $_GET['id'];
                                    $sql = "SELECT * FROM yeucauhoatdong WHERE maYeuCau = '$layid'";

                                ?>
                                <td colspan=2 style="text-align:right;">
                                    <!-- <input type="hidden" name="id" value="<?php echo $layMaYC; ?>"> -->
                                    <input type="submit" name="btnthem" id="btnthem" value="Thêm" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; 
										text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">
                                    <a href="../doanhnghiep/view_dangKyHoatDong.php?id=<?php echo $layid ?>" style="display: inline-block;padding: 10px 20px;background-color: red;color: white;text-align: center;border-radius: 5px;text-decoration: none;">Hủy</a>
                                </td>
                            </tr>
                        </table>
                        <!-- <div style="width: 400px; height: 400px; position: absolute; top: 510px; right: 150px;">
                            <label for="myfile">Thêm Ảnh:</label>
                            <input type="file" name="myfile" id="myfile">
                        </div> -->
                        <?php
                            error_reporting(E_ALL);
                            ini_set('display_errors', 1);
                            include_once("../../model/mUser.php");
                            $k = new mUser();

                            if (!empty($_REQUEST['btnthem']) && !empty($_REQUEST['id'])) {
                                // echo "<pre>";
                                // print_r($_FILES['myfile']);
                                // echo "</pre>";
                                // switch ($_FILES['myfile']['error']) {
                                //     case 0: echo "Không có lỗi, file upload thành công."; break;
                                //     case 1: echo "UPLOAD_ERR_INI_SIZE: File vượt quá dung lượng tối đa trong php.ini"; break;
                                //     case 2: echo "UPLOAD_ERR_FORM_SIZE: File vượt quá dung lượng tối đa trong form HTML"; break;
                                //     case 3: echo "UPLOAD_ERR_PARTIAL: File chỉ upload được một phần"; break;
                                //     case 4: echo "UPLOAD_ERR_NO_FILE: Không có file nào được chọn"; break;
                                //     default: echo "Lỗi không xác định: " . $_FILES['myfile']['error']; break;
                                // }
                                switch ($_POST['btnthem']) {
                                    case 'Thêm': {
                                        $maYeuCau = $_REQUEST['maYeuCau'];
                                        $maDN = isset($_POST['maDN']) ? $_POST['maDN'] : null;
                                        $tenSan = $_REQUEST['tenSan'];
                                        $soLuongSan = $_REQUEST['soLuongSan'];
                                        $gioMoCua = $_REQUEST['gioMoCua'];
                                        $giaMacDinh = $_REQUEST['giaMacDinh'];
                                        $giaGioVang = $_REQUEST['giaGioVang'];
                                        $diaChi = $_REQUEST['diaChi'];
                                        $tenChuSan = $_REQUEST['tenChuSan'];
                                        $CCCD = $_REQUEST['CCCD'];
                                        $ngayTao = $_REQUEST['ngayTao'];
                                        $trangThai = 'Chờ Phê Duyệt';
                                        $ngayTaoFormatted = date("Y-m-d",strtotime($ngayTao));
                                        if (
                                            $maYeuCau != '' && $maDN != '' && $tenSan != '' && $soLuongSan != '' &&
                                            $gioMoCua != '' && $giaMacDinh != '' && $giaGioVang != '' && $diaChi != '' &&
                                            $tenChuSan != '' && $CCCD != ''&& $ngayTaoFormatted != '' && $trangThai != '' 
                                        ) {
                                            $name = $_FILES['myfile']['name'];
                                            $type = $_FILES['myfile']['type'];
                                            $tmp_name = $_FILES['myfile']['tmp_name'];
                                            
                                            if ($_FILES['myfile']['error'] === 0) {
                                            if (!empty($name)) {
                                                if ($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/jpg') {
                                                    $uniqueName = uniqid() . "_" . $name;
                                                    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "quanLySanCauLong-B2B-/html/assets/img/venues";
                                                    $target_path = $upload_dir . "/" . $uniqueName;
                                                    echo "Upload path: " . $target_path;
                                                    if (!is_dir($upload_dir)) {
                                                        mkdir($upload_dir, 0755, true);
                                                    }

                                                    // --- GỌI move_uploaded_file TRƯỚC ---
                                                    if (move_uploaded_file($tmp_name, $target_path)) {
                                                        $upload_result = "Upload thành công!";
                                                    } else {
                                                        $upload_result = "Upload thất bại!";
                                                    }

                                                    // --- SAU KHI upload thì xử lý CSDL ---
                                                    if ($upload_result === "Upload thành công!") {
                                                            // Thêm dữ liệu vào CSDL
                                                            $conn = new mysqli('localhost', 'cnm', '123', 'sancaulong');
                                                            $conn->set_charset("utf8");
                                                            if ($conn->connect_error) {
                                                                die("Connection failed: " . $conn->connect_error);
                                                            }

                                                            $tenanh = $uniqueName;
                                                            $str = "INSERT INTO yeucauhoatdong (    
                                                                maYeuCau, maDN, tenSan, soLuongSan, gioMoCua, giaMacDinh,
                                                                giaGioVang, diaChi, tenChuSan, hinhAnhSan , CCCD, ngayTao, trangThai
                                                            ) VALUES (
                                                                '$maYeuCau', '$maDN', N'$tenSan', '$soLuongSan', '$gioMoCua',
                                                                '$giaMacDinh', '$giaGioVang', N'$diaChi', N'$tenChuSan',N'$tenanh',
                                                                '$CCCD','$ngayTaoFormatted', N'$trangThai'
                                                            )";

                                                            if ($conn->query($str) === TRUE) {
                                                                if ($conn->affected_rows > 0) {
                                                                    echo "<script>alert('Gửi yêu cầu thành công!');</script>";
                                                                    echo '<script language="javascript">
                                                                        window.location="../doanhnghiep/view_dangKyHoatDong.php?id=' . $_REQUEST['id'] . '";
                                                                        </script>';
                                                                } else {
                                                                    echo "<script>alert('Không có yêu cầu nào được gửi!');</script>";
                                                                }
                                                            } else {
                                                                echo "<script>alert('Lỗi khi gửi yêu cầu: " . $conn->error . "');</script>";
                                                            }
                                                            $conn->close();
                                                        } else {
                                                            echo "<script>alert('Lỗi upload: " . $upload_result . "');</script>";
                                                        }
                                                    } else {
                                                        echo "<script>alert('Chỉ được upload ảnh JPEG, PNG hoặc JPG!');</script>";
                                                    }
                                                }
                                            } else {
                                                echo "<script>alert('Lỗi khi upload file: " . $_FILES['myfile']['error'] . "');</script>";
                                            }
                                        } else {
                                            echo "<script>alert('Thiếu thông tin hoặc biến maDN chưa được khởi tạo!');</script>";
                                        }

                                        break;
                                    }
                                }
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

    <div>
        <!-- <?php
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
        ?> -->

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