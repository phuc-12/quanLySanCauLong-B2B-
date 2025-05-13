<?php
    include_once("ketnoi.php");
	class tmdt extends clsketnoi
	{
		public function SelectCot($sql)
		{
			$conn=$this->moketnoi();
			$ketqua = $conn->query($sql);
            $this->dongketnoi($conn);
			$i = mysqli_num_rows($ketqua);
			$trave = '';
			if($i>0)
			{
				
				while($row=mysqli_fetch_array($ketqua))
				{
					$gt = $row[0];
					$trave =$gt;
					
				}
				
			}
			else 
			{
				echo "Không có kết quả";
			}
			return $trave;
				
		}
	}
?>