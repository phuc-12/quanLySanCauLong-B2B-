<?php
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('Asia/Ho_Chi_Minh');

include ("assets/model/ketnoi.php");
$p=new clsketnoi();

$maSan = $_POST['maSan'];
$slot_id = $_POST['time_slot_id'];
$ngayDat = $_POST['ngayDat'];
$maKH = $_POST['maKH'];

include_once("assets/controller/cChucnang.php");
$k=new tmdt();
$startTime = $k->SelectCot("SELECT start_time FROM time_slots WHERE id = '$slot_id' LIMIT 1");

if ($startTime >= '05:00:00' && $startTime < '16:00:00') {
    $gia=$k->SelectCot("SELECT giaMacDinh FROM thongtinsan WHERE maSan = '$maSan' LIMIT 1");
} elseif ($startTime >= '16:00:00' && $startTime <= '23:59:59') {
    $gia=$k->SelectCot("SELECT giaGioVang FROM thongtinsan WHERE maSan = '$maSan' LIMIT 1");
}

// Kiểm tra trùng lịch
$conn= $p->moketnoi();
$conn->set_charset("utf8mb4");
$stmt = $conn->prepare("SELECT COUNT(*) as count FROM bookings WHERE maSan = ? AND time_slot_id = ? AND ngayDat = ? AND maKH = ? AND gia = ?");
$stmt->bind_param("iisid", $maSan, $slot_id, $ngayDat, $maKH, $gia);
$stmt->execute();
$stmt->bind_result($count); // Gán kết quả vào biến $count
$stmt->fetch(); // Lấy dữ liệu
$stmt->close();

if ($count > 0) {
    echo "Khung giờ đã được đặt.";
} else {
    $ngayTao = date('Y-m-d H:i:s');

    $insert = $conn->prepare("INSERT INTO bookings (maSan, time_slot_id, ngayDat, status, ngayTao, maKH, gia) VALUES (?, ?, ?, 'booking', ?,?,?)");
    $insert->bind_param("iissid", $maSan, $slot_id, $ngayDat, $ngayTao, $maKH, $gia);
    $insert->execute();

    echo '<script>window.location="venue-details.php?maSan=' . $maSan . '";</script>';
}

// echo '<br><a href="venue-details.php?maSan=' . $maSan . '">Quay lại</a>';

?>
