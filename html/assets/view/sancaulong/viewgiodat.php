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
                        <td align="center">
                            <input type="text" name="soLuongSan" id="soLuongSan" value="'.$r['soLuong'].'" style="width:50px; text-align:center;"> sân
                        </td>
                        <td align="center">
                            <input type="hidden" name="maDat" value="'.$r['maDat'].'">
                            <button type="submit" name="btn_cn['.$r['maDat'].']" class="btn btn-danger btn-sm" style="padding: 10px 0;height: 45px; width: 50px; background-color: red; color: white; 
                            text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block" >Chốt</button>
                        </td>
                        
                    </tr>
                </form>';
                    include_once(__DIR__ . '/../../../model/mUser.php');
                    $k = new mUser();
                    
                    if (isset($_POST['btn_cn']) && isset($_POST['maDat'])) {
                        $maDat = $_POST['maDat'];
                        $soLuong = $_REQUEST['soLuongSan'];
                    if ($k->themxoasua("UPDATE bookings SET soLuong = '$soLuong' WHERE maDat = '$maDat' LIMIT 1") == 1) {
                            echo '<script>window.location.href="court-payment.php?maKH='.$layid.'";</script>';
                            exit();
                        }
                    }
                // $_REQUEST['soLuong']=$r['soLuong'];
                $dem++;
            }
        }
    
    

?>