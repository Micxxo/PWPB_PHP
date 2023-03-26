   <?php
   
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_pwpb23';

    $mysqli = mysqli_connect($host, $user, $pass, $db)
              or die('Tidak dapat koneksi ke Database');
    ?>         