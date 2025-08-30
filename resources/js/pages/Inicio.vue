<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import Card from '@/components/ui/card/Card.vue';
import Separator from '@/components/ui/separator/Separator.vue';

</script>

<template>
  

<!--  PRESENTACION   -->


<div class="grid grid-cols-12 py-9 gap-8">


  <div class="col-span-1 "></div>

 <!--  PARTE IZQUIERDA - TITULOS/BOTONES  -->

  <div class="col-span-5 text-center">
    
    <h3 class="text-lg mb-5 text-cyan-200 underline underline-offset-8">Portafolio profesional WEB</h3>

    <h1 class="text-5xl font-semibold mb-5">RALPH SEBASTIAN ABARCA RODRIGUEZ</h1>

    <h2 class="text-xl mb-5 text-orange-200">Desarrollador Fullstack | Informatico Empresarial</h2>

    <hr class="bordert-1 mb-8 border-cyan-300">

    <h3 class="text-xl mb-10">Apasionado por la tecnologia, el diseno y solucion de problemas a traves del codigo. En este espacio muestro quien soy, que hago y como puedo ayudarte.</h3>

    <h1 class="text-3xl mb-12 text-purple-300">Me encantaria trabajar juntos!</h1>

    <div class="flex justify-center gap-8">

      <Button>Curriculum Vitae CV</Button>

      <Button>Contactame</Button>
  
    </div>

    
  </div>

 <!--  PARTE DERECHA - FOTO/INFO   -->


  <div class="col-span-5 grid justify-center gap-5">
    

      <img src="/images/RalphAbProfile.jpg" alt="" class="w-89 h-80 rounded-2xl border-4 shadow-[0_0_25px_5px_rgba(41,158,154,0.7)] object-cover object-right border-white">


      <Card>
        
        <div class="p-3 backdrop-blur-xs">
          <span>
            <i class="fa-solid fa-user p-2 me-4"></i>Ralph Abarca R.<br>
            <i class="fa-solid fa-cake-candles p-2 me-4"></i>23 años.<br>
            <i class="fa-solid fa-at p-2 me-4"></i>Ralfhsebastiaar@gmail.com<br>
            <i class="fa-solid fa-graduation-cap p-2 me-4"></i>Universidad de Costa Rica.<br>
            <i class="fa-solid fa-house p-2 me-4"></i>Siquirres, Limon, Costa Rica
          </span>

        </div>

      </Card>



  </div>

  <div class="col-span-1"></div>

</div>




<!--  LINEA SEPARADORA   -->


  <div class="w-full h-1 bg-white shadow-[0_0_12px_3px_rgba(34,211,238,0.8)]"></div>





<!--  SOBRE MI   -->

<div class="backdrop-blur-md">



  <!-- TITULO SOBRE MI   -->


<div class="grid grid-cols-12 pt-10">

  <div class="col-span-1"></div>

  <div class="col-span-1 flex items-center">
    <div class="h-1 flex-1 bg-turquesaBtnText"></div>
  </div>
  <div class="col-span-2 text-3xl text-turquesaBtnText text-center">Sobre mi</div>
  <div class="col-span-6 flex items-center">
    <div class="h-1 flex-1 bg-turquesaBtnText"></div>
  </div>

  <div class="col-span-3"></div>
</div>


  <!-- CONTENIDO SOBRE MI   -->

<div class="grid grid-cols-12 py-10 px-10">

<div class="col-span-1"></div>

<div class="col-span-5 mb-4">

  <h2 class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit itaque porro veniam perspiciatis ex, modi eligendi voluptatum consectetur amet excepturi asperiores ipsam dolorum possimus dolore. Debitis velit inventore incidunt nostrum!</h2>
  <br>
  <h2 class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit itaque porro veniam perspiciatis ex, modi eligendi voluptatum consectetur amet excepturi asperiores ipsam dolorum possimus dolore. Debitis velit inventore incidunt nostrum!</h2>
  <br><br>
  <div class="grid ms-5">
    <h3 class="underline underline-offset-6 text-orange-200">Objetivo profesional:</h3>
    <br>
    <h3 class="text-md">Lorem ipsum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut asperiores vitae error laborum excepturi consequuntur recusandae suscipit fugit placeat, quo veritatis maxime tempora aperiam quod aliquid voluptas, cum, eveniet aut.dolor sit amet consectetur adipisicing elit. Aspernatur natus quam ullam, veniam praesentium accusamus blanditiis officiis similique totam eveniet saepe error facere, odit in! Velit nam vel voluptates alias!</h3>
    <br><br>
    <div class="flex w-full justify-center"> <Button>Leer mas Sobre mi</Button></div>
   
  </div>
</div>
<div class="col-span-5 grid justify-center">

  <Card class="w-100">
    <div class="p-3">

      <h2 class="ms-7 text-cyan-200 text-xl p-2">Habilidades tecnicas:</h2>
      <ul class="list-disc list-inside text-sm ms-15">
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Otro más</li>
  <li>Otro más</li>
  <li>Otro más</li>
</ul>
<br>
<hr class="border-t-1 border-cyan-300 mx-8">

<h2 class="ms-7 text-cyan-200 text-xl p-2">Habilidades blandas:</h2>
      <ul class="list-disc list-inside text-sm ms-15">
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Otro más</li>
  <li>Otro más</li>
  <li>Otro más</li>
</ul>

<br>
<hr class="border-t-1 border-cyan-300 mx-8">
<h2 class="ms-7 text-cyan-200 text-xl p-2">Idiomas:</h2>
      <ul class="flex justify-start gap-6 list-none font-semibold text-sm ms-15">
  <li>Espanol (Nativo)</li>
  <li>Ingles (Intermedio B1)</li>
</ul>
<br>

    </div>
  </Card>
  
</div>

<div class="col-span-1"></div>


</div>


</div>







</template>
