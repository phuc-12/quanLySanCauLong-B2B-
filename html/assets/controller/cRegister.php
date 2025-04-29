<?php
    include_once('../model/mRegister.php');
    include_once('../model/mUser.php');
    class cRegister{
        public function cRegister1User($username,$pw,$email,$trangthai,$loaiND,$sdt){
            $pp = new mUser;
            $ktra = $pp -> selectAllUser();
            $arr = array();
            foreach($ktra as $i){
                $arr[] = $i['username'];
            }
            if(in_array($username,$arr)){
                echo '<script>alert("Tên đăng nhập đã tồn tại !")</script>';
            }else{
                $p = new mRegiter;
                $con = $p -> mRegister1User($username,$pw,$email,$trangthai,$loaiND,$sdt);
                if($con){
                        echo '<script>alert("Đăng ký thành công ! Xin chào '.$username.'")</script>';
                        echo '<script>alert("Bạn đã có tài khoản. Đăng nhập !")</script>';
                        header('refresh:0,url="?dangnhap');       
                }else{
                        echo '<script>alert("Đăng ký không thành công !")</script>';
                }
            }
            
    }}

?>