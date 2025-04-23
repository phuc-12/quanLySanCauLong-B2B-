<?php

    include($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mSanCauLong.php");

    class CSanCauLong
    {
        public function getAllSCL()
        {
            $p = new mSanCauLong();
            $tblSCL = $p->SelectAllSCL();
            if($tblSCL)
            {
                if($tblSCL->num_rows>0)
                {
                    return $tblSCL;
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