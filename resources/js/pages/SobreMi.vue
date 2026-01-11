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
  <section key="sobreMi" class="page">

 
 <div class="grid grid-cols-12">

  <div class="col-span-1"></div>
  <div class="col-span-4">

    <div><h2 class="text-turquesaBtnText animate-pulse my-10 items-center flex justify-center text-5xl">Sobre Mi</h2></div>
    
    <div class="font-light text-center text-md">
    
      <p> Soy un desarrollador enfocado en crear soluciones web eficientes, funcionales y con una identidad visual única. Me apasiona diseñar interfaces con personalidad, construir sistemas bien estructurados y transformar ideas en experiencias tecnológicas reales.
Me gusta combinar creatividad con planificación técnica, y disfruto aprender cada día algo nuevo que mejore mi manera de desarrollar.
   </p>
    <br>
    <br>

    <div class="grid grid-cols-3 [&_img]:hover:scale-115 [&_img]:transition-transform [&_img]:ease-in-out [&_img]:duration-300 gap-4">

      <img class="rounded-2xl w-35 h-35" src="/images/fondos/fondo2.png" alt="">
      <img class="rounded-2xl w-35 h-35" src="/images/fondos/fondo2.png" alt="">
      <img class="rounded-2xl w-35 h-35" src="/images/fondos/fondo2.png" alt="">

    </div>

    <br>
    <br>

    <p>Actualmente desarrollo proyectos personales como RAAR, un universo digital que mezcla diseño, interacción y funcionalidades avanzadas. También trabajo en mi portafolio profesional y en soluciones a nivel empresarial utilizando Laravel, VueJS y tecnologías modernas.
</p>
    
    <br>
    <hr>
    <br>

    <h4 class="text-amber-200 mb-2 underline underline-offset-4 text-center text-lg font-semibold">Objetivo profesional:</h4>
    <p>Convertirme en un desarrollador web sólido y versátil, capaz de crear aplicaciones completas desde la base de datos y backend, hasta la interfaz visual y experiencia del usuario.
Mi objetivo es formar parte de proyectos donde pueda aportar valor real, mejorar procesos y seguir creciendo como profesional mientras aplico mis conocimientos en sistemas, diseño web, API REST, arquitectura y desarrollo de interfaces.
    </p><br>

    

</div>
<hr>
<br>
<p class="text-center text-lg font-semibold underline underline-offset-2">Mis habilidades:</p>
<br>
<div class="flex justify-center gap-6">

      <Button @click="btnHabilidadesBlandas" command="show-modal" commandfor="modalHabilidades">Habilidades blandas</Button>
      <Button @click="btnHabilidadesTecnicas" command="show-modal" commandfor="modalHabilidades">Habilidades tecnicas</Button>
      


    </div>
  </div>
  <div class="col-span-1"></div>
  
  <div class="col-span-5 m-10 px-5">

    <Card class="bg-black p-6 scrollable "> 


  <div class="">
    <dl class="divide-y divide-white/10">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text font-medium">Nombre completo</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Ralph Sebastian Abarca Rodriguez</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Rol profesional</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Desarrollador Full Stack • Diseñador Web • Creador Digital</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Ubicación</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Costa Rica (o “Trabajo remoto desde Costa Rica”)</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Disponibilidad</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Disponible para empleo remoto / presencial / híbrido / freelance</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Correo profesional</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Ralfhsebastiaar@gmail.com</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Educacion</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Bachillerato en Educación Media, Colegio Bilingue de Palmares (2019) <br><br>
        Bachillerato en informatica empresarial, Universidad de Costa Rica (2021 - Actualidad)</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Idiomas</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">Español (nativo) <br> Inglés (intermedio, nivel B2)</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Años de experiencia</dt>
        <dd class="mt-1 text-sm/6 text-gray-400 sm:col-span-2 sm:mt-0">+5 anos</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-100">Enlaces</dt>
        <dd class="mt-2 text-sm text-white sm:col-span-2 sm:mt-0">
          <ul role="list" class="divide-y divide-white/5 rounded-md border border-white/10">
            <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">
              <div class="flex w-0 flex-1 items-center">
                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-500">
                  <path d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <span class="truncate font-medium text-white">LinkedIn</span>
                </div>
              </div>
              <div class="ml-4 shrink-0">
                <a href="#" class="font-medium text-indigo-400 hover:text-indigo-300">Ver perfil</a>
              </div>
            </li>
            <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">
              <div class="flex w-0 flex-1 items-center">
                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-500">
                  <path d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" fill-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <span class="truncate font-medium text-white">GitHub</span>

                </div>
              </div>
              <div class="ml-4 shrink-0">
                <a href="#" class="font-medium text-indigo-200 hover:text-indigo-300">Ver repositorios</a>
              </div>
            </li>
          </ul>
        </dd>
      </div>
    </dl>
  </div>

</Card>
<br>

  </div>
  <div class="col-span-1"></div>



 </div>

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
