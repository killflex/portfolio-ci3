<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>killflex's portfolio</title>
    <link href="<?= base_url().'assets/css/output.css'?>" rel="stylesheet" >
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body class="bg-base-100 text-base-content">

  <?php include 'application/views/components/header.php';?>

  <!-- Contact Section -->
  <form class="w-full max-w-screen-xl mx-auto my-24">
    <div class="mb-4">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= $name ?>" disabled/>
    </div> 
      <div class="mb-4">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= $email ?>" disabled/>
      </div> 
      <div class="mb-4">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="<?= $message ?>" disabled></textarea>
      </div>
    </form>
  
  <?php include 'application/views/components/footer.php';?>
  
  <script src="<?= base_url().'node_modules/flowbite/dist/flowbite.min.js' ?>"></script>
</body>
</html>