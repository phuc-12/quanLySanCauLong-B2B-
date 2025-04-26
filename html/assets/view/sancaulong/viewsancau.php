<?php

    include(__DIR__ . '/../../../controller/cSanCauLong.php');
    $p=new CSanCauLong();
    $tblSCL = $p->getAllSCL();

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
                <div class="featured-venues-item aos" data-aos="fade-up">
                    <div class="listing-item mb-0">										
                        <div class="listing-img">
                            <a href="venue-details.php?maSan='.$r['maSan'].'">
                                <img src="assets/img/venues/'.$r['hinhAnh'].'" alt="Venue">
                            </a>
                            <div class="fav-item-venues">
                                <span class="tag tag-blue">Đang Hoạt Động</span>		
                                <h5 class="tag tag-primary">'.$r['giaMacDinh'].'<span>/Giờ</span></h5>
                            </div>
                        </div>										
                        <div class="listing-content">
                            <div class="list-reviews">							
                                <div class="d-flex align-items-center">
                                    <span class="rating-bg">4.2</span><span>300 Reviews</span> 
                                </div>
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>	
                            <h3 class="listing-title">
                                <a href="venue-details.php?maSan='.$r['maSan'].'">'.$r['tenSan'].'</a>
                            </h3>
                            <div class="listing-details-group">
                                <p>'.$r['moTa'].'</p>
                                <ul>
                                    <li>
                                        <span>
                                            <i class="feather-map-pin"></i>'.$r['diaChi'].'
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="feather-calendar"></i>Giờ mở cửa: <span class="primary-text">'.$r['gioMoCua'].'</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-button">
                                <div class="listing-venue-owner">											
                                </div>
                                <a href="venue-details.php" class="user-book-now"><span><i class="feather-calendar me-2"></i></span>Đặt Ngay</a>
                            </div>	
                        </div>
                    </div>
				</div>
            ';
        }
    }

?>