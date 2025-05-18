<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mRegister.php");
    // include_once('../model/mUser.php');
    class cRegister{
        public function cRegister1User($username, $tenKH, $pw, $email, $loaiND, $sdt, $diaChi = "") {
            $pp = new mRegiter();
            $ktra = $pp->selectAllUser($username);

            if ($ktra == 1) {
                $idND = $pp->mRegister1User($username, $pw, $email, $loaiND, $sdt);

                if ($idND > 0) {
                    if ($loaiND == 1) {
                        // Là khách hàng
                        $pp->mRegister1KH($tenKH, $sdt, $email, $idND);
                    } elseif ($loaiND == 2) {
                        // Là doanh nghiệp
                        $pp->mRegister1DN($tenKH, $diaChi, $sdt, $email, $idND);
                    }

                    echo "<script>alert('Đăng ký thành công!'); window.location.href='login.php';</script>";
                } else {
                    echo "<script>alert('Lỗi khi tạo tài khoản người dùng.');</script>";
                }
            } else {
                echo "<script>alert('Tên đăng nhập đã tồn tại!');</script>";
                return -1;
            }
        }

        
        
        public function getTKND($username,$pass)
        {
            $p = new mRegiter();
            $tblTKND = $p->selectAllUser($username,$pass);
            if($tblTKND)
            {
                if($tblTKND->num_rows>0)
                {
                    return $tblTKND;
                } 
                else 
                {
                    return -1;
                }
            } 
            else 
            {
                return false;
            }
        }
}

?>