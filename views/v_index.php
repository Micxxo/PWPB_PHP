<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Mico XI PPLG 1</title>
		<!-- <script src="https://cdn.tailwindcss.com"></script> -->
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		 <!-- TOASTR  -->
    	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	</head>
	<body class="p-5 bg-[#E3E3E3]">
		<div class="d-flex justify-content-between align-items-center mt-3 mb-5">
			<a
				href="tambah.php"
				class="p-2 rounded border-2 border border-success text-success fw-bold text-decoration-none"
				>Tambah Data</a
			>
			<form action="index.php" method="GET">
				<input
					type="text"
					name="search"
					title="cari"
					placeholder="cari berdasarkan NIS dan Nama"
					class="rounded p-1 px-3 border-black"
					value = "<?= @$search ?>"
				/>
				<button
					type="submit"
					name="sbmt"
					class="p-1 rounded px-3 text-white bg-info "
				>
					Cari
				</button>
				<a href="?" class="p-1 rounded px-3 text-decoration-none text-white bg-secondary" name="reset" type="submit">
					Reset
				</a>
			</form>
			<a
				href="logout.php"
				class="p-2 rounded border-2 border border-danger text-danger fw-bold text-decoration-none"
				>Logout</a
			>
		</div>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="px-4">Foto</th>
      <th scope="col">
			<a href="index.php?sort=nis&order=asc">🔼</a> 
			<a href="index.php?sort=nis&order=desc">🔽<a>	
			NIS 
	
	  </th>
      <th scope="col" >
		<a href="index.php?sort=nama_lengkap&order=asc">🔼</a> 
			<a href="index.php?sort=nama_lengkap&order=desc">🔽<a>		
	  Nama Lengkap 
	  </th>
      <th scope="col">Jenis Kelamin
			<a href="index.php?sort=jenis_kelamin&order=asc" >🔼</a> 
			<a href="index.php?sort=jenis_kelamin&order=desc">🔽<a>	
	  </th>
      <th scope="col">Kelas
		<a href="index.php?sort=kelas&order=asc">🔼</a> 
			<a href="index.php?sort=kelas&order=desc">🔽<a>	
	  </th>
      <th scope="col">Jurusan
			<a href="index.php?sort=jurusan&order=asc">🔼</a> 
			<a href="index.php?sort=jurusan&order=desc">🔽<a>	
	  </th>
      <th scope="col">Alamat
			<a href="index.php?sort=alamat&order=asc">🔼</a> 
			<a href="index.php?sort=alamat&order=desc">🔽<a>	
	  </th>
      <th scope="col">Golongan Darah
			<a href="index.php?sort=golongan_darah&order=asc">🔼</a> 
			<a href="index.php?sort=golongan_darah&order=desc">🔽<a>	
	  </th>
      <th scope="col">Nama Ibu Kandung
			<a href="index.php?sort=ibu_kandung&order=asc">🔼</a> 
			<a href="index.php?sort=ibu_kandung&order=desc">🔽<a>	
	  </th>
      <th scope="col">Aksi</th>
    </tr>	
  </thead>
  <tbody>
	<?php
		$i = 1;
		while ($siswa = @$listSiswa -> fetch_array()) { ?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td class="px-4"><img src="<?php echo base_url()?>/media/<?= $siswa['file']?>" width="100px" alt="foto" class="rounded"/></td>
      <td><?=$siswa['nis']?></td>
      <td><?=$siswa['nama_lengkap']?></td>
      <td><?=$siswa['jenis_kelamin']?></td>
      <td><?=$siswa['kelas']?></td>
      <td><?=$siswa['jurusan']?></td>
      <td><?=$siswa['alamat']?></td>
      <td><?=$siswa['golongan_darah']?></td>
      <td><?=$siswa['ibu_kandung']?></td>
      <td>

	  <a href="edit.php?nis=<?=$siswa['nis']?>" class="text-success text-decoration-none fw-bold">Edit</a><br />
	  <a href="delete.php?nis=<?=$siswa['nis']?>" class="text-danger  text-decoration-none fw-bold btnDelete">Delete</a>
	  </td>

		<?php } ?>

  </tbody>
</table>

<div class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"></h4>
			</div>

			<div class="modal-body"></div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btnYa">Ya</button>	
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>	
			<div>
		</div>
	</div>
</div>

		  <!-- JS BOOTSTRAP  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
		   <!-- JQUERY  -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- JS TOASTR  -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	 
   <script>
        $(() => {
            $('.btnDelete').on('click', function(e) {
                e.preventDefault()

                let tr = $(this).parent().parent()
                let nama = $($(tr).children()[3]).html()
                let href = $(this).attr('href')

                $('.modal').modal('show')
                $('.modal-title').html('Konfirmasi')
                $('.modal-body').html(`Anda yakin ingin menghapus data <b>${nama}</b> ?`)

                $('.modal .btnYa').off()
                $('.modal .btnYa').on('click', function() {
                    $.ajax({
                        'url': href,
                        'type': 'GET',
                        'success': function(data) {
                            if (data == 1) {
                                $('.modal').modal('hide')
                                tr.fadeOut()

                                toastr.success(`Data ${nama} berhasil dihapus`, 'BERHASIL')
                            } else {
                                toastr.error(`Data ${nama} gagal dihapus`, 'GAGAL')
                            }
                        }
                    })
                })
            } )
        })
    </script>
	</body>
</html>
