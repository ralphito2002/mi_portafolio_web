<template>
  <div class="group group-hover:transition-discrete border-3 hover:shadow-[0_0_30px_5px_rgba(100,100,100,100)] hover:border-turquesaBtnBorder border-turquesaBtnBg rounded-2xl w-80 h-full overflow-hidden mx-5 ">
  
    <div class="bg-turquesaBtnBg/30 duration-300 group-hover:bg-turquesaBtnBg">


    <!-- NOMBRE bg-black shadow-[0_0_20px_1px_rgba(41,158,154,0.7)] -->
    <div class="text-2xl p-4 text-center text-turquesaBtnText/40 duration-300 group-hover:text-turquesaBtnText font-bold">
      {{ nombre }}
    </div>

    </div>

    <hr class="border border-t-stone-500" />

    <!-- DESCRIPCIÓN -->
    <div class="bg-black p-6 text-sm  overflow-auto text-gray-200/40 duration-300 group-hover:text-gray-200">
      
        <ul class="px-4 h-80 overflow-auto">
            <li v-for="descripcion in descripcion" class="list-disc py-3 text-md">{{descripcion.descripcion}}</li>
        </ul>
     
    </div>


    <!-- Botones de accion -->
    <div class="h-16 bg-turquesaBtnBg border flex justify-end items-center text-gray-200 border-t-stone-500">

      <button class=" me-3 p-1 rounded-md border border-turquesaBtnBorder hover:bg-white hover:text-black hover:border-turquesaBtnBorder"> <i class="fa-solid fa-eye"></i></button>
      <button class=" me-3 p-1 rounded-md border border-turquesaBtnBorder hover:bg-white hover:text-black hover:border-turquesaBtnBorder"> <i class="fa-solid fa-info"></i></button>
      <button class=" me-3 p-1 rounded-md border border-turquesaBtnBorder hover:bg-white hover:text-black hover:border-turquesaBtnBorder"> <i class="fa-solid fa-list"></i></button>

    </div>


    
  </div>
</template>

<script setup>
const props = defineProps({
  nombre: String,
  descripcion: Array,
});
</script>

<style>




</style>

