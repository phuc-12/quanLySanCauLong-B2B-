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
                $sql = "SELECT t.start_time, t.end_time, b.ngayTao, b.gia, b.maDat FROM bookings b join time_slots t on b.time_slot_id=t.id WHERE b.maKH = '$maKH' AND b.status = 'booking' ORDER BY maDat asc";
                $tblBook = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblBook;
            }
            else 
            {
                return false;
            }
        }

        public function SelectAllBookedBymaKH($maKH)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT b.maDat, s.tenSan, t.start_time, t.end_time, b.ngayTao, b.gia, b.status, b.ngayDat FROM bookings b join time_slots t on b.time_slot_id=t.id join thongtinsan s on b.maSan=s.maSan WHERE maKH = '$maKH' AND b.status = 'booked' ORDER BY maDat desc";
                $tblBook = $conn->query($sql);
                $p->dongketnoi($conn);
                return $tblBook;
            }
            else 
            {
                return false;
            }
        }

        public function SelectAllBookBymaKH($maKH)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if($conn)
            {
                $sql = "SELECT b.maDat, s.tenSan, t.start_time, t.end_time, b.ngayTao, b.gia, b.status FROM bookings b join time_slots t on b.time_slot_id=t.id join thongtinsan s on b.maSan=s.maSan WHERE maKH = '$maKH' AND b.status = 'booking' ORDER BY maDat desc";
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