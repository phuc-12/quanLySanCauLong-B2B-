<?php

    include_once("../../controller/cUser.php");
    $p = new CUser();
    $tblKH = $p->getALLKHTop5();
	if (!$tblKH) {
		echo 'Không kết nối được';
	} elseif ($tblKH == -1) {
		echo 'Chưa có dữ liệu khách hàng';
	} else {
        $dem=1;
        echo '<table class="table table-striped" style="background-color: white; ">
                <thead class="table-dark">
                    <tr style="text-align: center;">
						<th>STT</th>
						<th>Tên Khách Hàng</th>
						<th>Điện Thoại</th>
						<th>Email</th>
						<th>Loại Khách Hàng</th>
						<th>Hành Động</th>
						
					</tr>
				</thead>
                <tbody>';
        while ($r = $tblKH->fetch_assoc()) {
            echo '<tr style="text-align: center;">';
            echo ' <td style="text-decoration:none; color: black;">'.$dem.'</td>';
            echo ' <td style="text-decoration:none; color: black;"> '.$r['tenKH'].'</td>';
            echo ' <td style="text-decoration:none; color: black;"> '.$r['soDienThoai'].'</td>';
            echo ' <td style="text-decoration:none; color: black;"> '.$r['email'].'</td>';

            $rs = $p->GetLKHByIDKH($r['maKH']);
                if ($rs && $rs->num_rows > 0) {
                    $row = $rs->fetch_assoc();
                         echo ' <td style="text-decoration:none; color: black;">'.$row['loaiKH'].'</td>';
                } else {
                        echo ' <td style="text-decoration:none; color: black;">Không xác định</td>';
                }
            echo ' <td style="text-decoration:none; color: black;">
                <form method="post" action="" onsubmit="return confirmDelete();" style="float: right; padding-right: 20px;">
                    <input type="hidden" name="id" value="'.$r['maKH'].'">
                    <input type="submit" name="btnxoa" value="XÓA" class="btn btn-danger btn-sm" style="padding: 10px 0;height: 45px; width: 120px; background-color: red; color: white; 
                    text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">
                </form>
            </td>'; 
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>
