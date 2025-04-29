<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mRegister.php");
    // include_once('../model/mUser.php');
    class cRegister{
        public function cRegister1User($username,$pw,$email,$loaiND,$sdt){
            $pp = new mRegiter();
            $ktra = $pp -> selectAllUser($username);

            if($ktra == 1)
            {
                $pp->mRegister1User($username,$pw,$email,$loaiND,$sdt);
                echo'<script language="javascript">
							window.location="login.php";
							</script>';
            }
            else 
            {
                return -1;
            }

            // $arr = array();
            // foreach($ktra as $i){
            //     $arr[] = $i['username'];
            // }
            // if(in_array($username,$arr)){
            //     echo '<script>alert("Tên đăng nhập đã tồn tại !")</script>';
            // }else{
            //     $p = new mRegiter;
            //     $con = $p -> mRegister1User($username,$pw,$email,$trangthai,$loaiND,$sdt);
            //     if($con){
            //             echo '<script>alert("Đăng ký thành công ! Xin chào '.$username.'")</script>';
            //             echo '<script>alert("Bạn đã có tài khoản. Đăng nhập !")</script>';
            //             header('refresh:0,url="?dangnhap');       
            //     }else{
            //             echo '<script>alert("Đăng ký không thành công !")</script>';
            //     }
            // }
            
    }}

?>