<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="<?= base_url().'assets/css/output.css'?>" rel="stylesheet" >
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body class="bg-base-100 text-base-content">

  <?php include 'application/views/components/header.php';?>

  <!-- Table Section Start -->
	<div class="text-left rtl:text-right relative overflow-x-auto shadow-md sm:rounded-lg w-full max-w-screen-xl mx-auto my-2 p-8 ">
		<table class="w-full text-sm text-gray-500 dark:text-gray-400">
			<caption class="p-5 text-lg font-semibold text-gray-900 bg-white dark:text-white dark:bg-gray-800">
				Data Mahasiswa
				<p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel ini menampilkan data mahasiswa, termasuk NRP, Nama, Jenis Kelamin, dan Alamat..</p>
			</caption>
			<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
				<tr class="">
					<th scope="col" class="px-6 py-3">
						NRP
					</th>
					<th scope="col" class="px-6 py-3">
						Nama
					</th>
					<th scope="col" class="px-6 py-3">
						Jenis Kelamin
					</th>
					<th scope="col" class="px-6 py-3">
						Alamat
					</th>
					<th scope="col" class="px-6 py-3">
						<span class="sr-only">Edit</span>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($mhs as $m) : ?>
				<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center rtl:text-right">
					<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= htmlspecialchars($m['nrp'], ENT_QUOTES, 'UTF-8'); ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= htmlspecialchars($m['nama'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= htmlspecialchars($m['jenis_kelamin'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= htmlspecialchars($m['alamat'], ENT_QUOTES, 'UTF-8'); ?>
                    </td>
					<td class="px-6 py-4 text-right">
						<a href="<?= base_url('index.php/mahasiswa/edit/'.$m['nrp']); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						<a href="<?= base_url('index.php/mahasiswa/hapus/'.$m['nrp']); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
  <!-- Table Section End -->

  <!-- Contact Section -->
	<form action="<?= base_url('index.php/mahasiswa/tambah'); ?>" method="post" class="w-full max-w-screen-xl mx-auto my-2 p-8" id="insertMahasiswa">
		<div class="text-center">
			<h3 class="text-4xl font-bold mb-6">Tambah Data Mahasiswa</h3>
		</div>
		<div class="mb-4">
			<label for="nrp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NRP</label>
			<input type="text" name="nrp" id="nrp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NRP" required />
		</div> 
		<div class="mb-4">
			<label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
			<input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required />
		</div> 
		<div class="mb-4">
			<label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
			<select name="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
				<option >--Pilih--</option>
				<option value="L">Laki-Laki</option>
				<option value="P">Perempuan</option>
			</select>
		</div> 
		<div class="mb-4">
			<label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
			<textarea name="alamat" id="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required ></textarea>
		</div> 

		<div class="flex justify-end">
			<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
		</div>
	</form>
  
  <?php include 'application/views/components/footer.php';?>
  
  <script src="<?= base_url().'node_modules/flowbite/dist/flowbite.min.js' ?>"></script>
</body>
</html>