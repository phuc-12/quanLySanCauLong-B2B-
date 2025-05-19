<?php
    include_once('ketnoi.php');
    
    class mRegiter{
        public function mRegister1User($username, $pw, $email, $loaiND, $sdt) {
            $p = new clsKetNoi;
            $con = $p->moketnoi();
            // $pw = md5($pw);
            $trangthai = 1;
        
            $sql = "INSERT INTO taikhoannguoidung (`username`, `passwords`, `email`, `trangthai`, `loainguoidung`, `sodienthoai`)
                    VALUES ('$username', '$pw', '$email', '$trangthai', '$loaiND', '$sdt')";
            $kq = mysqli_query($con, $sql);
            
            if ($kq) {
                $last_id = mysqli_insert_id($con); // lấy id vừa thêm
            } else {
                $last_id = 0; // hoặc xử lý lỗi nếu cần
            }
            
            $p->dongKetNoi($con);
            return $last_id;
        }
        
        public function mRegister1KH($tenKH, $sdt, $email, $idnguoidung) {
            $p = new clsKetNoi;
            $con = $p->moketnoi();
            $loaiKH = 'Vãng lai';
        
            $sql = "INSERT INTO khachhang (`tenKH`, `loaiKH`, `soDienThoai`, `email`, `idnguoidung`)
                    VALUES ('$tenKH', '$loaiKH', '$sdt', '$email', '$idnguoidung')";
            $kq = mysqli_query($con, $sql);
        
            $p->dongKetNoi($con);
            return $kq;
        }
        public function mRegister1DN($tenDN,$diaChi, $sdt, $email, $idnguoidung) {
            $p = new clsKetNoi;
            $con = $p->moketnoi();
            $sql = "INSERT INTO doanhnghiep (`tenDN`, `diaChi`, `soDienThoai`, `email`, `idnguoidung`)
                    VALUES ('$tenDN', '$diaChi', '$sdt', '$email', '$idnguoidung')";
            $kq = mysqli_query($con, $sql);
        
            $p->dongKetNoi($con);
            return $kq;
        }
        
        
        public function selectAllUser($username){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM taikhoannguoidung where username = '$username' ";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            if($kq->num_rows>0)
            {
                return 0;
            }
            else 
            {
                return 1;
            }
        }
        public function selectAllKH($maKH){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM khachhang where maKH='$maKH'" ;
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            if($kq->num_rows>0)
            {
                return 0;
            }
            else 
            {
                return 1;
            }
        }
    }

?>