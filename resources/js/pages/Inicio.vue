<script setup>
import Button from '@/components/ui/button/Button.vue';
import Card from '@/components/ui/card/Card.vue';
import EncabezadoSeccion from '@/components/EncabezadoSeccion.vue';
import CardComentario from '@/components/ui/card/CardComentario.vue';
import Dialog from '@/components/ui/dialog/Dialog.vue';
import CardTecnologia from '@/components/ui/card/CardTecnologia.vue';
import CardServicio from '@/components/ui/card/CardServicio.vue';

import { ref, onMounted } from "vue";
import axios from "axios";



const frases = [
  "Primera frase",
  "Segunda frase",
  "Tercera frase",
  "Cuarta frase"
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

document.addEventListener("DOMContentLoaded", cambiarFrase);

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
    console.error("Error al cargar comentarios:", error);
  }

};

const servicios = ref([]);

const cargarServicios = async () => {

  try{

    const response = await axios.get("/api/servicios");
    servicios.value = response.data.data;
    console.log(servicios.value);

  } catch (error){
    console.error("Error al cargar los servicios:", error);
  }

};


const tecnologiaSeleccionada = ref(null);

const seleccionarTecnologia = (tecnologia) => {
  tecnologiaSeleccionada.value = tecnologia;
};


onMounted(() => {
   cargarServicios();
    cargarComentarios();
     cargarTecnologias();
});

</script>

<template>
  

<!--  PRESENTACION   -->

<div class="grid grid-cols-12 py-9 gap-8">


  <div class="col-span-1 "></div>

 <!--  PARTE IZQUIERDA - TITULOS/BOTONES  -->

  <div class="col-span-5 text-center">
    
    <h3 class="text-lg mb-5 text-cyan-200 underline underline-offset-8">Portafolio profesional WEB</h3>

    <h1 class="text-5xl font-semibold mb-5">RALPH SEBASTIAN ABARCA RODRIGUEZ</h1>

    <h2 class="text-xl mb-5 text-orange-200">Desarrollador Fullstack | Informatico Empresarial</h2>

    <hr class="bordert-1 mb-8 border-cyan-300">

    <h3 class="text-xl mb-10">Apasionado por la tecnologia, el diseno y solucion de problemas a traves del codigo. En este espacio muestro quien soy, que hago y como puedo ayudarte.</h3>

    <h1 id="frasesField" class="text-3xl mb-12 text-emerald-700">Me encantaria trabajar juntos!</h1>

    <div class="flex justify-center gap-8">

      <a href="/curriculums"><Button>Curriculum Vitae CV</Button></a>
      <a href="/contactame"><Button>Contactame</Button></a>
    </div>

    
  </div>

 <!--  PARTE DERECHA - FOTO/INFO   -->


  <div class="col-span-5 grid justify-center gap-5">
    

      <img src="/images/RalphAbProfile.jpg" alt="" class="w-89 h-80 rounded-2xl border-4 shadow-[0_0_25px_5px_rgba(41,158,154,0.7)] object-cover object-right border-white">


      <Card>
        
        <div class="p-3 backdrop-blur-xs">
          <span>
            <i class="fa-solid fa-user p-2 me-4"></i>Ralph Abarca R.<br>
            <i class="fa-solid fa-cake-candles p-2 me-4"></i>23 años.<br>
            <i class="fa-solid fa-at p-2 me-4"></i>Ralfhsebastiaar@gmail.com<br>
            <i class="fa-solid fa-graduation-cap p-2 me-4"></i>Universidad de Costa Rica.<br>
            <i class="fa-solid fa-house p-2 me-4"></i>Siquirres, Limon, Costa Rica
          </span>

        </div>

      </Card>



  </div>

  <div class="col-span-1"></div>

</div>



<!--  LINEA SEPARADORA   -->
  <div class="w-full h-1 bg-white shadow-[0_0_12px_3px_rgba(34,211,238,0.8)]"></div>


<!--  SOBRE MI   -->
<div class="backdrop-blur-md">

 <EncabezadoSeccion>Sobre mi</EncabezadoSeccion>


  <!-- CONTENIDO SOBRE MI   -->

<div class="grid grid-cols-12 py-10 px-10">

<div class="col-span-1"></div>

<div class="col-span-5 mb-4">

  <h2 class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit itaque porro veniam perspiciatis ex, modi eligendi voluptatum consectetur amet excepturi asperiores ipsam dolorum possimus dolore. Debitis velit inventore incidunt nostrum!</h2>
  <br>
  <h2 class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit itaque porro veniam perspiciatis ex, modi eligendi voluptatum consectetur amet excepturi asperiores ipsam dolorum possimus dolore. Debitis velit inventore incidunt nostrum!</h2>
  <br><br>
  <div class="grid ms-5">
    <h3 class="underline underline-offset-6 text-orange-200">Objetivo profesional:</h3>
    <br>
    <h3 class="text-md">Lorem ipsum Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut asperiores vitae error laborum excepturi consequuntur recusandae suscipit fugit placeat, quo veritatis maxime tempora aperiam quod aliquid voluptas, cum, eveniet aut.dolor sit amet consectetur adipisicing elit. Aspernatur natus quam ullam, veniam praesentium accusamus blanditiis officiis similique totam eveniet saepe error facere, odit in! Velit nam vel voluptates alias!</h3>
    <br><br>
    <div class="flex w-full justify-center"> <a href="/sobreMi"><Button>Leer mas Sobre mi</Button></a></div>
   
  </div>
</div>
<div class="col-span-5 grid justify-center">

  <Card class="w-100">
    <div class="p-3">

      <h2 class="ms-7 text-cyan-200 text-xl p-2">Habilidades tecnicas:</h2>
      <ul class="list-disc list-inside text-sm ms-15">
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Otro más</li>
  <li>Otro más</li>
  <li>Otro más</li>
</ul>
<br>
<hr class="border-t-1 border-cyan-300 mx-8">

<h2 class="ms-7 text-cyan-200 text-xl p-2">Habilidades blandas:</h2>
      <ul class="list-disc list-inside text-sm ms-15">
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Elemento centrado</li>
  <li>Otro más</li>
  <li>Otro más</li>
  <li>Otro más</li>
</ul>

<br>
<hr class="border-t-1 border-cyan-300 mx-8">
<h2 class="ms-7 text-cyan-200 text-xl p-2">Idiomas:</h2>
      <ul class="flex justify-start gap-6 list-none font-semibold text-sm ms-15">
  <li>Espanol (Nativo)</li>
  <li>Ingles (Intermedio B1)</li>
</ul>
<br>

    </div>
  </Card>
  
</div>

<div class="col-span-1"></div>


</div>

</div>
<!--  FIN SECCION SOBRE MI   -->




<!--  SERVICIOS   -->
<EncabezadoSeccion>Servicios</EncabezadoSeccion>

  <!-- CONTENIDO SERVICIOS   -->

  <br>

  <div class="grid grid-cols-12">

    <div class="col-span-1"></div>

    <div class="col-span-9">

      <h2 class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reprehenderit animi ut reiciendis iusto, voluptates et. Nostrum excepturi saepe ipsa provident sint laboriosam, libero molestiae pariatur, molestias similique cum in.</h2>

      <br>

      <div class="flex overflow-auto p-5 border-e-amber-50">
      <div class="  gap-6"></div>

      <CardServicio v-for="servicio in servicios"
      :nombre="servicio.nombre"
      :descripcion="servicio.descripciones"
      class="flex-shrink-0 w-90"
      />

    </div>

    <br>

</div>

    <div class="col-span-2"></div>


  </div>
  <br>

<!-- FIN SERVICIOS   -->





<!--  PROYECTOS   -->
<div class="backdrop-blur-md">

<EncabezadoSeccion>Proyectos</EncabezadoSeccion>

  <!-- CONTENIDO PROYECTOS   -->

  <br>
  <div class="text-center">Aqui va el contenido</div><br><br><br><br><br><br>
   
  </div>
<!-- FIN PROYECTOS   -->



<!--  TECNOLOGIAS   -->
<div class="backdrop-brightness-30">

  <EncabezadoSeccion>Tecnologias</EncabezadoSeccion>

  <!-- CONTENIDO TECNOLOGIAS   -->

  <br>
  <div class="grid grid-cols-12 h-auto">

    <div class="col-span-1"></div>

    <div class="col-span-6 px-10 ">

      <div>
      <h3 class="text-md text-orange-200 mb-2">Front-End:</h3>

      <div class="flex gap-7">
      <img
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'frontend')"
            :key="tecnologia.id"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out"
            :class="{
              'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400': 
                tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)]': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />

      </div>

      
      <br>

      <h3 class="text-md text-orange-200 mb-2">Back-End:</h3>

      <div class="flex gap-7">
      <img
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'backend')"
            :key="tecnologia.id"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out"
            :class="{
              'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400': 
                tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)]': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
      </div>


      <br>

      <h3 class="text-md text-orange-200 mb-2">Bases de datos:</h3>

      <div class="flex gap-7">
      <img
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'bd')"
            :key="tecnologia.id"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out"
            :class="{
              'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400': 
                tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)]': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
      </div>

      <br>

      <h3 class="text-md text-orange-200 mb-2">Otras herramientas:</h3>

      <div class="flex gap-7">
      <img
            v-for="tecnologia in tecnologias.filter(t => t.categoria === 'otro')"
            :key="tecnologia.id"
            :src="`/icons/tecnologias/${tecnologia.icono}`"
            class="w-14 h-14 cursor-pointer rounded-2xl transition-all duration-300 ease-in-out"
            :class="{
              'scale-110 shadow-[0_0_15px_3px_rgba(41,182,246,0.7)] border-2 border-cyan-400': 
                tecnologiaSeleccionada?.id_tecnologia === tecnologia.id_tecnologia,
              'hover:scale-125 hover:shadow-[0_0_10px_2px_rgba(41,182,246,0.5)]': 
                tecnologiaSeleccionada?.id_tecnologia !== tecnologia.id_tecnologia
            }"
            @click="seleccionarTecnologia(tecnologia)"
          />
      </div>

      <br>
</div>




    </div>

    <div class="col-span-3">
      <CardTecnologia
        v-if="tecnologiaSeleccionada"
        :nombre="tecnologiaSeleccionada.nombre"
        :descripcion="tecnologiaSeleccionada.descripcion"
        :icono="tecnologiaSeleccionada.icono"
      />
      <div
        v-else
        class="border-2 h-full border-dashed border-gray-600 text-gray-400 p-6 text-center rounded-lg"
      >
        Selecciona una tecnología para ver los detalles
      </div>
    </div>

    <div class="col-span-2"></div>

  </div>

  <br>
 


  <div class="grid grid-cols-12">


    <div class="col-span-7">
    </div>

    <div class="col-span-3 flex items-center justify-center gap-7">
      <a href="/tecnologias"><Button>Ver tecnologias</Button></a>
    </div>
    <div class="col-span-2"></div>

    <br><br>
    
    


  </div>




  </div>
<!-- FIN TECNOLOGIAS   -->




<!--  COMENTARIOS   -->
<div class="">

  
<EncabezadoSeccion>Comentarios</EncabezadoSeccion>

  <!-- CONTENIDO COMENTARIOS   -->
  <br>

  <div class="grid grid-cols-12">

    <div class="col-span-1"></div>
    <div class="col-span-9">


   <div class="grid grid-rows-2 overflow-x-auto gap-6 px-2 py-10">
  <!-- Fila 1 -->
  <div class="flex gap-6">
    <CardComentario
      v-for="comentario in comentarios.slice(0, 4)"
      :key="comentario.id_comentario"
      :usuario="comentario.nombre_usuario"
      :fecha="comentario.fecha_creacion"
      :comentario="comentario.comentario"
      :reaccion="comentario.reaccion"
      class="flex-shrink-0 w-90"
    />
  </div>

  <!-- Fila 2 -->
  <div class="flex gap-6">
    <CardComentario
      v-for="comentario in comentarios.slice(4,8)"
      :key="comentario.id_comentario"
      :usuario="comentario.nombre_usuario"
      :fecha="comentario.fecha_creacion"
      :comentario="comentario.comentario"
      :reaccion="comentario.reaccion"
      class="flex-shrink-0 w-90"
    />
  </div>
</div>



  <div class="flex justify-center mt-8 gap-15 items-center">

    <Button command="show-modal" commandfor="modalNuevoComentario">Escribir comentario</Button>
    <a href="/comentarios"><Button>Ver mas comentarios</Button></a>

  </div>

  <Dialog @comentario-creado="cargarComentarios"></Dialog>

  <br><br>


    </div>
    <div class="col-span-2"></div>


  </div>
  

  </div>
<!-- FIN COMENTARIOS   -->



</template>
