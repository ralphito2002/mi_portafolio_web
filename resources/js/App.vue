<template>
  <div class="min-h-screen bg-black text-white">
    
   <!-- NAVBAR -->

    <div class="grid grid-cols-12 gap-4">
  <div class="col-span-9">

    <nav class="flex gap-6 p-4 ms-1.5 text-1xl font-semibold justify-center">
      <RouterLink to="/" class="routerNavBar">INICIO</RouterLink>
      <RouterLink to="/sobreMi" class="routerNavBar">SOBRE MI</RouterLink>
      <RouterLink to="/servicios" class="routerNavBar">SERVICIOS</RouterLink>
      <RouterLink to="/proyectos" class="routerNavBar">PROYECTOS</RouterLink>
      <RouterLink to="/tecnologias" class="routerNavBar">TECNOLOGIAS</RouterLink>
      <RouterLink to="/curriculums" class="routerNavBar">CURRICULUMS</RouterLink>
      <RouterLink to="/comentarios" class="routerNavBar">COMENTARIOS</RouterLink>
      <RouterLink to="/contactame" class="routerNavBar">CONTACTAME</RouterLink>
    </nav>
    
    <hr class="border-t-1 border-cyan-500 mx-15">

  </div>

        <!-- BOTON ADMIN -->

  <div class="col-span-3 grid justify-center items-center">
<button class="flex bg-white 
 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded-xl shadow gap-2
hover:scale-105 hover:border-2 hover:border-cyan-400 hover:bg-cyan-950 hover:text-white  transition-transform duration-300 ease-in-out">

 Admin  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>

</button>
  </div>



  <!-- FIN NAVBAR -->

</div>


    

<!-- MAIN -->

    <main class="p-6">
      <RouterView />
    </main>

<!-- FIN DEL MAIN -->



<!-- FOOTER -->

<div class="bg-cyan-300 h-1"></div>
<div class="bg-white h-0.5"></div>

<div class="bg-gradient-to-b from-cyan-950 to-black text-white p-4 ">
  
  <div class="grid grid-cols-12 gap-4 p-4">

    <div class="col-span-3 text-left m-3">
      <hr>
      <span>Hola <br>holis hehe</span>
      <hr>
    </div>
    
    <div class="col-span-3 text-left">
      <h2 class="text-lg underline underline-offset-4 pb-3">Enviame un correo:</h2>

      <input type="text" name="" id="" placeholder="Tu Nombre"
       class="p-2 rounded-lg text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300">


      <input type="text" name="" id="" placeholder="Tu email" class="p-2 rounded-lg text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300">

      <textarea name="" id="" cols="30" rows="4" placeholder="Tu mensaje" class="p-2 rounded-lg text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300"></textarea>

       <div class="grid justify-end">
        <button class="flex 
 text-white font-semibold py-2 px-4 border-2 bg-cyan-950 border-cyan-400 rounded-xl shadow gap-2
hover:scale-98 hover:border-2 hover:border-cyan-300 hover:bg-cyan-900 hover:white  transition-transform duration-300 ease-in-out">Enviar correo</button>
       </div>

    </div>
    
    <div class="col-span-3 text-center grid align-center justify-center">
       <RouterLink to="/" class="routerNavBarFooter">INICIO</RouterLink>
      <RouterLink to="/sobreMi" class="routerNavBarFooter">SOBRE MI</RouterLink>
      <RouterLink to="/servicios" class="routerNavBarFooter">SERVICIOS</RouterLink>
      <RouterLink to="/proyectos" class="routerNavBarFooter">PROYECTOS</RouterLink>
      <RouterLink to="/tecnologias" class="routerNavBarFooter">TECNOLOGIAS</RouterLink>
      <RouterLink to="/curriculums" class="routerNavBarFooter">CURRICULUMS</RouterLink>
      <RouterLink to="/comentarios" class="routerNavBarFooter">COMENTARIOS</RouterLink>
      <RouterLink to="/contactame" class="routerNavBarFooter">CONTACTAME</RouterLink>
    </div>
    
    <div class="col-span-3 text-left">
      <h2 class="text-3xl font-semibold ">Ralph Sebastian Abarca Rodriguez</h2>

      <div class="text-gray-500 fond-semibold py-4">RalfhSebastiaar@gmail.com <br>(+506) 6273-2763 <br> Siquirres, Limon, Costa Rica.
      <br>Universidad de Costa Rica.</div>
      <div class="text-amber-200">Visita mis redes sociales:</div>

       <div class="flex gap-3 my-5">
    <!-- LinkeIn -->
    <a href="https://linkedIn.com" target="_blank" class="p-3 bg-gray-800 rounded-full shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:bg-blue-400">
      <i class="fa-brands fa-linkedin text-white text-xl"></i>
    </a>
     <!-- Github -->
    <a href="https://github.com" target="_blank" class="p-3 bg-gray-800 rounded-full shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:bg-gray-400">
      <i class="fab fa-github text-white text-xl"></i>
    </a>
    <!-- Youtube -->
    <a href="https://twitter.com" target="_blank" class="p-3 bg-gray-800 rounded-full shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:bg-red-400">
      <i class="fa-brands fa-youtube text-white text-xl"></i>
    </a>
    <!-- facebook -->
    <a href="https://facebook.com" target="_blank" class="p-3 bg-gray-800 rounded-full shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:bg-blue-500">
      <i class="fab fa-facebook text-white text-xl"></i>
    </a>
    <!-- insta -->
    <a
      href="https://instagram.com" target="_blank" class="p-3 bg-gray-800 rounded-full shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:bg-pink-500">
      <i class="fab fa-instagram text-white text-xl"></i>
    </a>
    <!-- whatsapp -->
    <a href="https://whatsapp.com" target="_blank" class="p-3 bg-gray-800 rounded-full shadow-lg transform transition-all duration-300 hover:-translate-y-3 hover:bg-green-500">
      <i class="fab fa-whatsapp text-white text-xl"></i>
    </a>
  </div>

    </div>



  </div>


</div>

<!-- FIN DEL FOOTER -->

  </div>
  
</template>

<script setup lang="ts"></script>
