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