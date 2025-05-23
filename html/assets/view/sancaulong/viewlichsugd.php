<?php


    include_once(__DIR__ . '/../../../controller/cBooking.php');
    $p=new CBooking();
    $maKH = $_SESSION['maKH'];
    $tblBook = $p->getBookedBymaKH($maKH);
    
        if(!$tblBook)
        {
            echo "Khong the ket noi";
        }
        elseif($tblBook == -1)
        {
            echo '<span style="color:red;">Chưa chọn giờ đặt</span>';
        }
        else 
        {
            $dem = 1;
            echo '<table class="table table-striped" style="background-color: white;">
                    <thead class="table-dark">
                        <tr style="text-align:center;">
                            <th>STT</th>
                            <th>Mã Đặt</th>
                            <th>Tên Sân</th>
                            <th>Bắt Đầu</th>
                            <th>Kết Thúc</th>
                            <th>Ngày Đặt</th>
                            <th>Giá</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>';
            while($r = $tblBook->fetch_assoc())
            {
                
                echo '<tr style="text-align: center">';
                echo '<td>'.$dem.'</td>';
                echo '<td>'.$r['maDat'].'</td>';
                echo '<td>'.$r['tenSan'].'</td>';
                echo '<td>'.$r['start_time'].'</td>';
                echo '<td>'.$r['end_time'].'</td>';
                echo '<td>'.$r['ngayTao'].'</td>';
                echo '<td>'.$r['gia'].'</td>';
                echo '<td>'.$r['status'].'</td>';
            echo '</tr>';

                $dem++;
            }
            echo '</tbody>';
            echo '</table>';
        }
    
    

?>