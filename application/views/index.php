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

  <!-- Hero Section -->
  <div class="flex flex-col items-center gap-10 lg:flex-row-reverse w-full max-w-screen-xl mx-auto my-24">
    <div class="flex items-center justify-center">
      <img src="assets/img/ferry.jpg" class="max-w-sm shadow-xl dark:shadow-gray-800 duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" alt="Ferry Hasan" />
    </div>
    <div class="text-left">
      <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Hi There!</h1>
      <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">My name is Ferry Hasan, known as killflex. I'm 21 years old Full Stack Developer & Motion Designer based in Surabaya, Indonesia.</p>
      <a href="#contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
          Contact Me
          <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
      </a>
    </div>

  </div>

  <!-- About Section -->
  <section id="about" class="w-full max-w-screen-xl mx-auto my-24 text-center">
    <h3 class="text-4xl font-bold mb-6">About Me</h3>
    <p class="mb-3 text-gray-500 dark:text-gray-400">At 21 years old, I have over 4 years of experience in digital media and web development. My expertise covers a broad spectrum, including front-end and back-end development, where I design and implement user-friendly and responsive websites. Additionally, I excel in video editing, bringing stories to life through meticulous cuts, color grading, and motion graphics. My proficiency in 3D art allows me to create immersive and realistic visual experiences, adding a unique dimension to my projects.</p>
    <p class="mb-3 text-gray-500 dark:text-gray-400">It started with my passion for learning computer technology, website technology, watching 2D and 3D animation, and everything related to it. I had a strong desire to create my own. This motivated me to learn various programming languages and tools, until I finally mastered it.</p>
    <p class="text-gray-500 dark:text-gray-400">Motion design and web development are more than just hobbies for me, they are my biggest passions. Explore my work and join me on this creative journey!</p>
  </section>

  <!-- Contact Section -->
  <form action="<?= base_url('index.php/home/prosesData'); ?>" method="post" class="w-full max-w-screen-xl mx-auto my-24" id="contact">
    <div class="text-center">
      <h3 class="text-4xl font-bold mb-6">Contact</h3>
    </div>
    <div class="mb-4">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required />
    </div> 
      <div class="mb-4">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
      </div> 
      <div class="mb-4">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea name="message" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." required ></textarea>
      </div> 

      <div class="flex justify-end">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send</button>
      </div>
    </form>
  
  <?php include 'application/views/components/footer.php';?>
  
  <script src="<?= base_url().'node_modules/flowbite/dist/flowbite.min.js' ?>"></script>
</body>
</html>