<?php

    class clsketnoi
    {
        public function moketnoi()
        {
            
            $con = mysqli_connect('localhost', 'cnm', '123', 'sancaulong');
            if (!$con) {
                die("Kết nối thất bại: " . mysqli_connect_error());
            }

            mysqli_set_charset($con, "utf8");

            return $con;
        }

        public function dongketnoi($con)
        {
            $con->close();
        }
    }

?>
