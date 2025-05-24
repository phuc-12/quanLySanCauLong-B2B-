<?php
    include_once("ketnoi.php");
    class mTKND
    {
        public function SelectTKND($user, $pass)
        {
            $p = new clsketnoi();
            $conn = $p->moketnoi();
            if ($conn) {
                // $user =(, $user);
                // $pass = mysqli_real_escape_string($conn, $pass);

                $sql = "SELECT idnguoidung, username, passwords, loainguoidung FROM taikhoannguoidung WHERE username = '$user' AND passwords = '$pass' LIMIT 1";
                $result = $conn->query($sql);
                if (!$result) {
                    die("Lỗi câu truy vấn: " . $conn->error);
                }
                $p->dongketnoi($conn);
                return $result;
            } else {
                return false;
            }
        }

    }
?>