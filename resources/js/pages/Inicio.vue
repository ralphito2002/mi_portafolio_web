<script setup>
import Button from '@/components/ui/button/Button.vue';
import Card from '@/components/ui/card/Card.vue';
import EncabezadoSeccion from '@/components/EncabezadoSeccion.vue';
import CardComentario from '@/components/ui/card/CardComentario.vue';
import Dialog from '@/components/ui/dialog/Dialog.vue';
import CardTecnologia from '@/components/ui/card/CardTecnologia.vue';
import CardServicio from '@/components/ui/card/CardServicio.vue';
import DialogProyecto from '@/components/ui/dialog/DialogProyecto.vue';
import DialogTecnologia from '@/components/ui/dialog/DialogTecnologia.vue';

import { ref, onMounted } from "vue";
import axios from "axios";

const proyectoSeleccionado = ref(null);


function abrirModal(proyecto) {
  proyectoSeleccionado.value = proyecto
}

const frases = [
  "Creatividad en código",
  "Código con propósito",
  "Me encantaria trabajar juntos!",
  "Ideas convertidas en software",
  "Diseño y lógica en equilibrio",
  "Pensado para personas, construido con tecnología",
  "Mejoramiento continuo",
  "Busca de experiencias y oportunidades."
];

function cambiarFrase() {
  const frasesField = document.getElementById("frasesField");
  let frase = 0;

  frasesField.textContent = frases[frase];

  setInterval(() => {
    frasesField.style.opacity = 0;

    setTimeout(() => {
      frase = (frase + 1) % frases.length;
      frasesField.textContent = frases[frase];
      frasesField.style.opacity = 1;
    }, 600);
  }, 4000);
}

const proyectos = ref([]);

const cargarProyectos = async () => {
  try {
    const response = await axios.get("/api/proyectos");
    proyectos.value = response.data.data;
  } catch (error) {
    console.error("Error al cargar proyectos:", error);
  }
};

const comentarios = ref([]);

const cargarComentarios = async () => {
  try {
    const response = await axios.get("/api/ultimosComentarios");
    comentarios.value = response.data.data;
  } catch (error) {
    console.error("Error al cargar comentarios:", error);
  }
};

const tecnologias = ref([]);

const cargarTecnologias = async () => {

  try {
    const response = await axios.get("/api/tecnologias");
    tecnologias.value = response.data.data;
    console.log(tecnologias.value);

  } catch (error) {
    console.error("Error al cargar tecnologias:", error);
  }

};

const habilidadesBlandas = ref([]);
const habilidadesTecnicas = ref([]);

const cargarHabilidades = async () => {

  try {
    const response = await axios.get('/api/habilidades');

    habilidadesBlandas.value = response.data.data.filter(habilidad => habilidad.tipo === 'blanda');
    habilidadesTecnicas.value = response.data.data.filter(habilidad => habilidad.tipo === 'tecnica');

  } catch (error) {
    console.error("Error al cargar habilidades:", error);
  }

};


const servicios = ref([]);

const cargarServicios = async () => {

  try {

    const response = await axios.get("/api/servicios");
    servicios.value = response.data.data;

  } catch (error) {
    console.error("Error al cargar servicios:", error);
  }

};


const tecnologiaSeleccionada = ref(null);

const seleccionarTecnologia = (tecnologia) => {
  tecnologiaSeleccionada.value = tecnologia;
};


onMounted(() => {
  cambiarFrase();
  cargarHabilidades();
  cargarServicios();
  cargarComentarios();
  cargarTecnologias();
  cargarProyectos();

});

</script>




<template>
  <section key="inicio" class="page">




    <!--  PRESENTACION   -->

    <div class="grid grid-cols-1 md:grid-cols-12 py-9 gap-8 px-4">

      <!-- ESPACIO IZQUIERDA (solo desktop) -->
      <div class="hidden md:block md:col-span-1"></div>

      <!-- IZQUIERDA -->
      <div class="col-span-1 md:col-span-5 text-center md:text-left">

        <h3 class="text-sm md:text-lg mb-5 text-cyan-200 underline underline-offset-8">
          Portafolio profesional WEB
        </h3>

        <img src="/images/RalphAbProfile.jpg" alt="" class="md:hidden w-full m-3 max-w-xs  h-64  rounded-2xl border-4 
             shadow-[0_0_25px_5px_rgba(41,158,154,0.7)] 
             object-cover object-center md:object-right border-white mx-auto">

        <h1 class="text-3xl md:text-5xl font-semibold mb-5 leading-tight">
          RALPH SEBASTIAN ABARCA RODRIGUEZ
        </h1>

        <h2 class="text-base md:text-xl mb-5 text-orange-200">
          Desarrollador Fullstack | Informatico Empresarial
        </h2>

        <hr class="mb-8 border-cyan-300">

        <h3 class="text-base md:text-xl mb-10">
          Apasionado por la tecnologia, el diseño y solucion de problemas a traves del codigo.
          En este espacio muestro quien soy, que hago y como puedo ayudarte.
        </h3>

        <h1 id="frasesField" class="text-xl md:text-3xl font-semibold mb-12 text-emerald-400">
          Me encantaria trabajar juntos!
        </h1>

        <div class="flex flex-col md:flex-row justify-center md:justify-start gap-4 md:gap-8">
          <a href="/curriculums"><Button class="w-full md:w-auto">Curriculum Vitae CV</Button></a>
          <a href="/contactame"><Button class="w-full md:w-auto">Contactame</Button></a>
        </div>

      </div>

      <!-- DERECHA -->
      <div class="col-span-1 md:col-span-5 grid justify-center gap-5">

        <img src="/images/RalphAbProfile.jpg" alt="" class="hidden md:block w-full max-w-xs md:max-w-md h-64 md:h-80 rounded-2xl border-4 
             shadow-[0_0_25px_5px_rgba(41,158,154,0.7)] 
             object-cover object-center md:object-right border-white mx-auto">

        <Card class="w-full max-w-xs md:max-w-md mx-auto">
          <div class="p-3 backdrop-blur-xs">
            <span class="text-sm md:text-base">
              <i class="fa-solid fa-user p-2 me-4"></i>Ralph Abarca R.<br>
              <i class="fa-solid fa-cake-candles p-2 me-4"></i>23 años.<br>
              <i class="fa-solid fa-at p-2 me-4"></i>Ralfhsebastiaar@gmail.com<br>
              <i class="fa-solid fa-graduation-cap p-2 me-4"></i>Universidad de Costa Rica.<br>
              <i class="fa-solid fa-house p-2 me-4"></i>Siquirres, Limón, Costa Rica
            </span>
          </div>
        </Card>

      </div>

      <!-- ESPACIO DERECHA -->
      <div class="hidden md:block md:col-span-1"></div>

    </div>

    <!--  FIN PRESENTACION   -->


    <!--  LINEA SEPARADORA   -->
    <div class="w-full h-1 bg-white shadow-[0_0_12px_3px_rgba(34,211,238,0.8)]"></div>


    <!--  SOBRE MI   -->
    <div class="backdrop-blur-md px-4 md:px-10">

      <EncabezadoSeccion titulo="Sobre Mi"></EncabezadoSeccion>

      <!-- CONTENIDO -->
      <div class="grid grid-cols-1 md:grid-cols-12 py-10 gap-8">

        <!-- ESPACIO -->
        <div class="hidden md:block md:col-span-1"></div>

        <!-- TEXTO -->
        <div class="col-span-1 md:col-span-5">

          <h2 class="text-sm md:text-base mb-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit...
          </h2>

          <h2 class="text-sm md:text-base mb-6">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit...
          </h2>

          <div class="md:ml-5">

            <h3 class="underline underline-offset-4 text-orange-200 mb-3">
              Objetivo profesional:
            </h3>

            <h3 class="text-sm md:text-md mb-6">
              Lorem ipsum dolor sit amet consectetur adipisicing elit...
            </h3>

            <div class="flex justify-center md:justify-start">
              <a href="/sobreMi">
                <Button class="w-full md:w-auto">Leer mas Sobre mi</Button>
              </a>
            </div>

          </div>

        </div>

        <!-- CARD -->
        <div class="col-span-1 md:col-span-5 flex justify-center">

          <Card class="w-full max-w-sm md:max-w-md">
            <div class="p-4">

              <!-- TECNICAS -->
              <h2 class="text-cyan-200 text-lg md:text-xl mb-3">
                Habilidades tecnicas:
              </h2>

              <ul class="list-disc list-inside text-sm space-y-2 ml-4">
                <li v-for="habilidad in habilidadesTecnicas">
                  {{ habilidad.nombre }}
                </li>
              </ul>

              <hr class="my-6 border-cyan-300">

              <!-- BLANDAS -->
              <h2 class="text-cyan-200 text-lg md:text-xl mb-3">
                Habilidades blandas:
              </h2>

              <ul class="list-disc list-inside text-sm space-y-2 ml-4">
                <li v-for="habilidad in habilidadesBlandas">
                  {{ habilidad.nombre }}
                </li>
              </ul>

              <hr class="my-6 border-cyan-300">

              <!-- IDIOMAS -->
              <h2 class="text-cyan-200 text-lg md:text-xl mb-3">
                Idiomas:
              </h2>

              <ul class="flex flex-wrap gap-4 font-semibold text-sm ml-4">
                <li>Español (Nativo)</li>
                <li>Inglés (Intermedio B1)</li>
              </ul>

            </div>
          </Card>

        </div>

        <!-- ESPACIO -->
        <div class="hidden md:block md:col-span-1"></div>

      </div>

    </div>



<!-- SERVICIOS -->
<div class="px-4 md:px-10 py-16">

  <EncabezadoSeccion titulo="Servicios"></EncabezadoSeccion>

  <!-- DESCRIPCIÓN -->
  <div class="max-w-3xl mx-auto text-center mt-6 mb-12">
    <p class="text-sm md:text-base text-gray-300">
      Te ayudo a transformar tus ideas en soluciones digitales reales.
      Desde la planificación hasta la puesta en producción, puedo acompañarte en todo el proceso.
    </p>
  </div>

  <!-- GRID -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">

    <!-- 1. PLANIFICACIÓN -->
    <div class="group border border-cyan-500/30 rounded-2xl p-6 
                hover:shadow-[0_0_20px_3px_rgba(34,211,238,0.4)] 
                transition-all duration-300 hover:-translate-y-2 backdrop-blur-lg">

      <div class="text-4xl mb-4 text-cyan-400">
        <i class="fa-solid fa-lightbulb"></i>
      </div>

      <h3 class="text-xl font-semibold mb-3">Análisis y planificación</h3>

      <ul class="text-sm text-gray-400 space-y-2">
        <li>• Levantamiento de requerimientos</li>
        <li>• Definición de objetivos del proyecto</li>
        <li>• Estructuración de soluciones digitales</li>
      </ul>

    </div>

    <!-- 2. DISEÑO -->
    <div class="group border border-cyan-500/30 rounded-2xl p-6 
                hover:shadow-[0_0_20px_3px_rgba(34,211,238,0.4)] 
                transition-all duration-300 hover:-translate-y-2 backdrop-blur-lg">

      <div class="text-4xl mb-4 text-cyan-400">
        <i class="fa-solid fa-palette"></i>
      </div>

      <h3 class="text-xl font-semibold mb-3">Diseño UI/UX</h3>

      <ul class="text-sm text-gray-400 space-y-2">
        <li>• Diseño de interfaces modernas</li>
        <li>• Experiencia de usuario optimizada</li>
        <li>• Prototipos visuales</li>
      </ul>

    </div>

    <!-- 3. DESARROLLO -->
    <div class="group border border-cyan-500/30 rounded-2xl p-6 
                hover:shadow-[0_0_20px_3px_rgba(34,211,238,0.4)] 
                transition-all duration-300 hover:-translate-y-2 backdrop-blur-lg">

      <div class="text-4xl mb-4 text-cyan-400">
        <i class="fa-solid fa-code"></i>
      </div>

      <h3 class="text-xl font-semibold mb-3">Desarrollo Web</h3>

      <ul class="text-sm text-gray-400 space-y-2">
        <li>• Aplicaciones web (SPA / sistemas)</li>
        <li>• Desarrollo Frontend y Backend</li>
        <li>• APIs y lógica de negocio</li>
      </ul>

    </div>

    <!-- 4. BASES DE DATOS -->
    <div class="group border border-cyan-500/30 rounded-2xl p-6 
                hover:shadow-[0_0_20px_3px_rgba(34,211,238,0.4)] 
                transition-all duration-300 hover:-translate-y-2 backdrop-blur-lg">

      <div class="text-4xl mb-4 text-cyan-400">
        <i class="fa-solid fa-database"></i>
      </div>

      <h3 class="text-xl font-semibold mb-3">Bases de datos</h3>

      <ul class="text-sm text-gray-400 space-y-2">
        <li>• Modelado y diseño de datos</li>
        <li>• Optimización de consultas</li>
        <li>• Integración con aplicaciones</li>
      </ul>

    </div>

    <!-- 5. DEPLOY -->
    <div class="group border border-cyan-500/30 rounded-2xl p-6 
                hover:shadow-[0_0_20px_3px_rgba(34,211,238,0.4)] 
                transition-all duration-300 hover:-translate-y-2 backdrop-blur-lg">

      <div class="text-4xl mb-4 text-cyan-400">
        <i class="fa-solid fa-rocket"></i>
      </div>

      <h3 class="text-xl font-semibold mb-3">Deploy y hosting</h3>

      <ul class="text-sm text-gray-400 space-y-2">
        <li>• Publicación en servidores</li>
        <li>• Configuración de dominio</li>
        <li>• Puesta en producción</li>
      </ul>

    </div>

    <!-- 6. INTEGRACIONES -->
    <div class="group border border-cyan-500/30 rounded-2xl p-6 
                hover:shadow-[0_0_20px_3px_rgba(34,211,238,0.4)] 
                transition-all duration-300 hover:-translate-y-2 backdrop-blur-lg">

      <div class="text-4xl mb-4 text-cyan-400">
        <i class="fa-solid fa-credit-card"></i>
      </div>

      <h3 class="text-xl font-semibold mb-3">Integraciones</h3>

      <ul class="text-sm text-gray-400 space-y-2">
        <li>• Pasarelas de pago</li>
        <li>• APIs externas</li>
        <li>• Funcionalidades avanzadas</li>
      </ul>

    </div>

  </div>

  <!-- CTA -->
  <div class="text-center mt-14">
    <h3 class="text-xl text-white mb-4">¿Tienes una idea en mente?</h3>

    <a href="/contactame">
      <Button class="px-6 py-3">Trabajemos juntos</Button>
    </a>
  </div>

</div>
<!-- FIN SERVICIOS -->





    <!--  PROYECTOS   -->



      <!--  PROYECTOS   -->
      <div class="backdrop-blur-md px-4 md:px-10">

        <EncabezadoSeccion titulo="Proyectos"></EncabezadoSeccion>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 py-10">

          <!-- TEXTO -->
          <div class="col-span-1 md:col-span-4">

            <p class="text-sm md:text-base mb-6 leading-relaxed">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Est aut magnam totam, odio repellat ut dignissimos repellendus...
            </p>

            <a href="/proyectos">
              <Button class="w-full md:w-auto">
                Ver sección de proyectos
              </Button>
            </a>

            <!-- MODAL -->
            <DialogProyecto v-if="proyectoSeleccionado" :key="proyectoSeleccionado.id_proyecto"
              :titulo="proyectoSeleccionado.titulo" :descripcion="proyectoSeleccionado.descripcion"
              :imagen="proyectoSeleccionado.imagen" :rol="proyectoSeleccionado.rol"
              :fecha_finalizacion="proyectoSeleccionado.fecha_finalizacion"
              :tecnologias="proyectoSeleccionado.tecnologias" />

          </div>

          <!-- GRID PROYECTOS -->
          <div class="col-span-1 md:col-span-8">

            <!-- TEXTO INDICATIVO -->
            <div class="mb-6 text-center text-gray-300 text-sm md:text-base">
              Selecciona un proyecto para ver su información
            </div>

            <!-- GRID -->
            <div class="
        grid 
        grid-cols-2 
        sm:grid-cols-2 
        lg:grid-cols-3 
        gap-6 p-3
      ">

              <div v-for="proyecto in proyectos" :key="proyecto.id_proyecto" @click="abrirModal(proyecto)">

                <button class="w-full" command="show-modal" commandfor="dialogProyecto">

                  <div class="
              overflow-hidden 
              border-2 border-turquesaBtnBorder 
              rounded-lg 
              group 
              transition-all duration-300
              hover:shadow-[0_0_12px_3px_rgba(34,211,238,0.8)]
              hover:-translate-y-1
              cursor-pointer
            ">

                    <!-- IMAGEN -->
                    <div class="w-full h-40 overflow-hidden">
                      <img class="object-cover w-full h-full group-hover:scale-110 transition duration-500"
                        :src="`/storage/proyectos/${proyecto.imagen}`" alt="imagenProyecto" />
                    </div>

                    <!-- TITULO -->
                    <div class="border-t-2 border-turquesaBtnBorder p-3 text-center">
                      <h5 class="text-sm md:text-md text-white">
                        {{ proyecto.titulo }}
                      </h5>
                    </div>

                  </div>

                </button>

              </div>

            </div>

          </div>

        </div>

      </div>

    <!-- FIN PROYECTOS   -->





    <!--  TECNOLOGIAS   -->

    <div class="backdrop-brightness-30">

      <EncabezadoSeccion titulo="Tecnologias"></EncabezadoSeccion>

      <!-- CONTENIDO TECNOLOGIAS   -->

      <br>

      <!-- INTERFAZ DESKTOP   -->

      <div class="hidden md:grid grid-cols-12 h-auto">

        <div class="col-span-1"></div>

        <div class="col-span-9 md:col-span-6 px-10 ">

          <div>
            <h3 class="text-md text-orange-200 mb-4">Front-End:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'frontend')"
                :key="tecnologia.id_tecnologia" :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />

            </div>

            <br>

            <h3 class="text-md text-orange-200 mb-4">Back-End:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'backend')"
                :key="tecnologia.id_tecnologia" :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />

            </div>

            <br>

            <h3 class="text-md text-orange-200 mb-4">Bases de datos:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'bd')" :key="tecnologia.id"
                :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />
            </div>

            <br>

            <h3 class="text-md text-orange-200 mb-4">Otras herramientas:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'otro')" :key="tecnologia.id"
                :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />
            </div>

            <br>
          </div>

        </div>

        <div class=" md:col-span-3">
          <CardTecnologia v-if="tecnologiaSeleccionada" :nombre="tecnologiaSeleccionada.nombre"
            :descripcion="tecnologiaSeleccionada.descripcion" :icono="tecnologiaSeleccionada.icono" />
          <div v-else
            class="border-2 h-full border-dashed animate-pulse border-gray-600 text-gray-400 p-6 flex justify-center items-center text-center rounded-lg">
            Selecciona una tecnología para ver los detalles
          </div>
        </div>

        <div class="col-span-2"></div>

      </div>


      <!-- INTERFAZ MOBILE   -->

      <div class="md:hidden grid grid-cols-12 h-auto">

        <div class="col-span-1"></div>

        <div class="col-span-10   ">

          <div>
            <h3 class="text-md text-orange-200 mb-4">Front-End:</h3>

            <div class="flex gap-7 flex-wrap">

              <button v-for="tecnologia in tecnologias.filter(t => t.categoria === 'frontend')"
                :key="tecnologia.id_tecnologia" command="show-modal" commandfor="dialogTecnologia"
                class="w-14 h-12 flex-shrink-0 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out"
                @click="seleccionarTecnologia(tecnologia)">

                <img :src="`/icons/tecnologias/${tecnologia.icono}`"
                  class="w-full h-full object-contain rounded-2xl transition-all duration-300" :class="{
                    'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400':
                      tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                    'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)]':
                      tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                  }" />

              </button>

            </div>

            <br>

            <h3 class="text-md text-orange-200 mb-4">Back-End:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'backend')"
                :key="tecnologia.id_tecnologia" :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />

            </div>

            <br>

            <h3 class="text-md text-orange-200 mb-4">Bases de datos:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'bd')" :key="tecnologia.id"
                :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />
            </div>

            <br>

            <h3 class="text-md text-orange-200 mb-4">Otras herramientas:</h3>

            <div class="flex gap-7">
              <img v-for="tecnologia in tecnologias.filter(t => t.categoria === 'otro')" :key="tecnologia.id"
                :src="`/icons/tecnologias/${tecnologia.icono}`"
                class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out" :class="{
                  'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400 animate-bounce':
                    tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
                  'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse':
                    tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
                }" @click="seleccionarTecnologia(tecnologia)" />
            </div>

            <br>
          </div>

        </div>


        <div class="col-span-1"></div>

      </div>



      <br>

      <div class="grid grid-cols-12">

        <div class="col-span-3 md:col-span-7">
        </div>

        <div class="col-span-6 md:col-span-3 flex items-center justify-center gap-7">
          <a href="/tecnologias"><Button>Ver tecnologias</Button></a>
        </div>
        <div class="col-span-3 md:col-span-2"></div>

        <br><br>

      </div>

      <DialogTecnologia v-if="tecnologiaSeleccionada" :key="tecnologiaSeleccionada.id_tecnologia"
        :nombre="tecnologiaSeleccionada.nombre" :descripcion="tecnologiaSeleccionada.descripcion"
        :icono="tecnologiaSeleccionada.icono"></DialogTecnologia>

    </div>
    <!-- FIN TECNOLOGIAS   -->




    <!--  COMENTARIOS   -->
    <div>

      <EncabezadoSeccion titulo="Comentarios"></EncabezadoSeccion>

      <div class="px-4 md:px-10 py-10">

        <!-- CONTENEDOR -->
        <div class="max-w-7xl mx-auto">

          <!-- GRID DE COMENTARIOS -->
          <div class="
        grid 
        grid-cols-1 
        sm:grid-cols-2 
        lg:grid-cols-3 
        xl:grid-cols-4 
        gap-6
      ">

            <CardComentario v-for="comentario in comentarios.slice(0, 8)" :key="comentario.id_comentario"
              :usuario="comentario.nombre_usuario" :fecha="comentario.fecha_creacion"
              :comentario="comentario.comentario" :reaccion="comentario.reaccion"
              class="w-full hover:scale-105 transition" />

          </div>

          <!-- BOTONES -->
          <div class="flex flex-col md:flex-row justify-center items-center mt-10 gap-4 md:gap-10">

            <Button command="show-modal" commandfor="modalNuevoComentario" class="w-full md:w-auto">
              Escribir comentario
            </Button>

            <a href="/comentarios" class="w-full md:w-auto">
              <Button class="w-full md:w-auto">
                Ver más comentarios
              </Button>
            </a>

          </div>

          <Dialog @comentario-creado="cargarComentarios"></Dialog>

        </div>

      </div>

    </div>
    <!-- FIN COMENTARIOS   -->


  </section>
</template>

<style></style>
