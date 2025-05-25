<?php

    include_once("ketnoi.php");

    class mHopDong
    {
        public function SelectAllHDBymaKH($maKH, $maSan)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT * FROM hopdong WHERE maKH = '$maKH' AND trangThai LIKE N'%duyệt%' AND maSan = '$maSan' ORDER BY maHopDong desc";
                $tblSCL = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblSCL;
            }
            else 
            {
                return false;
            }
        }

        public function SelectAllHD($maKH)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT * FROM hopdong h join thongtinsan t on h.maSan=t.maSan WHERE h.maKH = '$maKH' AND h.trangThai LIKE N'%duyệt%' ORDER BY h.maHopDong desc";
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