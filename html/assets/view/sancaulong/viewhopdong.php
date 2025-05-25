<?php


    include_once(__DIR__ . '/../../../controller/cHopDong.php');
    $p=new CHopDong();
    $maKH = $_SESSION['maKH'];
    $maSan = $_SESSION['maSan'];
    $tblBook = $p->getAllHDBymaKH($maKH, $maSan);
    
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
                            <td align="center" style="border: solid 1px black;">'.$r['thoiGianBatDau'].'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['thoiGianKetThuc'].'</td>
                            <td align="center" style="border: solid 1px black;">'.$r['soLuongSan'].' Sân</td>
                            <td align="center" style="border: solid 1px black;">'.$r['ghiChu'].'</td>
                        </tr>
                    </form>';

                    $dem++;
                }
            }
        }
    
    

?>