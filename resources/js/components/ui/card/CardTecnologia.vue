<template>
  <div
    class="border-3 overflow-hidden border-turquesaBtnText rounded-2xl h-full mx-5 bg-black shadow-[0_0_20px_3px_rgba(41,158,154,0.7)]"
  >
  <div class="bg-turquesaBtnBg">
    <!-- ICONO DE TECNOLOGÍA -->
    <div class="flex justify-center pt-6">
      <img
        :src="`/icons/tecnologias/${icono}`"
        :alt="nombre"
        class="w-20 h-20 transition-transform duration-300 hover:scale-110"
      />
    </div>

    <!-- NOMBRE -->
    <div class="text-2xl p-4 text-center text-turquesaBtnText font-bold">
      {{ nombre }}
    </div>

    </div>

    <hr class="border border-t-stone-500" />

    <!-- DESCRIPCIÓN -->
    <div class="bg-black p-6 text-sm text-gray-200 text-center">
      {{ descripcion }}
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  nombre: String,
  descripcion: String,
  icono: String,
});
</script>

