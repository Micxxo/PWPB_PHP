<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tambah</title>
		<script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body>
		<?php
			$action = 'tambah.php';
			if(!empty($siswa)) $action = 'edit.php';

			$inputMode = 'disabled';
			if(empty($siswa['nis'])) $inputMode = '';
		?>
		<h1 class="text-2xl font-bold text-center my-5">TAMBAH DATA</h1>
		<form action="<?= $action ?>" method="POST" enctype="multipart/form-data" class="flex justify-center items-center">
			<div class="">
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="NIS"
				name="nis"
				value="<?= intval(@$siswa['nis']) ?>" 
				<?= @$siswa['nis'] ? 'readonly' : '' ?> 
			/> 
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="Nama Lengkap"
				name="nama_lengkap"
				value = "<?= @$siswa['nama_lengkap']?> "
			/><br>
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="Jenis Kelamin"
				disabled
			/>
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="radio"
				placeholder="Jenis Kelamin"
				name="jenis_kelamin"
				value="L"
				<?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?> 
			/>
			Laki-Laki 
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="radio"
				placeholder="Jenis Kelamin"
				name="jenis_kelamin"
				value="P"
				<?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?> 
			/>
			Perempuan <br />
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="Jurusan"
				name="jurusan"
				value = "<?= @$siswa['jurusan']?> "
				/>
			<select name="id_kelas" id="" title="kelas" class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
			>
				<option value="">[Pilih Kelas]</option>
				<?php while ($murid = @$dataKelas->fetch_array()) { ?>
					<option value="<?php echo $murid['id_kelas'] ?>"><?php echo @$siswa['id_kelas'] === $murid['id_kelas'] ? 'selected' : ''?>
						<?php echo $murid['nama_kelas'] ?>
					</option>
				<?php } ?>	
			</select><br>
			<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="Alamat"
				name="alamat"
				value = "<?= @$siswa['alamat']?> "
			/> 
				<input	
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="Golongan Datah"
				name="golongan_darah"
				value = "<?= @$siswa['golongan_darah']?> "
			/> <br>
				<input
				class="input p-1 rounded-md border-2 border-b-4 border-black my-3"
				type="text"
				placeholder="Nama Ibu Kandung"
				name="ibu_kandung"
				value = "<?= @$siswa['ibu_kandung']?> "
			/> <br>
			 <?php if ($action == 'edit') : ?>
                    <img src="media/images/<?= @$siswa['file'] ? $siswa['file'] :'default_picture.png' ?>" class="mb-3" width="100">
                    <input type="hidden" name="foto" value="<?= @$siswa['file'] ?>">
             <?php endif ?>
				<input type="file" name="foto" accept="image/*"/>
			<input
				type="submit"
				value="Simpan"
				class="rounded-md border-2 bg-black bg-opacity-50 border-slate-400 w-full text-white my-3"
			/>
			
			
			</div>
		</form>

		<?php if (!empty($success)) { ?>
			<div class="alert absolute bottom-10 p-2 rounded-md bg-green-400 text-white left-[43%]">
				<p><?= $success ?><p>
			</div>
		<?php } ?>

		
		<?php if (!empty($error)) { ?>
			<div class="alert absolute bottom-20 p-2 rounded-md bg-red-500 text-white left-[43%]">
				<p><?= $error ?><p>
			</div>
		<?php } ?>
	</body>
</html>
