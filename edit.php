<?php
     include 'lib/helper.php';

       cekLogin();

    include 'lib/library.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nis  = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $ibu_kandung = $_POST['ibu_kandung'];
        $file = $_POST['foto'];

        $foto = $_FILES['foto'];


            if(!empty($foto) && $foto['eror'] == 0 ) {
                $path = './media/';
                $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);

                if (!$upload) {
                    flash('eror', "Upload File gagal!");
                    header('location:index.php');
                }
                $file = $foto['name'];
            }

         $sql = "UPDATE `siswa` SET `nis` = $nis,
                                    `nama_lengkap` = '$nama_lengkap',
                                    `jenis_kelamin` = '$jenis_kelamin',
                                    `kelas` = '$kelas',
                                    `jurusan` = '$jurusan',
                                    `alamat` = '$alamat',
                                    `ibu_kandung` = '$ibu_kandung',
                                    `golongan_darah` = '$golongan_darah',
                                    `file` = '$file' WHERE `nis` = '$nis'";

        $mysqli->query($sql) or die($mysqli->error);

        header('location: index.php');
    };

    $nis = $_GET['nis'];
    if(empty($nis)) header('location: index.php');

    $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
    $query = $mysqli->query($sql);
    $siswa = $query->fetch_array();


    include 'views/v_tambah.php';

?>