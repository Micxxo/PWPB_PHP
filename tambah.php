<?php
   include 'lib/helper.php';

   cekLogin();

    include 'lib/library.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis  = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $ibu_kandung = $_POST['ibu_kandung'];
        $foto = $_FILES['foto'];
        
        if (!empty($foto) AND $foto['error'] == 0) {
            $path = './media/images';
            $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);

                 // Check file size
            if ($foto["size"] > 3000000) {
                flash("alert", "warning", "Ukuran file melebihi batas 3mb");
                header('location: index.php');
                return;
            }

            if (!$upload) {
                flash("alert", "error", "upload file gagal");
                header('location: index.php');
                return;
            } 
            $file = $foto['name'];

        }
        $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, kelas, jurusan, alamat, golongan_darah, ibu_kandung, file) VALUES ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$golongan_darah', '$ibu_kandung', '$file')";

        $mysqli->query($sql) or die($mysqli->error);

        header('localhost: index.php');
    }


    include 'views/v_tambah.php';

?>