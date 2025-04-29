<?php

    include_once("ketnoi.php");

    class mTKND
    {
        public function SelectTKND($user,$pass)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT * FROM taikhoannguoidung WHERE username = '$user' AND passwords = '$pass' LIMIT 1";
                $tblTKND = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblTKND;
            }
            else 
            {
                return false;
            }
        }
    }
?>