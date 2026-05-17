<script setup>

import Card from '@/components/ui/card/Card.vue';
import Button from '@/components/ui/button/Button.vue';
import DialogHabilidades from '@/components/ui/dialog/DialogHabilidades.vue';

import { ref, onMounted } from "vue";
import axios from "axios";

const habilidadesBlandas= ref([]);
const habilidadesTecnicas= ref([]);

const cargarHabilidades = async () => {
    try {
        const response = await axios.get('/api/habilidades');
       
        habilidadesBlandas.value = response.data.data.filter(habilidad => habilidad.tipo === 'blanda');
        habilidadesTecnicas.value = response.data.data.filter(habilidad => habilidad.tipo === 'tecnica');

    } catch (error) {
        console.error('Error al cargar las habilidades:', error);
    }
};

let habilidadesSeleccionadas = ref(null);

const btnHabilidadesBlandas = () => {
    habilidadesSeleccionadas.value = 'blandas';
};
const btnHabilidadesTecnicas = () => {
    habilidadesSeleccionadas.value = 'tecnicas';
};

onMounted(() => {
    cargarHabilidades();
});

</script>


<template>
  <section key="sobreMi" class="page px-4 md:px-10 py-10">

  <!-- TITULO -->
  

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-6xl mx-auto">

    <!-- IZQUIERDA -->
    <div>

      <h2 class="text-turquesaBtnText text-3xl md:text-5xl text-center mb-10 animate-pulse">
    Sobre Mi
  </h2>

      <!-- DESCRIPCIÓN -->
      <p class="font-light text-sm md:text-base text-center lg:text-left">
        Soy un desarrollador enfocado en crear soluciones web eficientes, funcionales y con una identidad visual única.
        Me apasiona diseñar interfaces con personalidad, construir sistemas bien estructurados y transformar ideas en experiencias tecnológicas reales.
      </p>

      <!-- IMÁGENES -->
      <div class="grid grid-cols-3 gap-3 my-8">
        <img class="rounded-2xl w-full h-24 md:h-28 object-cover hover:scale-105 transition" src="/images/fondos/fondo2.png">
        <img class="rounded-2xl w-full h-24 md:h-28 object-cover hover:scale-105 transition" src="/images/fondos/fondo2.png">
        <img class="rounded-2xl w-full h-24 md:h-28 object-cover hover:scale-105 transition" src="/images/fondos/fondo2.png">
      </div>

      <hr class="my-6 border-white/20">

      <!-- OBJETIVO -->
      <h4 class="text-amber-200 mb-3 underline text-center lg:text-left">
        Objetivo profesional
      </h4>

      <p class="text-sm text-gray-300">
        Convertirme en un desarrollador web sólido y versátil, capaz de crear aplicaciones completas desde la base de datos hasta la experiencia del usuario.
      </p>

      <!-- BOTONES -->
      <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 mt-8">
        <Button @click="btnHabilidadesBlandas" command="show-modal" commandfor="modalHabilidades">
          Habilidades blandas
        </Button>
        <Button @click="btnHabilidadesTecnicas" command="show-modal" commandfor="modalHabilidades">
          Habilidades técnicas
        </Button>
      </div>

    </div>

    <!-- DERECHA -->
    <div>

      <Card class="bg-black p-6 mx-10 max-h-[600px] overflow-y-auto">

        <dl class="divide-y divide-white/10 text-sm">

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Nombre</dt>
            <dd class="text-gray-400 sm:col-span-2">Ralph Sebastian Abarca Rodriguez</dd>
          </div>

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Rol</dt>
            <dd class="text-gray-400 sm:col-span-2">Full Stack • Diseñador Web</dd>
          </div>

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Ubicación</dt>
            <dd class="text-gray-400 sm:col-span-2">Costa Rica</dd>
          </div>

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Disponibilidad</dt>
            <dd class="text-gray-400 sm:col-span-2">Remoto / Freelance</dd>
          </div>

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Email</dt>
            <dd class="text-gray-400 sm:col-span-2">Ralfhsebastiaar@gmail.com</dd>
          </div>

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Educación</dt>
            <dd class="text-gray-400 sm:col-span-2">
              UCR - Informática Empresarial
            </dd>
          </div>

          <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
            <dt>Idiomas</dt>
            <dd class="text-gray-400 sm:col-span-2">
              Español / Inglés B2
            </dd>
          </div>

        </dl>

      </Card>

    </div>

  </div>

  <!-- MODALES -->
  <DialogHabilidades 
    v-if="habilidadesSeleccionadas === 'blandas'"
    :habilidades="habilidadesBlandas"
    tipo="blandas"/>

  <DialogHabilidades 
    v-if="habilidadesSeleccionadas === 'tecnicas'"
    :habilidades="habilidadesTecnicas"
    tipo="tecnicas"/>

</section>
</template>
