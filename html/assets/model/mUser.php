<?php
    include_once('ketnoi.php');
    class mUser{
        private $host = 'localhost';
		private $username = 'cnm';
		private $password = '123';
		private $database = 'sancaulong';
        public function select01User($user,$pw){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM taikhoannguoidung where username='$user' and passwords = '$pw'";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        public function selectAllUser($username){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM taikhoannguoidung where username = '$username'" ;
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        
        public function connect()
		{
			$con = new mysqli($this->host, $this->username, $this->password, $this->database);
			
			if($con->connect_error) {
				die('Không thể kết nối CSDL: ' . $con->connect_error);
			}

			$con->set_charset("utf8"); // Thiết lập UTF-8 nếu cần
			return $con;
		}
        public function themxoasua($sql) {
            $con = $this->connect();  
            $result = mysqli_query($con, $sql);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        }


        public function laycot($sql)
		{
			$link = $this->connect();
			$ketqua = $link->query($sql);
			$trave = '';

			if($ketqua && $ketqua->num_rows > 0) {
				while($row = $ketqua->fetch_array()) {
					$trave = $row[0];
				}
			}
			return $trave;
		}
		//Count customer
		public function selectCountCus()
		{
			$p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "SELECT COUNT(*) as total FROM khachhang";
                $tblKH = $con->query($str);
                $result = $tblKH->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($con);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
		}
        //Count business
		public function selectCountBus()
		{
			$p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "SELECT COUNT(*) as total FROM doanhnghiep";
                $tblDN = $con->query($str);
                $result = $tblDN->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($con);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
		}
        //Count requirement
		public function selectCountReq()
		{
			$p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "SELECT COUNT(*) as total FROM yeucauhoatdong where trangThai='Chờ Phê Duyệt'";
                $tblDN = $con->query($str);
                $result = $tblDN->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($con);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
		}
		public function selectCountReqAccept()
		{
			$p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "SELECT COUNT(*) as total FROM yeucauhoatdong where trangThai='Phê Duyệt'";
                $tblDN = $con->query($str);
                $result = $tblDN->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($con);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
		}
		public function selectCountReqRefuse()
		{
			$p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "SELECT COUNT(*) as total FROM yeucauhoatdong where trangThai='Từ Chối'";
                $tblDN = $con->query($str);
                $result = $tblDN->fetch_assoc(); // Lấy kết quả đếm
                $p->dongketnoi($con);
                return $result['total']; // Trả về số lượng
            } else {
                return false;
            }
		}
        //customer top 5
        public function SelectAllKHTop5() {
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "select * from khachhang limit 5";
                $tblKH = $con->query($str);
                $p->dongketnoi($con);
                return $tblKH;
            }else{
                return false;
            }
        }
        //business top 5
        public function SelectAllDNTop5() {
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "select * from doanhnghiep limit 5";
                $tblDN = $con->query($str);
                $p->dongketnoi($con);
                return $tblDN;
            }else{
                return false;
            }
        }
        //requirement
        public function SelectAllReq() {
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "select * from yeucauhoatdong where trangThai='Chờ Phê Duyệt'";
                $tblReq = $con->query($str);
                $p->dongketnoi($con);
                return $tblReq;
            }else{
                return false;
            }
        }
        //accept
        public function SelectAllReqAccept() {
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "select * from yeucauhoatdong where trangThai='Phê Duyệt'";
                $tblReq = $con->query($str);
                $p->dongketnoi($con);
                return $tblReq;
            }else{
                return false;
            }
        }
        //accept
        public function SelectAllReqRefuse() {
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset('utf8');
            if($con){
                $str = "select * from yeucauhoatdong where trangThai='Từ Chối'";
                $tblReq = $con->query($str);
                $p->dongketnoi($con);
                return $tblReq;
            }else{
                return false;
            }
        }
        public function SelectAllLKHByIDKH($txt)
		{
			$p =  new clsKetNoi();
			$con = $p->moketnoi();
			if($con)
			{
                $str = "SELECT loaiKH FROM khachhang WHERE maKH = '$txt'";
				$result = $con->query($str);
				$p->dongketnoi($con);
				return $result;
			}
			else
			{
				return false;
			}
		}
        
    }

?>