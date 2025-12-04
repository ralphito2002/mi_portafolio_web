<script setup> 

import { ref, onMounted } from 'vue';
import axios from 'axios';
import { initAccordions, initFlowbite } from 'flowbite'
import DialogTecnologia from '@/components/ui/dialog/DialogTecnologia.vue';
import Card from '@/components/ui/card/Card.vue';


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
};




onMounted(() => {
    cargarTecnologias();
    initFlowbite();
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

    

<div class="mb-4">
    <ul class="flex flex-wrap [&_button]:text-lg [&_button]:hover:border-white [&_button]:ease-in-out [&_button]:transition-all [&_button]:duration-150  [&_button[aria-selected='true']]:border-turquesaBtnBorder [&_button[aria-selected='true']]:border-b-3 [&_button[aria-selected='true']]:text-xl font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
      
      <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-white" id="frontend-tab" data-tabs-target="#frontend" type="button" role="tab" aria-controls="frontend" aria-selected="false">Front-end</button>
        </li>

        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" id="backend-tab" data-tabs-target="#backend" type="button" role="tab" aria-controls="backend" aria-selected="false">Back-end</button>
        </li>

        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2  text-turquesaBtnTextrounded-t-base hover:text-fg-brand hover:border-brand" id="bd-tab" data-tabs-target="#bd" type="button" role="tab" aria-controls="bd" aria-selected="false">Bases de datos</button>
        </li>

        <li role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" id="contacts-tab" data-tabs-target="#otras" type="button" role="tab" aria-controls="otras" aria-selected="false">Otras..</button>
      
          </li>
    </ul>
</div>
<Card class="bg-black/40"> 
<div id="default-tab-content " class="p-3">
    <div class="hidden p-4 rounded-base bg-neutral-secondary-soft" id="frontend" role="tabpanel" aria-labelledby="frontend-tab">
       
      <div class="text-left text-4xl text-turquesaBtnText font-semibold">Front-end</div>
      <br>
      <hr>
      <br>
      <p class="text-sm text-body">El Front-end es la parte de un sitio web o aplicación con la que el usuario interactúa directamente. Incluye la estructura, el diseño, los estilos, las animaciones y la lógica en el navegador.
      <br><br><br>
      <strong class="font-medium text-heading">Para construir estas interfaces utilizo las siguientes tecnologías:</strong></p>

      <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="grid grid-cols-5  gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
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
      


    <div class="hidden p-4 rounded-base bg-neutral-secondary-soft" id="backend" role="tabpanel" aria-labelledby="backend-tab">
    
      <div class="text-left text-4xl text-turquesaBtnText font-semibold">Back-end</div>
      <br>
      <hr>
      <br>
      <p class="text-sm text-body">El Back-end es la parte interna de un sitio web o aplicación, encargada de procesar la lógica, manejar los datos, gestionar la seguridad y conectar la información entre el servidor y el usuario.
      <br><br><br>
      <strong class="font-medium text-heading">Para desarrollar esta capa lógica y funcional utilizo las siguientes tecnologías:</strong></p>

      <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="grid grid-cols-5  gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
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


    <div class="hidden p-4 rounded-base bg-neutral-secondary-soft" id="bd" role="tabpanel" aria-labelledby="bd-tab">
    
       <div class="text-left text-4xl text-turquesaBtnText font-semibold">Bases de datos</div>
      <br>
      <hr>
      <br>
      <p class="text-sm text-body">El manejo de Bases de datos permite almacenar, organizar y consultar la información que utilizan las aplicaciones. Incluye el diseño de estructuras, la creación de consultas eficientes y la gestión de datos de forma segura y optimizada.
      <br><br><br>
      <strong class="font-medium text-heading">Para trabajar con datos de manera confiable y estructurada utilizo las siguientes tecnologías:</strong></p>

      <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="grid grid-cols-5  gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'bd')"
            :key="tecnologia.id_tecnologia"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-12 h-12 cursor-pointer rounded-lg transition-all duration-300 ease-in-out"
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



    <div class="hidden p-4 rounded-base bg-neutral-secondary-soft" id="otras" role="tabpanel" aria-labelledby="otras-tab">
    
       <div class="text-left text-4xl text-turquesaBtnText font-semibold">Otras tecnologias</div>
      <br>
      <hr>
      <br>
      <p class="text-sm text-body">Además de las áreas principales de desarrollo, utilizo diversas herramientas y lenguajes que complementan mi trabajo diario, apoyan el flujo de desarrollo y mejoran la calidad de los proyectos.
      <br><br><br>
      <strong class="font-medium text-heading">Entre las tecnologías adicionales que manejo se encuentran las siguientes:</strong></p>

      <div class="">
        <TransitionGroup
  name="fade"
  tag="div"
  class="">
    <button class="grid grid-cols-5  gap-5 w-full overflow-x-auto p-5 scrollable" command="show-modal" commandfor="dialogTecnologia">  <img  
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
</Card>

<DialogTecnologia 
  v-if="tecnologiaSeleccionada"
  :key="tecnologiaSeleccionada.id_tecnologia"
  :nombre="tecnologiaSeleccionada.nombre"
  :descripcion="tecnologiaSeleccionada.descripcion"
  :icono="tecnologiaSeleccionada.icono"
  
  ></DialogTecnologia>
    

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


