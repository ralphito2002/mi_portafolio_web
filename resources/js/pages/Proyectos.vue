<script setup>
import Card from '@/components/ui/card/Card.vue';
import { ref, onMounted, Transition, TransitionGroup } from 'vue';
import axios from 'axios';


const proyectos = ref([]);

const cargarProyectos = async () => {
    try {
        const response = await axios.get("/api/proyectos");
        proyectos.value = response.data.data;
    } catch (error) {
        console.error("Error al cargar proyectos:", error);
    }
};

const proyectoSeleccionado = ref(null);

const mostrarProyecto = (proyecto) => {

    proyectoSeleccionado.value = proyecto;

};

onMounted(() => {
    cargarProyectos();
});

</script>

<template>

    <div class="grid grid-cols-13">

        <div class="col-span-1"></div>
        <div class="col-span-4">

            <div>
                <h2 class="text-turquesaBtnText animate-pulse my-10 items-center flex justify-center text-5xl">Proyectos
                </h2>
            </div>

            <div class="h-110 scrollable p-5">

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facilis mollitia similique atque
                inventore omnis iusto iste optio temporibus, tempora alias laborum eos velit, totam, sapiente eius
                ipsam error doloremque.

                <br>
                <br>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum facilis mollitia similique atque
                inventore omnis iusto iste optio temporibus, tempora alias laborum eos velit, totam, sapiente eius
                ipsam error doloremque.




            </div>
        </div>
        <div class="col-span-1"></div>

        <div class="col-span-6 my-10 px-4">


            <Card class="bg-black/30 h-full border-turquesaBtnText">

                <div class="grid grid-cols-4 h-full">


                    <div class="col-span-1 bg-neutral-900 h-full">

                        <div class="h-full scrollable p-4">

                            
                            <ul >
                                <TransitionGroup name="fade" tag="div" mode="">
                                <li v-for="proyecto in proyectos" :key="proyecto.id_proyecto"
                                
                                  
                                    @click="mostrarProyecto(proyecto)">
                                    <div v-if="proyectoSeleccionado == proyecto" class="cursor-pointer text-turquesaBtnText my-2 border-2 border-neutral-500 active:bg-turquesaBtnBorder p-3 rounded-md bg-neutral-700 ease-in-out duration-300">{{ proyecto.titulo }}</div>
                                    <div v-else class="cursor-pointer my-2 active:bg-turquesaBtnBorder hover:bg-neutral-600 p-3 hover:text-turquesaBtnText rounded-md bg-neutral-500 ease-in-out duration-300">{{ proyecto.titulo }}</div>
                                    
                                </li> 
                            </TransitionGroup>
                            </ul>
                           
                        </div>

                    </div>
                    <div class="col-span-3 bg-neutral-900/50">

                        <div v-if="proyectoSeleccionado">
                            <div class="p-6">
                                <div class="rounded-2xl shadow-lg border-2 border-white bg-neutral-700/60 h-110 text-white overflow-auto ">

                                    <div class="flex items-center p-4 justify-center">
                                        <img class="object-cover w-50 h-30 rounded-2xl"
                                            :src="`/images/fondos/${proyectoSeleccionado.imagen}`"
                                            alt="imagenProyecto" />
                                    </div>

                                    <div class="">

                                        <h2 class="text-3xl font-bold text-center text-turquesaBtnText">
                                            {{ proyectoSeleccionado.titulo }}
                                        </h2>

                                        <h2 class="text-lg text-center mt-2 font-semibold">
                                            {{ proyectoSeleccionado.rol }}
                                        </h2>
                                        <h2 class="text-sm font-semibold text-center">
                                            {{ proyectoSeleccionado.fecha_finalizacion }}
                                        </h2>


                                        <div>

                                            <div class="flex flex-wrap gap-2 mt-5 items-center justify-center">
                                                <span v-for="tech in proyectoSeleccionado.tecnologias" :key="tech"
                                                    class="px-3 py-1 text-sm text-neutral-800 bg-white rounded-xl font-semibold">
                                                    {{ tech.nombre }}
                                                </span>
                                            </div>
                                        </div>


                                        <p class="text-gray-300 text-center text-sm mt-3 p-4">
                                            {{ proyectoSeleccionado.descripcion }}

                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div v-else class=" mt-4 flex  justify-center p-4 text-gray-400">
                            <div
                                class=" p-8 border-2 border-dashed border-gray-400 text-gray-100 animate-pulse rounded-lg text-center">
                                Por favor Selecciona un proyecto de la lista de la izquierda para que puedas ver los
                                detalles de su informacion.
                            </div>
                        </div>


                    </div>

                </div>


            </Card>



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
  transform: translateY(40px);
}
.page-fade-enter-to {
  opacity: 1;
  transform: translateY(0);
}
.page-fade-leave-from {
  opacity: 1;
  transform: translateY(0);
}
.page-fade-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>