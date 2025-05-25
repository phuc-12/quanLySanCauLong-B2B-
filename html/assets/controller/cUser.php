<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mUser.php");
class CUser
{
    //count customer
    public function getCountCus()
        {
            $p = new mUser();
            $tblKH = $p->selectCountCus();
            if($tblKH){ 
                if($tblKH>0){
                    return $tblKH;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    //count business
    public function getCountBus()
        {
            $p = new mUser();
            $tblDN = $p->selectCountBus();
            if($tblDN){ 
                if($tblDN>0){
                    return $tblDN;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    //count requirement
    public function getCountReq()
        {
            $p = new mUser();
            $tblReq = $p->selectCountReq();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    public function getCountReqAccept()
        {
            $p = new mUser();
            $tblReq = $p->selectCountReqAccept();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    public function getCountReqRefuse()
        {
            $p = new mUser();
            $tblReq = $p->selectCountReqRefuse();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    //cus top5
    public function getALLKHTop5()
        {
            $p = new mUser();
            $tblKH = $p->SelectAllKHTop5();
            if($tblKH){ 
                if($tblKH>0){
                    return $tblKH;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    //bus top5
    public function getALLDNTop5()
        {
            $p = new mUser();
            $tblDN = $p->SelectAllDNTop5();
            if($tblDN){ 
                if($tblDN>0){
                    return $tblDN;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    //requirement
    public function getALLReq()
        {
            $p = new mUser();
            $tblReq = $p->SelectAllReq();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    public function getReqAccept()
        {
            $p = new mUser();
            $tblReq = $p->SelectAllReqAccept();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    public function getReqRefuse()
        {
            $p = new mUser();
            $tblReq = $p->SelectAllReqRefuse();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    
    public function GetLKHByIDKH($txt)
		{
			$p = new mUser();
			$result = $p->SelectAllLKHByIDKH($txt);
			if($result)
			{
				if($result->num_rows>0)
				{
					return $result;
				}
				else{
					return -1;//khong co du lieu trong bang
				}
			}
			else
			{
				return false;
			}
		}   
    public function timKiem($keyword) {
        $p = new mUser();

        // Call the model's search function and get the results
        return $p->timKiemSan($keyword); // Call the method directly on $p
    
    }
    ///doanh nghiep
    public function getALLReqDN()
        {
            $p = new mUser();
            $tblReq = $p->SelectAllReqDN();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
    public function getCountALLReqDN()
        {
            $p = new mUser();
            $tblReq = $p->selectCountReqDN();
            if($tblReq){ 
                if($tblReq>0){
                    return $tblReq;
                }else{
                    return -1; //không có dữ liệu trong bảng
                }
            }else{
                return false;
            }
            
        }
}
?>