<?php

    include_once("../../controller/cUser.php");
    $p = new CUser();
    $tblDN = $p->getALLDNTop5();
	if (!$tblDN) {
		echo 'Không kết nối được';
	} elseif ($tblDN == -1) {
		echo 'Chưa có dữ liệu doanh nghiệp';
	} else {
        $dem=1;
        echo '<table class="table table-striped" style="background-color: white; ">
                <thead class="table-dark">
                    <tr style="text-align: center;">
						<th>STT</th>
						<th>Tên Doanh Nghiệp</th>
						<th>Điện Thoại</th>
						<th>Địa chỉ</th>
						<th>Email</th>
						<th>Hành Động</th>
					</tr>
				</thead>
                <tbody>';
        while ($r = $tblDN->fetch_assoc()) {
            echo '<tr style="text-align: center;">';
			echo ' <td style="text-decoration:none; color: black;">'.$dem.'</td>';
            echo ' <td style="text-decoration:none; color: black;">'.$r['tenDN'].'</td>';
            echo ' <td style="text-decoration:none; color: black;"> '.$r['soDienThoai'].'</td>';
            echo ' <td style="text-decoration:none; color: black;"> '.$r['diaChi'].'</td>';
            echo ' <td style="text-decoration:none; color: black;"> '.$r['email'].'</td>';
			echo '<td >
                <form method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="id" value="'.$r['maDN'].'">
                    <input type="submit" name="btnxoa" value="XÓA" class="btn btn-danger btn-sm" style="padding: 10px 0;height: 45px; width: 120px; background-color: red; color: white; text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">
					<a href="../chucnang_admin/view_updateDN.php?id='.$layid.'" style="padding: 10px 0;height: 45px; width: 120px; background-color: #097E52; color: white; text-align: center; border-radius: 5px; text-decoration: none; border: 0; font-weight: 700; display: inline-block;">CHI TIẾT  
				</form>  
                </td>';
            echo '</tr>';
            $dem++;
        }
        echo '</tbody>';
        echo '</table>';
    }


?>
