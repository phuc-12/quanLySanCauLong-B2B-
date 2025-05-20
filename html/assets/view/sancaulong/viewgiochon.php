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
            echo "Chua co du lieu";
        }
        else 
        {
            $dem = 1;
            while($r = $tblBook->fetch_assoc())
            {
                echo '
                    <tr>
                        <td style="border: 1px solid grey" align="center">'.$dem.'</td>
                        <td style="border: 1px solid grey" align="center">'.$r['start_time'].'</td>
                        <td style="border: 1px solid grey" align="center">'.$r['end_time'].'</td>
                        <td style="border: 1px solid grey" align="center">'.$r['gia'].'</td>
                        <td style="border: 1px solid grey" align="center">
                            <input type="submit" value="Xóa" style="height: 30px;width:50px;">
                        </td>
                    </tr>
                ';
                $dem++;
            }
        }
    
    

?>