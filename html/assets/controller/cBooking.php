<?php

    include_once($_SERVER['DOCUMENT_ROOT'] . "/quanLySanCauLong-B2B-/html/assets/model/mBooking.php");

    class CBooking
    {
        public function getBookingBymaKH($maKH)
        {
            $p = new mBooking();
            $tblBook = $p->SelectAllBookingBymaKH($maKH);
            if($tblBook)
            {
                if($tblBook->num_rows>0)
                {
                    return $tblBook;
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