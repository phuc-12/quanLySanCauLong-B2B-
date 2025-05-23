<?php

    include_once("assets/model/mUser.php");
    $p=new mUser();

    $maKH = $_REQUEST['maKH'];

    if($p->themxoasua("UPDATE bookings SET status = 'booked' WHERE maKH = '$maKH'")==1)
    {
        echo'<script language="javascript">
        window.location="user-complete.php?maKH='.$maKH.'";
        </script>';
    }

?>