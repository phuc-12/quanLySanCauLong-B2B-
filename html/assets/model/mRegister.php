<?php
    include_once('ketnoi.php');
    
    class mRegiter{
        public function mRegister1User($username,$pw,$email,$loaiND,$sdt){
            $p = new clsKetNoi;
            $con = $p -> moketnoi();
            $trangthai = 1;
            // $pw = MD5($pw);      
            $sql = "INSERT INTO taikhoannguoidung (`username` ,`passwords` ,`email` ,`trangthai` ,`loainguoidung` ,`sodienthoai`) VALUES ('$username', '$pw', '$email', '$trangthai', '$loaiND', '$sdt')";
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