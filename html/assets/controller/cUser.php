<?php
include_once('../model/mUser.php');
class CUser
{
    public function get01User($user,$pw)
        {
            // $pw = md5($pw);
            $p = new mUser();
            $tbl = $p -> select01User($user,$pw);
            if(mysqli_num_rows($tbl) > 0)
            {
                while($r=mysqli_fetch_assoc($tbl))
                {
                   
                    $_SESSION["dn"]=$r["id_quyen"];
                    $_SESSION['user_name'] = $r['HoTen'];
                    $_SESSION['id'] = $r['IDNguoiDung'];
                }
                $phanquyen = $_SESSION['dn'];
                if($phanquyen == 1){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Khách Hàng !")</script>';
                    
                    header('refresh:0.5,url=index.php');
                }
                else if($phanquyen == 2){
                    echo '<script>alert("Đăng nhập thành công. Xin chào Doanh Nghiệp !")</script>';
                    header('refresh:0.5,url=user-dashboard.html');
                }
                else{
                    echo '<script>alert("Đăng nhập thành công. Xin chào Quản Lý  !")</script>';
                    header('refresh:0.5,url=admin-dashboard.php');
                }
                
            }
            else
            {
                echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác !")</script>';
                header('refresh:0.5,url=index.php?dangnhap');
            }
            
        }
        public function logout(): void
        {
            session_start();
            session_destroy();
            header('Location: login.php');
            exit();
        }
        
        // Phương thức kiểm tra đăng nhập
        public function checkLogin(): bool
        {
            session_start();
            if(isset($_SESSION['id']) && isset($_SESSION['dn'])) {
                return true;
            }
            return false;
        }
}
?>