<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nis'])) {
        include 'lib/library.php';

        $nis = $_GET['nis'];
        if(!empty($nis)) {
            $sql = "DELETE FROM siswa WHERE nis = '$nis'";
            if($mysqli->query($sql)) {
                echo 1;
            } else {
                echo 0 ;
            }

        }
    }

    include 'views/v_index.php';

?>