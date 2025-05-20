<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mChucnang.php");

    class chucnang
    {
        public function getCot($sql)
        {
            $p = new tmdt();
            $trave = $p->SelectCot($sql);
            
        }
    }

?>