<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mLogin.php");

    class mylogin 
    {
        public function getTKND($user,$pass)
        {
            $p = new mTKND();
            $tblTKND = $p->SelectTKND($user,$pass);
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