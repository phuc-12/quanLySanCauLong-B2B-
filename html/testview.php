<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="section featured-venues">
			<div class="container">
				<div class="section-heading aos" data-aos="fade-up">
					<h2><span>Địa Điểm</span> Nổi Bật</h2>
					<p class="sub-title">Các địa điểm thể thao tiên tiến cung cấp cơ sở vật chất mới nhất, môi trường năng động và độc đáo để nâng cao hiệu suất chơi cầu lông.</p>
				</div>
				<div class="row">
			        <div class="featured-slider-group ">
			        	<div class="owl-carousel featured-venues-slider owl-theme">
						    <?php
                                include("assets/view/sancaulong/sancaulong.php");
                            ?>  
						</div>	
					</div>
				</div>

				<!-- View More -->
				<div class="view-all text-center aos" data-aos="fade-up">
					<a href="listing-grid.php" class="btn btn-secondary d-inline-flex align-items-center">Xem tất cả<span class="lh-1"><i class="feather-arrow-right-circle ms-2"></i></span></a>
				</div>
				<!-- View More -->

			</div>
		</section>
</body>
</html>