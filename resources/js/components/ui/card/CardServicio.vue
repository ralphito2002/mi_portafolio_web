<template>
  <div
    class="border-3 overflow-hidden border-turquesaBtnText rounded-ee-none rounded-2xl w-90 h-full mx-5 bg-black shadow-[0_0_20px_3px_rgba(41,158,154,0.7)]"
  >
  <div class="bg-purple-950/25">


    <!-- NOMBRE -->
    <div class="text-2xl p-4 text-center text-turquesaBtnText font-bold">
      {{ nombre }}
    </div>

    </div>

    <hr class="border border-t-stone-500" />

    <!-- DESCRIPCIÓN -->
    <div class="bg-black p-6 text-sm text-gray-200">
      
        <ul class="p-4">
            <li v-for="descripcion in descripcion" class="list-disc py-3 text-md">{{descripcion.descripcion}}</li>
        </ul>
     
    </div>
    
  </div>
</template>

<script setup>
const props = defineProps({
  nombre: String,
  descripcion: Array,
});
</script>

