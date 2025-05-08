<?php
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('Asia/Ho_Chi_Minh');

include ("assets/model/ketnoi.php");
$p=new clsketnoi();

$maSan = $_POST['maSan'];
$slot_id = $_POST['time_slot_id'];
$ngayDat = $_POST['ngayDat'];

// Kiểm tra trùng lịch
$conn= $p->moketnoi();
$conn->set_charset("utf8mb4");
$stmt = $conn->prepare("SELECT COUNT(*) as count FROM bookings WHERE maSan = ? AND time_slot_id = ? AND ngayDat = ?");
$stmt->bind_param("iis", $maSan, $slot_id, $ngayDat);
$stmt->execute();
$stmt->bind_result($count); // Gán kết quả vào biến $count
$stmt->fetch(); // Lấy dữ liệu
$stmt->close();

if ($count > 0) {
    echo "Khung giờ đã được đặt.";
} else {
    $ngayTao = date('Y-m-d H:i:s');

    $insert = $conn->prepare("INSERT INTO bookings (maSan, time_slot_id, ngayDat, status, ngayTao) VALUES (?, ?, ?, 'booked', ?)");
    $insert->bind_param("iiss", $maSan, $slot_id, $ngayDat, $ngayTao);
    $insert->execute();

    echo "Đặt sân thành công lúc $ngayTao!";
}

echo '<br><a href="venue-details.php?maSan=' . $maSan . '">Quay lại</a>';
?>
