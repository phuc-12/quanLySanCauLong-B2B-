<?php


    include_once(__DIR__ . '/../../../controller/cHopDong.php');
    $p=new CHopDong();

    $maSan = $_SESSION['maSan'];
    $layid = $_REQUEST['id'];
    $tblBook = $p->getAllHDBymaSan($maSan);
    
        if(!$tblBook)
        {
            echo "Khong the ket noi";
        }
        elseif($tblBook == -1)
        {
            echo '<span style="color:red;">Chưa có hợp đồng dài hạn</span>';
        }
        else 
        {
            echo '<table class="table table-striped" style="background-color: white;">
                <thead class="table-dark">
                    <tr style="text-align:center;">
                        <th>STT</th>
                        <th>Mã Hợp Đồng</th>
                        <th>Bắt Đầu</th>
                        <th>Kết Thúc</th>
                        <th>Tên Khách Hàng</th>
                        <th>Số Lượng Sân</th>
                        <th>Lịch Tuần</th>
                        <th>Trạng Thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>';
            $dem = 1;
            $now = new DateTime();
            
            while($r = $tblBook->fetch_assoc())
            {
                $slotDateTime = new DateTime("{$r['ngayDat']} {$r['start_time']}");
                $isPast = $slotDateTime < $now;
                if($isPast)
                {
                    
                }
                else
                {
                    echo '<form method="POST" action="">
                        <tr>
                            <td align="center" style="border: solid 1px black;">'.$dem.'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['maHopDong'].'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['thoiGianBatDau'].'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['thoiGianKetThuc'].'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['tenKH'].'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['soLuongSan'].' Sân</td>
                            <td align="center" style="border: solid 1px black;">'.$r['ghiChu'].'</td>
                            <td align="center">
                                <input type="text" name="trangThai" id="trangThai" value="'.$r['trangThai'].'" style="width:50px; text-align:center;">
                            </td>
                            <td align="center">
                                <input type="hidden" name="maHopDong" value="'.$r['maHopDong'].'">
                                <button type="submit" name="btn_cnhd['.$r['maHopDong'].']" class="btn btn-danger btn-sm" style="padding: 10px 0;height: 45px; width: 100px; background-color: red; color: white; 
                                text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block" >Cập Nhật</button>
                            </td>
                        </tr>
                    </form>';
                    include_once(__DIR__ . '/../../../model/mUser.php');
                    $k = new mUser();
                    
                    if (isset($_POST['btn_cnhd']) && isset($_POST['maHopDong'])) {
                        $maHopDong = $_POST['maHopDong'];
                        $trangThai = $_REQUEST['trangThai'];
                    if ($k->themxoasua("UPDATE hopdong SET trangThai = '$trangThai' WHERE maHopDong = '$maHopDong' LIMIT 1") == 1) {
                            echo '<script>window.location.href="view_hopdong.php?id='.$layid.'";</script>';
                            exit();
                        }
                    }
                    $dem++;
                }
            }
        }
    
    

?>