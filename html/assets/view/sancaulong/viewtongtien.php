<?php


    include_once(__DIR__ . '/../../../controller/cBooking.php');
    $p=new CBooking();
    $maKH = $_SESSION['maKH'];
    $tblBook = $p->getBookingBymaKH($maKH);
    
        if(!$tblBook)
        {
            echo "Không thể kết nối";
        }
        elseif($tblBook == -1)
        {
            echo '<span style="test: 50px;color:red"><b>TỔNG: 0đ</b></span>';
        }
        else 
        {
            $tongtien = 0;
            while($r = $tblBook->fetch_assoc())
            {
                $tongtien=$tongtien+$r['gia'];
            }
            echo '<span style="test: 50px;color:red"><b>TỔNG: '.$tongtien.'.000đ</b></span>';
            // $_SESSION['tongtien']=$tongtien*1000;
        }
    
    

?>