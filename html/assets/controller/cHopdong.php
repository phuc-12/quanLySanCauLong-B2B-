<?php

    include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mHopdong.php");

    class CHopDong
    {
        public function getAllHDBymaKH($maKH, $maSan)
        {
            $p = new mHopDong();
            $tblSCL = $p->SelectAllHDBymaKH($maKH, $maSan);
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

        public function getAllHDBymaSan($maSan)
        {
            $p = new mHopDong();
            $tblSCL = $p->SelectAllHDBymaSan( $maSan);
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

        public function getAllHD($maKH)
        {
            $p = new mHopDong();
            $tblSCL = $p->SelectAllHD($maKH);
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