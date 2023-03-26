<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico XI PPLG 1</title>
</head>
<body>
    <?php
        include 'lib/helper.php';
            cekLogin();
        include 'lib/library.php';

        cekLogin();

        $sql = 'SELECT * FROM siswa';

        $search = @$_GET['search'];
        if(!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%' OR golongan_darah LIKE '%$search%' OR ibu_kandung LIKE '%$search%' ";

        $order_field = @$_GET['sort'];
        $order_mode = @$_GET['order'];
        if(!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";


        $listSiswa = $mysqli->query($sql) or die($mysqli -> error);
        
        include 'views/v_index.php'
    ?>
</body>
</html>