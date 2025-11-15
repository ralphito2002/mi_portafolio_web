<script setup> 

import { ref, onMounted } from 'vue';
import axios from 'axios';
import { initAccordions } from 'flowbite'
import DialogTecnologia from '@/components/ui/dialog/DialogTecnologia.vue';

const tecnologias = ref([]);

const cargarTecnologias = async () => {

  try{
    const response = await axios.get("/api/tecnologias");
    tecnologias.value = response.data.data;

  } catch (error){
    console.error("Error al cargar tecnologias:", error);
  }

};

const tecnologiaSeleccionada = ref(null);

const seleccionarTecnologia = (tecnologia) => {
  tecnologiaSeleccionada.value = tecnologia;
  console.log("Tecnologia seleccionada:", tecnologiaSeleccionada.value.id_tecnologia);
};




onMounted(() => {
    cargarTecnologias();
    initAccordions();
});

</script>

<template>
    
    <div class="grid grid-cols-12">

  <div class="col-span-1"></div>
  <div class="col-span-4 ">

    <div><h2 class="text-turquesaBtnText animate-pulse my-10 text-center text-5xl ">Tecnologias</h2></div>
    
    <div class=" overflow-auto">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit maiores incidunt id impedit perferendis modi enim possimus. Commodi aut amet doloremque. Quam, nam et. Sint consectetur eveniet tenetur aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus corporis tempora minima deleniti, earum similique ullam voluptatem porro iusto soluta maxime rerum enim ipsam eligendi tenetur atque, sit repudiandae?

    <br><br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quis dolor laborum consequatur placeat, cumque voluptas esse fuga nulla reprehenderit inventore cupiditate laudantium aliquid explicabo vel illo. Voluptate, modi dolores.
    </div><br><br>
<div class="p-2 w-full border-2 border-dashed border-gray-400 text-gray-100 animate-pulse rounded-lg text-center">Puedes presionar en uno de los iconos para ver su informacion</div>


<br>

  </div>

  <div class="col-span-1"></div>
  
  <div class="col-span-5 m-10 overflow-auto h-142 scrollable px-5">

    <div class="mt-5">


<div id="accordion-collapse" data-accordion="collapse">

    <!-- Bloque 1 - FrontEnd   -->

  <h2 id="accordion-collapse-heading-1">
    <button type="button" 
    class="text-xl underline underline-offset-2 flex items-center justify-between w-full p-5 font-medium rtl:text-right border-2 border-turquesaBtnBorder rounded-xl" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
      <span><i class="fa-regular fa-eye mr-3"></i>Front-End</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>

  <!-- Cuerpo 1 - FrontEnd   -->

  <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
    <div class="px-5 py-3 mb-2 rounded-b-2xl border-2 bg-gray-900  border-turquesaBtnBorder">
       <p class="text-sm mb-2 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos officia assumenda ipsam excepturi quod reprehenderit dicta ab obcaecati voluptatum! Hic sed maxime iure dolore tempora, soluta omnis doloremque neque.</p>
    
    <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="flex gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'frontend')"
            :key="tecnologia.id_tecnologia"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-10 h-10 cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
            :class="{
              
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
          </button>
        </TransitionGroup>
      </div>
    </div>
  </div>

  <!-- Bloque 2 - backend   -->

  <h2 id="accordion-collapse-heading-2">
    <button type="button" class="text-xl underline underline-offset-2 flex items-center justify-between w-full p-5 font-medium rtl:text-right border-2 border-turquesaBtnBorder rounded-xl" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
      <span><i class="fas fa-cogs mr-3"></i>Back-End</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>

  <!-- cuerpo 2 - backend   -->

  <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
    <div class="px-5 py-3 mb-2 rounded-b-2xl border-2 bg-gray-900  border-turquesaBtnBorder">
       <p class="text-sm mb-2 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos officia assumenda ipsam excepturi quod reprehenderit dicta ab obcaecati voluptatum! Hic sed maxime iure dolore tempora, soluta omnis doloremque neque.</p>
    
    <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="flex gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'backend')"
            :key="tecnologia.id_tecnologia"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-10 h-10 cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
            :class="{
              
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
          </button>
        </TransitionGroup>
      </div>
    </div>
  </div>

    <!-- Bloque 3 - Bases de datos   -->
  <h2 id="accordion-collapse-heading-3">
    <button type="button" class="text-xl underline underline-offset-2 flex items-center justify-between w-full p-5 font-medium rtl:text-right border-2 border-turquesaBtnBorder rounded-xl" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
      <span><i class="fas fa-database mr-3"></i>Bases de datos y almacenaje</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>

  <!-- Cuerpo 3 - Bases de datos   -->

  <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
    <div class="px-5 py-3 mb-2 rounded-b-2xl border-2 bg-gray-900  border-turquesaBtnBorder">
       <p class="text-sm mb-2 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos officia assumenda ipsam excepturi quod reprehenderit dicta ab obcaecati voluptatum! Hic sed maxime iure dolore tempora, soluta omnis doloremque neque.</p>
    
    <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="flex gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'bd')"
            :key="tecnologia.id_tecnologia"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-10 h-10 cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
            :class="{
              
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
          </button>
        </TransitionGroup>
      </div>
    </div>
  </div>


   <!-- Bloque 4 - otros...   -->
  <h2 id="accordion-collapse-heading-4">
    <button type="button" class="text-xl underline underline-offset-2 flex items-center justify-between w-full p-5 font-medium rtl:text-right border-2 border-turquesaBtnBorder rounded-xl" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
      <span><i class="fa fa-tools mr-3"></i> Otras tecnologias</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>

  <!-- Cuerpo 4 - otros   -->
  <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
    <div class="px-5 py-3 mb-2 rounded-b-2xl border-2 bg-gray-900  border-turquesaBtnBorder">
       <p class="text-sm mb-2 p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quos officia assumenda ipsam excepturi quod reprehenderit dicta ab obcaecati voluptatum! Hic sed maxime iure dolore tempora, soluta omnis doloremque neque.</p>
    
    <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="flex gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'otro')"
            :key="tecnologia.id_tecnologia"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-10 h-10 cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
            :class="{
              
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)] hover:animate-pulse': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
          </button>
        </TransitionGroup>
      </div>
    </div>
  </div>

  <DialogTecnologia 
  v-if="tecnologiaSeleccionada"
  :key="tecnologiaSeleccionada.id_tecnologia"
  :nombre="tecnologiaSeleccionada.nombre"
  :descripcion="tecnologiaSeleccionada.descripcion"
  :icono="tecnologiaSeleccionada.icono"
  
  ></DialogTecnologia>


</div>
    </div>

  </div>
  <div class="col-span-1"></div>



 </div>


</template>


<style scoped>
.page-fade-enter-active, .page-fade-leave-active {
  transition: opacity 1.5s ease, transform 2s ease;
}
.page-fade-enter-from {
  opacity: 0;
  transform: translateX(40px);
}
.page-fade-enter-to {
  opacity: 1;
  transform: translateX(0);
}
.page-fade-leave-from {
  opacity: 1;
  transform: translateX(0);
}
.page-fade-leave-to {
  opacity: 0;
  transform: translateX(-10px);
}
/* Estado normal */
button[data-accordion-target] {
  background: linear-gradient(to right, #000000 70%, #299E9A 90%);
  transition: background 0.4s ease-in-out;
  margin-bottom: 1ch;
}

/* Hover */
button[data-accordion-target]:hover {
  background: linear-gradient(to right, #000000 50%, #299E9A 90%);
  color: white;
}

/* Cuando el acordeón está abierto */
button[aria-expanded="true"] {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
  background: linear-gradient(to right, #000000 20%, #299E9A 90%) !important;
  margin-bottom: 0 !important;
  color: rgb(241, 210, 153) !important;
}


</style>


