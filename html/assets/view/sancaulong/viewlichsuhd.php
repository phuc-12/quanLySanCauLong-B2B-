<?php
    include_once(__DIR__ . '/../../../controller/cHopDong.php');
    $p = new CHopDong();
    $maKH = $_SESSION['maKH'];
    $tblBook = $p->getAllHD($maKH);

    if (!$tblBook) {
        echo "Không thể kết nối";
    } elseif ($tblBook == -1) {
        echo '<span style="color:red;">Chưa có giờ đặt</span>';
    } else {
        $dem = 1;
        echo '<table class="table table-striped" style="background-color: white;">
                <thead class="table-dark">
                    <tr style="text-align:center;">
                        <th>STT</th>
                        <th>Mã Hợp Đồng</th>
                        <th>Tên Sân</th>
                        <th>Bắt Đầu</th>
                        <th>Kết Thúc</th>
                        <th>Ngày Đăng Ký</th>
                        <th>Trạng Thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>';

        while ($r = $tblBook->fetch_assoc()) {
            echo '<tr style="text-align: center">';
            echo '<td>' . $dem . '</td>';
            echo '<td>' . $r['maHopDong'] . '</td>';
            echo '<td>' . $r['tenSan'] . '</td>';
            echo '<td>' . $r['thoiGianBatDau'] . '</td>';
            echo '<td>' . $r['thoiGianKetThuc'] . '</td>';
            echo '<td>' . $r['ngayTao'] . '</td>';
            echo '<td>Đang Hoạt Động</td>';
            echo '
                <td align="center">
                    <form method="POST" action="" onsubmit="return confirm(\'Bạn có chắc chắn muốn hủy giao dịch này?\')">
                        <input type="hidden" name="maDat" value="' . $r['maHopDong'] . '">
                        <button type="submit" name="btn_xoa[' . $r['maHopDong'] . ']" class="btn btn-danger btn-sm"
                            style="padding: 10px 0;height: 45px; width: 50px; background-color: red; color: white; 
                            text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block">
                            Hủy
                        </button>
                    </form>
                </td>
            ';
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }
?>
