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
</head>
<body class="bg-base-100 text-base-content">

  <!-- Header Section -->
  <header class="bg-base-200 shadow-lg">
    <nav class="container mx-auto p-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold">Ferry Hasan</h1>
      <ul class="flex space-x-4">
        <li><a href="#hero" class="hover:text-primary">Home</a></li>
        <li><a href="#about" class="hover:text-primary">About</a></li>
        <li><a href="#projects" class="hover:text-primary">Projects</a></li>
        <li><a href="#contact" class="hover:text-primary">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img
      src="<?= base_url().'assets/img/ferry.jpg'?>"
      class="mask mask-squircle w-[20rem]" />
    <div>
      <h1 class="text-5xl font-bold">Hi There!</h1>
      <p class="py-6 pr-[15rem]">
        I am Ferry Hasan, a web developer with experience in various fields such as front-end and back-end development. I enjoy solving problems through creative solutions and coding.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>

  <!-- About Section -->
  <section id="about" class="container mx-auto p-10 text-center">
    <h3 class="text-4xl font-bold mb-6">About Me</h3>
    <p class="text-lg">I am a [developer/designer/etc.] with experience in various fields such as [field1], [field2], and [field3]. I enjoy solving problems through creative solutions and coding.</p>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="bg-base-200 py-12">
    <div class="container mx-auto text-center">
      <h3 class="text-4xl font-bold mb-6">My Projects</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Project 1 -->
        <div class="card bg-base-100 shadow-lg hover:shadow-xl">
          <figure><img src="https://via.placeholder.com/300" alt="Project 1" /></figure>
          <div class="card-body">
            <h4 class="card-title">Project 1</h4>
            <p>A brief description of the project. What it does and what technologies were used.</p>
            <a href="#" class="btn btn-outline btn-primary">View Project</a>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="card bg-base-100 shadow-lg hover:shadow-xl">
          <figure><img src="https://via.placeholder.com/300" alt="Project 2" /></figure>
          <div class="card-body">
            <h4 class="card-title">Project 2</h4>
            <p>A brief description of the project. What it does and what technologies were used.</p>
            <a href="#" class="btn btn-outline btn-primary">View Project</a>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="card bg-base-100 shadow-lg hover:shadow-xl">
          <figure><img src="https://via.placeholder.com/300" alt="Project 3" /></figure>
          <div class="card-body">
            <h4 class="card-title">Project 3</h4>
            <p>A brief description of the project. What it does and what technologies were used.</p>
            <a href="#" class="btn btn-outline btn-primary">View Project</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="container mx-auto py-12 text-center">
    <h3 class="text-4xl font-bold mb-6">Get In Touch</h3>
    <form action="#" class="space-y-4 max-w-xl mx-auto">
      <input type="text" placeholder="Your Name" class="input input-bordered w-full" />
      <input type="email" placeholder="Your Email" class="input input-bordered w-full" />
      <textarea class="textarea textarea-bordered w-full" placeholder="Your Message"></textarea>
      <button type="submit" class="btn btn-primary w-full">Send Message</button>
    </form>
  </section>

  <!-- Footer Section -->
  <footer class="footer footer-center bg-base-200 text-base-content rounded p-10">
  <nav class="grid grid-flow-col gap-4">
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Press kit</a>
  </nav>
  <nav>
    <div class="grid grid-flow-col gap-4">
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
        </svg>
      </a>
    </div>
  </nav>
  <aside>
    <p>Copyright © 2024 - All right reserved by Ferry Hasan</p>
  </aside>
</footer>

</body>
</html>