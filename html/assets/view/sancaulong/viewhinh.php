<?php

    include(__DIR__ . '/../../../controller/cSanCauLong.php');
    $p=new CSanCauLong();
    $maSan = $_REQUEST['maSan'];
    $tblSCL = $p->getSCLBymaSan($maSan);

    if(!$tblSCL)
    {
        echo "Khong the ket noi";
    }
    elseif($tblSCL == -1)
    {
        echo "Chua co du lieu";
    }
    else 
    {
        while($r = $tblSCL->fetch_assoc())
        {
            echo '
            <div class="main-gallery-slider owl-carousel owl-theme">
                <div class="gallery-widget-item">
				    <a href="assets/img/venues/'.$r['hinhAnh'].'" data-fancybox="gallery1">
						<img class="img-fluid" alt="Image" src="assets/img/venues/'.$r['hinhAnh'].'">
					</a>
				</div>	
            </div>			
			<div class="showphotos corner-radius-10">
				<a href="assets/img/venues/'.$r['hinhAnh'].'" data-fancybox="gallery1"><i class="fa-regular fa-images"></i>More Photos</a>
			</div>	
            ';
        }
    }

?>