<?php

    class clsketnoi
    {
        public function moketnoi()
        {
            return mysqli_connect('localhost','cnm','123','sancaulong');
        }

        public function dongketnoi($con)
        {
            $con->close();
        }
    }

?>
