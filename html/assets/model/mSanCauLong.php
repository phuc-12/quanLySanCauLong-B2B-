<?php

    include_once("ketnoi.php");

    class mSanCauLong
    {
        public function SelectAllSCL()
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT * FROM thongtinsan ORDER BY maSan desc";
                $tblSCL = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblSCL;
            }
            else 
            {
                return false;
            }
        }

        public function SelectSCLBymaSan($maSan)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT * FROM thongtinsan WHERE maSan = '$maSan' LIMIT 1";
                $tblSCL = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblSCL;
            }
            else 
            {
                return false;
            }
        }
    }

?>