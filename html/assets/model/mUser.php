<?php
    include_once('ketnoi.php');
    class mUser{
        public function select01User($user,$pw){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM taikhoannguoidung where username='$user' and passwords = '$pw'";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        public function selectAllUser($loaiND){
            $p = new clsKetNoi();
            $con = $p -> moKetNoi();
            $sql = "SELECT * FROM taikhoannguoidung order by loaiNguoiDung='.$loaiND.' limit 1";
            $kq = mysqli_query($con,$sql);
            $p -> dongKetNoi($con);
            return $kq;
        }
        
    }

?>