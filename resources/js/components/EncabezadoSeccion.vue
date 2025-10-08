<template>

<!--  LINEA SEPARADORA   -->

  <div class="w-full h-1 bg-white shadow-[0_0_12px_3px_rgba(34,211,238,0.8)]"></div>

<!-- TITULO TECNOLOGIAS   -->
  
<div class="grid grid-cols-12 pt-10">

  <div class="col-span-1"></div>

  <div class="col-span-1 flex items-center">
    <div class="h-1 flex-1 bg-turquesaBtnText"></div>
  </div>
  <div class="col-span-2 text-3xl text-turquesaBtnText text-center">{{titulo}}</div>
  <div class="col-span-6 flex items-center">
    <div class="h-1 flex-1 bg-turquesaBtnText animate-pulse"></div>
  </div>

  <div class="col-span-3"></div>
</div>

</template>

<script setup>

const props = defineProps({
  titulo: {
    type: String,
    required: true
  }
})
</script>