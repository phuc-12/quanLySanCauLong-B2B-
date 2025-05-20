<?php

    include_once("ketnoi.php");

    class mBooking
    {
        public function SelectAllBookingBymaKH($maKH)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT t.start_time, t.end_time, b.ngayTao, b.gia FROM bookings b join time_slots t on b.time_slot_id=t.id WHERE maKH = '$maKH' ORDER BY maDat asc";
                $tblBook = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblBook;
            }
            else 
            {
                return false;
            }
        }


    }

?>