<?php
    include_once('ketnoi.php');
    
    class mRegiter{
        public function mRegister1User($username,$pw,$email,$trangthai,$loaiND,$sdt){
            $p = new clsKetNoi;
            $con = $p -> moketnoi();
            $loaiND = 1;
            $trangthai = 1;
            // $pw = MD5($pw);
            $sql = "INSERT INTO taikhoannguoidung (`username` ,`passwords` ,`email` ,`trangThai` ,`loaiNguoiDung` ,`soDienThoai`) VALUES ('$username', '$pw', '$email', '$trangthai', '$loaiND', '$sdt')";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
            
        }
        
    }

?>