<?php
include_once('../model/mUser.php');
class CUser
{
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
      
        
}
?>