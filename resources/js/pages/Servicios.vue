<script setup>

import { ref, onMounted } from 'vue';
import axios from 'axios';
import CardServicio from '@/components/ui/card/CardServicio.vue';
import Button from '@/components/ui/button/Button.vue';
import { computed } from 'vue';

const servicios = ref([]);
const filtroServicios = ref('');

const serviciosFiltrados = computed(() =>
  servicios.value.filter(s =>
    s.nombre.toLowerCase().includes(filtroServicios.value.toLowerCase())
  )
);

const cargarServicios = async () => {

  try {

    const response = await axios.get("/api/servicios");
    servicios.value = response.data.data;

  } catch (error) {
    console.error("Error al cargar servicios:", error);
  }

};

onMounted(() => {
  cargarServicios();
});

</script>

<template>

<section key="servicios" class="page px-4 md:px-10 py-10">

  <!-- TITULO -->
  <h2 class="text-turquesaBtnText text-3xl md:text-5xl text-center mb-10 animate-pulse">
    Servicios
  </h2>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 max-w-7xl mx-auto">

    <!-- IZQUIERDA -->
    <div class="lg:col-span-1 space-y-6">

      <p class="text-sm md:text-base text-gray-300">
        Ofrezco soluciones digitales enfocadas en rendimiento, diseño y funcionalidad.
        Cada servicio está pensado para adaptarse a las necesidades de cada proyecto.
      </p>

      <p class="text-sm text-gray-400">
        Desde la planificación hasta la implementación final, puedo acompañarte en todo el proceso.
      </p>

      <hr class="border-white/20">

      <!-- LISTA -->
      <div>
        <h3 class="text-orange-200 underline mb-3">Servicios incluidos:</h3>

        <ul class="grid grid-cols-2 gap-2 text-sm font-semibold text-gray-300">
          <li v-for="servicio in servicios" :key="servicio.id_servicio">
            • {{ servicio.nombre }}
          </li>
        </ul>
      </div>

    </div>

    <!-- DERECHA -->
    <div class="lg:col-span-2">

      <!-- BUSCADOR -->
      <input
        v-model="filtroServicios"
        type="text"
        placeholder="Buscar servicio..."
        class="w-full mb-6 p-3 rounded-lg bg-gray-800 border border-cyan-600 text-gray-200 focus:outline-none focus:ring-2 focus:ring-cyan-400"
      />

      <!-- CARDS -->
      <div class="grid gap-6 max-h-[600px] overflow-y-auto pr-2">

        <TransitionGroup name="servicios-fade" tag="div" class="space-y-4">

          <div
            v-for="servicio in serviciosFiltrados"
            :key="servicio.id_servicio"
            class="border border-cyan-500/30 rounded-xl p-4 bg-black/40 backdrop-blur-md 
                   hover:shadow-[0_0_15px_3px_rgba(34,211,238,0.4)] transition-all duration-300"
          >

            <div class="flex flex-col md:flex-row gap-4">

              <!-- IMAGEN -->
              <img
                class="w-full md:w-32 h-32 object-cover rounded-lg border border-cyan-500/30"
                src="/images/fondos/fondo2.png"
              />

              <!-- TEXTO -->
              <div class="flex-1">

                <h3 class="text-lg text-cyan-400 mb-2">
                  {{ servicio.nombre }}
                </h3>

                <p class="text-sm text-gray-300">
                  {{ servicio.descripcionGeneral }}
                </p>

              </div>

            </div>

          </div>

        </TransitionGroup>

      </div>

    </div>

  </div>

</section>

</template>


<style scoped>
.servicios-fade-enter-active,
.servicios-fade-leave-active {
  transition: opacity 0.2s ease, transform 0.2s ease;
}

.servicios-fade-enter-from {
  opacity: 0;
  transform: translateX(40px);
}

.servicios-fade-enter-to {
  opacity: 1;
  transform: translateX(0);
}

.servicios-fade-leave-from {
  opacity: 1;
  transform: translateX(0);
}

.servicios-fade-leave-to {
  opacity: 0;
  transform: translateX(-10px);
}
</style>