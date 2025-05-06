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
        public function themxoasua($sql)
		{
			$link = $this->connect();
			if($link->query($sql) === TRUE) {
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
    }

?>