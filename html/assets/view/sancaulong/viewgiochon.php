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
                        <td align="center">'.$r['gia'].'</td>
                        <td align="center">
                            <input type="hidden" name="maDat" value="'.$r['maDat'].'">
                            <button type="submit" name="btn_xoa['.$r['maDat'].']" class="btn btn-danger btn-sm" style="padding: 10px 0;height: 45px; width: 50px; background-color: red; color: white; 
                            text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block" >XÓA</button>
                        </td>
                    </tr>
                </form>';

                $dem++;
            }
        }
    
    

?>