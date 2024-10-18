<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="<?= base_url().'assets/css/output.css'?>" rel="stylesheet" >
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body class="bg-base-100 text-base-content">

  <?php include 'application/views/components/header.php';?>

  <!-- Edit Data Mahasiswa Section -->
   <?php foreach($mhs as $m) : ?>
	<form action="<?= base_url('index.php/mahasiswa/update'); ?>" method="post" class="w-full max-w-screen-xl mx-auto my-2 p-8" id="insertMahasiswa">
		<div class="text-center">
			<h3 class="text-4xl font-bold mb-6">Edit Data Mahasiswa</h3>
		</div>
		<div class="mb-4">
			<label for="nrp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRP</label>
			<input type="text" name="nrp" id="nrp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= htmlspecialchars($m['nrp'], ENT_QUOTES, 'UTF-8'); ?>" readonly/>
		</div> 
		<div class="mb-4">
			<label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
			<input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= htmlspecialchars($m['nama'], ENT_QUOTES, 'UTF-8'); ?>"  />
		</div> 
		<div class="mb-4">
			<label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <?php
                    $jenis_kelamin = $m['jenis_kelamin'];
                    if ($jenis_kelamin == 'L') {
                        echo '<option value="L" selected>Laki-Laki</option>';
                        echo '<option value="P">Perempuan</option>';
                    } else {
                        echo '<option value="P" selected>Perempuan</option>';
                        echo '<option value="L">Laki-Laki</option>';
                    }
                ?>
			</select>
		</div> 
		<div class="mb-4">
			<label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
			<textarea name="alamat" id="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= htmlspecialchars($m['alamat'], ENT_QUOTES, 'UTF-8'); ?></textarea>
		</div> 

		<div class="flex justify-end">
			<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>
		</div>
	</form>
    <?php endforeach; ?>
  
  <?php include 'application/views/components/footer.php';?>
  
  <script src="<?= base_url().'node_modules/flowbite/dist/flowbite.min.js' ?>"></script>
</body>
</html>