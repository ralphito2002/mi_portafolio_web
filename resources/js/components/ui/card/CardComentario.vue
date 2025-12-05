<script setup lang="js">
import { computed } from 'vue';

const props = defineProps({
  usuario: String,
  fecha: String,
  comentario: String,
  reaccion: String
});


const reacciones = {
  like: "👍",
  corazon: "❤️",
  confeti: "🎉",
  cool: "😎",
  excelente: "💯",
  estrella: "⭐",
  feliz: "😺",
  enojo:" 😠"
};


const emojiReaccion = computed(() => {
  return reacciones[props.reaccion];
});


</script>

<template>

  <div class="bg-black text-card-foreground rounded-lg border-2 border-turquesaBtnText overflow-hidden transition-discrete ease-in-out duration-300 hover:bg-gradient-to-r to-black from-turquesaBtnBorder/40  hover:shadow-[0_0_25px_5px_rgba(41,158,154,0.7)]">

    <div class=" grid grid-cols-3 ">

      <div class=" col-span-2 text-xs font-bold text-purple-100"><i class="fa-solid fa-user p-3 me-4"></i>{{ usuario }}</div>
      <div class=" col-span-1 flex justify-end pe-3 items-center text-xs text-orange-100"><i class="fa-solid fa-calendar-days p-2 me-4"></i>{{ fecha }}</div>
     
    </div>
    <hr>

     <p class=" bg-black text-sm text-white/90 p-5 overflow-y-auto"><i class="fa-solid fa-comment me-4"></i>{{ comentario }}</p>

    <div class="flex justify-end items-center">
      <span class="text-2xl py-1 pe-4">{{ emojiReaccion }}</span>
    </div>
  </div>

</template>
