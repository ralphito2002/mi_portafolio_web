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

  try{

    const response = await axios.get("/api/servicios");
    servicios.value = response.data.data;

  } catch (error){
    console.error("Error al cargar servicios:", error);
  }

};

onMounted(() => {
    cargarServicios();
});

</script>

<template>
    
    <div class="grid grid-cols-12 h-150">

  <div class="col-span-1"></div>
  <div class="col-span-4 ">

    <div><h2 class="text-turquesaBtnText animate-pulse my-10 text-center text-5xl ">Servicios y habilidades</h2></div>
    
    <div class="h-60 scrollable">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit maiores incidunt id impedit perferendis modi enim possimus. Commodi aut amet doloremque. Quam, nam et. Sint consectetur eveniet tenetur aliquid?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus corporis tempora minima deleniti, earum similique ullam voluptatem porro iusto soluta maxime rerum enim ipsam eligendi tenetur atque, sit repudiandae?

    <br><br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quis dolor laborum consequatur placeat, cumque voluptas esse fuga nulla reprehenderit inventore cupiditate laudantium aliquid explicabo vel illo. Voluptate, modi dolores.
    </div><br><br>
    
    <div class="">
    <h2 class="text-orange-200">Aqui hay una lista de mis servicios y habilidades:</h2>

    <div class="flex justify-start items-center">

       <TransitionGroup
  name="fade"
  tag="ul"
  class="grid grid-cols-2 list-disc list-inside text-md font-bold space-y-2 my-3 w-full"
>
  <li
    v-for="servicio in servicios"
    :key="servicio.id_servicio"
  >
    {{ servicio.nombre }}
  </li>
</TransitionGroup>


    </div>
</div>


  </div>

  <div class="col-span-1"></div>
  
  <div class="col-span-5  overflow-hidden">

    <div class="mx-10 mt-10 mb-5 px-5">
      <input v-model="filtroServicios" type="text" placeholder="Buscar servicio..." class="w-full p-2 rounded-md border border-turquesaBtnBorder bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-turquesaBtnBorder focus:border-transparent">
    
    </div>
   

    <TransitionGroup
  name="fade"
  tag="div"
  class="mx-10  overflow-y-scroll h-122 p-6">

        <div class="w-full border backdrop-blur-2xl border-turquesaBtnBorder rounded-2xl mb-2 p-4 shadow-[0_0_15px_5px_rgba(100,100,100,0.7)] hover:shadow-[0_0_20px_10px_rgba(100,100,100,1)] duration-300"
          v-for="servicio in serviciosFiltrados"
          :key="servicio.id_servicio">

          <div class="grid grid-cols-8">

            <div class="col-span-2">
                 <img class="rounded-md border border-turquesaBtnBorder" src="/images/fondos/fondo2.png" alt="">
            </div>

            <div class="col-span-5">
                <h2 class="text-turquesaBtnBorder text-lg text-left ms-4">{{ servicio.nombre }}</h2>
                <p class="text-xs text-gray-300 text-left  ms-4">{{ servicio.descripcionGeneral }}</p>
            </div>

            <div class="col-span-1 flex justify-end items-center">
                <button class="bg-blue-500 hover:bg-blue-400 hover:border-none text-white sm text-sm font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
  ver
</button>
            </div>

          </div>

          
     
      </div>
      

    </TransitionGroup>
    
     

 

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
</style>