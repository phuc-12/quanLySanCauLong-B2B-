<?php


    include_once(__DIR__ . '/../../../controller/cBooking.php');
    $p=new CBooking();
    $maKH = $_SESSION['maKH'];
    $tblBook = $p->getBookingBymaKH($maKH);
    
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
            while($r = $tblBook->fetch_assoc())
            {
                echo '<form method="POST" action="">
                    <tr>
                        <td align="center">'.$dem.'</td>
                        <td align="center">'.$r['start_time'].'</td>
                        <td align="center">'.$r['end_time'].'</td>
                        <td align="center">'.$r['gia'].'.000</td>
                        
                    </tr>
                </form>';

                $dem++;
            }
        }
    
    

?>