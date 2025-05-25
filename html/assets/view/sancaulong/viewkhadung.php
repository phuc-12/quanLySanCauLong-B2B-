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
                            <td align="center">'.$dem.'</td>
                            <td align="center">'.$r['start_time'].'</td>
                            <td align="center">'.$r['end_time'].'</td>
                            <td align="center">'.$r['gia'].'.000</td>
                            
                        </tr>
                    </form>';

                    $dem++;
                }
            }
        }
    
    

?>