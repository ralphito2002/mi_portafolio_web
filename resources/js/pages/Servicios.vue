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

<section key="servicios" class="page">

  <div class="grid grid-cols-13 h-full">

    <div class="col-span-1"></div>
    <div class="col-span-4 ">

      <div>
        <h2 class="text-turquesaBtnText animate-pulse my-10 text-center text-5xl ">Servicios</h2>
      </div>

      <div class="text-lg text-center font-extralight">
        <p>En esta sección presento los servicios que ofrezco como desarrollador.
Cada servicio está pensado para aportar soluciones prácticas, eficientes y adaptadas a las necesidades de cada cliente.</p>

        <br>

        <p>Mi objetivo es brindar acompañamiento técnico de calidad, desde la creación de proyectos web hasta la optimización de sistemas ya existentes.</p>
     
        <br>
        <p class="font-semibold">Aquí podrás encontrar un resumen de cómo puedo ayudarte y las áreas en las que tengo experiencia.</p>
     
      </div><br><hr><br>

      <div class="text-left">
        <h2 class="text-orange-200  underline underline-offset-4">Aqui hay una lista de mis servicios y habilidades:</h2>

        <div class="flex justify-start items-start">

          <TransitionGroup name="fade" tag="ul"
            class="grid grid-cols-2 list-disc list-inside text-md font-bold space-y-2 my-3 w-full">
            <li v-for="servicio in servicios" :key="servicio.id_servicio">
              {{ servicio.nombre }}
            </li>
          </TransitionGroup>


        </div>
      </div>


    </div>

    <div class="col-span-1"></div>

    <div class="col-span-6  overflow-hidden">

      <div class="mx-10 mt-10 mb-5 px-5">
        <input v-model="filtroServicios" type="text" placeholder="Buscar servicio..."
          class="w-full p-2 rounded-md border border-turquesaBtnBorder bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-turquesaBtnBorder focus:border-transparent">

      </div>


      <TransitionGroup name="servicios-fade" tag="div" class="mx-10  overflow-y-scroll h-150 p-6">

        <div
          class="w-full border backdrop-blur-lg border-turquesaBtnBorder rounded-2xl mb-2 p-4 shadow-[0_0_15px_5px_rgba(100,100,100,0.7)] hover:shadow-[0_0_20px_10px_rgba(100,100,100,1)] ease-in-out transition-all duration-100"
          v-for="servicio in serviciosFiltrados" :key="servicio.id_servicio">

          <div class="grid grid-cols-8">

            <div class="col-span-2">
              <img class="rounded-md border border-turquesaBtnBorder" src="/images/fondos/fondo2.png" alt="">
            </div>

            <div class="col-span-5">
              <h2 class="text-turquesaBtnBorder text-lg text-left ms-4">{{ servicio.nombre }}</h2>
              <div class="p-2">
                <p class="text-sm text-gray-300 text-left  ms-4">{{ servicio.descripcionGeneral }}</p>
              </div>
            </div>

            <div class="col-span-1 flex justify-end items-center">

              <Button variant="secondary" class="w-full">Ver</Button>

              
            </div>

          </div>



        </div>


      </TransitionGroup>





    </div>
    <div class="col-span-1"></div>



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