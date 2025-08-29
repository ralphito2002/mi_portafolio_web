<template>
  <div id="" :class="temaActual" class="min-h-screen bg-black text-white contenedorVue">
    <div class="bg-gradient-to-r from-black from-74% to-transparent to-90%">


    
   <!-- NAVBAR -->

    <div class=" fixed grid grid-cols-12  bg-black w-full shadow-lg shadow-turquesaBtnBorder/80">
  <div class="col-span-9">

    <nav class="flex gap-4 p-3 ms-1.5 text-1xl font-semibold justify-center">
      <RouterLink to="/" class="routerNavBar">INICIO</RouterLink>
      <RouterLink to="/sobreMi" class="routerNavBar">SOBRE MI</RouterLink>
      <RouterLink to="/servicios" class="routerNavBar">SERVICIOS</RouterLink>
      <RouterLink to="/proyectos" class="routerNavBar">PROYECTOS</RouterLink>
      <RouterLink to="/tecnologias" class="routerNavBar">TECNOLOGIAS</RouterLink>
      <RouterLink to="/curriculums" class="routerNavBar">CURRICULUMS</RouterLink>
      <RouterLink to="/comentarios" class="routerNavBar">COMENTARIOS</RouterLink>
      <RouterLink to="/contactame" class="routerNavBar">CONTACTAME</RouterLink>
    </nav>
    
    <div class="mx-8">
      <hr class="border-t-1 border-cyan-400 ">
    <hr class="border-t-2 border-white ">
    <div class="h-1.5 bg-gradient-to-b to-black from-turquesaBtnBorder"></div>
    </div>

  </div>

        <!-- BOTON ADMIN -->

  <div class="col-span-3 flex gap-4 justify-center items-center">
<Button>
 Admin  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>
</Button>
<Button @click="cambiarTema" >Cambiar tema <i class="fa-solid fa-palette fa-lg"></i></Button>
  </div>



  <!-- FIN NAVBAR -->

</div>

<!-- FALSO NAVBAR ESPACIO VACIO-->

<div class=" h-20"></div>


    

<!-- MAIN -->

    <div class="p-43 ">
      <RouterView />
    </div>

<!-- FIN DEL MAIN -->



<!-- FOOTER -->

<div class="bg-turquesaBtnBorder h-0.5"></div>
<div class="bg-white h-0.5"></div>

<div class="bg-gradient-to-b from-cyan-950 to-black text-white ">
  <div class="bg-gradient-to-b from-turquesaBtnBorder to-transparent h-2"></div>
  <div class="py-10">


  <div class="grid grid-cols-12 gap-5">

    <div class="col-span-3  px-10 py-5">

      <div class="h-0.5 bg-white mb-8 me-18"></div>
      <div class=" text-left">
        <h4 class="text-2xl font-semibold">El esfuerzo siempre proveera frutos siempre y cuando nunca te rindas y logres superar cada obstaculo.</h4>
      </div>
      
      <div class="h-0.5 bg-white mt-8"></div>
    
    </div>





    
    <div class="col-span-3 px-4 text-left">
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
      <h2 class="text-3xl font-semibold ">Ralph Sebastian Abarca Rodriguez</h2><br>
      <hr class="bordert-1 border-cyan-800">
      
      <div class="text-gray-500 fond-semibold py-4">RalfhSebastiaar@gmail.com <br>(+506) 6273-2763 <br> Siquirres, Limon, Costa Rica.
      <br>Universidad de Costa Rica.</div>
      <div class="text-amber-200">Visita mis redes sociales:</div>

       <div class="flex gap-2 my-5">
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


</div>

<!-- FIN DEL FOOTER -->

<div class="text-center bg-gray-950 border-t-1 border-gray-500 text-gray-500 pe-3">
    &copy; 2025 Ralph Sebastian Abarca Rodriguez. Todos los derechos reservados.
</div>

</div>
  </div>
  
</template>

<script setup>
import { ref, computed } from 'vue'
import Button from '@/components/ui/button/Button.vue'

let contador = ref(0);
const temas = ["tema1", "tema2", "tema3", "tema4"];

const cambiarTema = () => {
  contador.value = (contador.value + 1) % temas.length;
};

const temaActual = computed(() => temas[contador.value]);
</script>

