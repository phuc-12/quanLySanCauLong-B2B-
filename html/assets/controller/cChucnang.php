<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mChucnang.php");

    class chucnang
    {
        public function getCot($sql)
        {
            $p = new tmdt();
            $trave = $p->SelectCot($sql);
            if($trave)
            {
                if($trave->num_rows>0)
                {
                    return $trave;
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