<script setup>

import { ref, onMounted } from 'vue';
import axios from 'axios';
import CardServicio from '@/components/ui/card/CardServicio.vue';
import Button from '@/components/ui/button/Button.vue';
import { computed } from 'vue';
import Alert from '@/components/Alert.vue';

const curriculums = ref([]);

const mostrarAlerta = ref(false);
const tipoAlerta = ref("");
const tituloAlerta = ref("");
const mensajeAlerta = ref("");


const cargarCurriculums = async () => {

    try {

        const response = await axios.get("/api/curriculums");
        curriculums.value = response.data.data;

    } catch (error) {
        console.error("Error al cargar los curriculums:", error);
    }

};

const verCurriculum = (id) => {
    const url = `${import.meta.env.VITE_API_URL}/curriculums/verCV/${id}`;
    window.open(url, "_blank");
};

const descargarCurriculum = (id) => {

    try {
 
        const url = `${import.meta.env.VITE_API_URL}/curriculums/descargarCV/${id}`;
        window.open(url, "_blank");

        
            tipoAlerta.value = "success";
            tituloAlerta.value = "Descarga exitosa";
            mensajeAlerta.value = "El curriculum se ha descargado correctamente.";
            mostrarAlerta.value = true;
        

    } catch (error) {
        tipoAlerta.value = "error";
            tituloAlerta.value = "Descarga fallida";
            mensajeAlerta.value = "No se pudo iniciar la descarga correctamente. Intentalo de nuevo más tarde.";
            mostrarAlerta.value = false;
    }
   



};




onMounted(() => {
    cargarCurriculums();
});

</script>

<template>

 <section key="curriculums" class="page">
    <Alert
      :mostrar="mostrarAlerta"
      :tipo="tipoAlerta"
      :titulo="tituloAlerta"
      :mensaje="mensajeAlerta"
      @cerrar="mostrarAlerta = false"
    />

    <div class="grid grid-cols-13 h-150">

        <div class="col-span-1"></div>
        <div class="col-span-4 ">

            <div>
                <h2 class="text-turquesaBtnText animate-pulse my-10 text-center text-5xl ">Curriculums CV</h2>
            </div>

            <div class="">
               <p class="text-center text-lg font-light">En esta sección encontrarás mis currículums actualizados y organizados según distintos enfoques profesionales.
Cada documento está disponible para visualizar, descargar y compartir fácilmente.
Mi objetivo es ofrecer una presentación clara de mi experiencia, formación y habilidades para que puedas conocer mi perfil de manera completa y directa.
</p> 
                <br><br>
               <p class="text-center text-xl font-semibold">Explora los currículums y no dudes en contactarme si tienes alguna pregunta o deseas discutir oportunidades de colaboración.
                </p> 
            </div>



        </div>

        <div class="col-span-1"></div>

        <div class="col-span-6  overflow-hidden">

            <TransitionGroup name="servicios-fade" tag="div" class="mx-10 my-5  overflow-y-scroll h-full p-6">

                <div class="w-full border backdrop-blur-lg border-turquesaBtnBorder rounded-2xl mb-2 p-4 shadow-[0_0_15px_5px_rgba(100,100,100,0.7)] hover:shadow-[0_0_20px_10px_rgba(100,100,100,1)] ease-in-out transition-all duration-100"
                    v-for="curriculum in curriculums" :key="curriculum.id_curriculum">

                    <div class="grid grid-cols-7">

                        <div class="col-span-5">
                            <h2 class="text-turquesaBtnText underline text-xl font-semibold text-center ms-4">{{
                                curriculum.titulo }}</h2>

                            <p class="p-2 m-3 text-sm text-gray-300 text-center  ms-4">{{ curriculum.descripcion }}</p>

                            <div class="flex justify-center border-t border-amber-50 mx-10 p-2 gap-5">

                                <p class="text-turquesaBtnBorder">{{ curriculum.ultima_actualizacion }}</p>

                            </div>

                        </div>

                        <div class="col-span-2 grid justify-center items-center">

                            <Button @click="verCurriculum(curriculum.id_curriculum)" variant="customSecondary"
                                class="hover:shadow-[0_0_25px_5px_rgba(0,255,0,0.5)] hover:border-green-400"
                                size="secondary">Ver <i class="ms-3 text-xl fa-solid fa-eye"></i></Button>
                            <Button @click="descargarCurriculum(curriculum.id_curriculum)" variant="customSecondary"
                                class="hover:shadow-[0_0_25px_5px_rgba(255,255,0,0.5)] hover:border-yellow-500"
                                size="secondary">Descargar <i class="ms-3 text-xl fa-solid fa-download"></i></Button>
                            <Button @click="" variant="customSecondary"
                                class="hover:shadow-[0_0_25px_5px_rgba(0,75,211,0.5)] hover:border-blue-400"
                                size="secondary">Compartir <i class="ms-3 text-xl fa-solid fa-share"></i></Button>



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