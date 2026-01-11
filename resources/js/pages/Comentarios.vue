<script setup>
import { ref, onMounted, Transition, computed } from 'vue';
import axios from 'axios';
import CardComentario from '@/components/ui/card/CardComentario.vue';
import Dialog from '@/components/ui/dialog/Dialog.vue';
import Button from '@/components/ui/button/Button.vue';


// 1. Define una variable reactiva para guardar los comentarios
const comentarios = ref([]);
const filtroComentarios = ref("");

// 2. Función para cargar los datos desde la API
const cargarComentarios = async () => {
    try {
        const response = await axios.get("/api/comentarios");
        // Asigna la respuesta de la API a la variable reactiva
        comentarios.value = response.data.data; 
    } catch (error) {
        console.error("Error al cargar comentarios:", error);
    }
};

const filtrarComentarios = computed(() =>
  comentarios.value.filter(r =>
   r.reaccion.includes(filtroComentarios.value))

);

// 3. Usa onMounted para llamar a la función de carga
onMounted(() => {
    cargarComentarios();
});

</script>

<template>

  <section key="comentarios" class="page">
    
<Transition name="fade" mode="in-out">
    <div class="grid grid-cols-12">

        <div class="col-span-1"></div>
        <div class="col-span-4">

            <h2 class="text-turquesaBtnBorder my-10 items-center flex justify-center text-5xl">Comentarios</h2>

          <p class="text-center text-lg font-extralight">Este espacio está dedicado a escuchar tu opinión.
Tus comentarios son un pilar fundamental para mejorar, corregir fallos y crecer como profesional.
Si has trabajado conmigo, visitado mis proyectos o querés aportar una sugerencia, te invito a dejar tu mensaje.</p>  


           <br><br>
           
            <p class="text-center text-lg font-semibold">Agradezco de antemano tu tiempo y disposición para compartir tus pensamientos. Cada comentario es valioso y me ayuda a seguir mejorando.</p>

           <br><hr><br>

    <Button class="w-full" command="show-modal" commandfor="modalNuevoComentario">Escribir comentario</Button>
<br><br>

<div class="flex justify-center items-center space-x-10">

    <p class="text-xl font-semibold text-turquesaBtnText">Filtrar por reaccion:</p>

    <select v-model="filtroComentarios" name="filtroComentarios" id="filtroComentarios" class="p-3 rounded-lg text-gray-300 text-center my-2 border ring-2 border-gray-700 ring-turquesaBtnBorder
                   hover:border-turquesaBtnBorder hover:ring-2 hover:ring-turquesaBtnText hover:outline-none hover:text-gray-400
                   focus:border-gray-300 focus:ring-2 focus:shadow-[0_0_20px_3px_rgba(100,100,100,100)] focus:ring-cyan-400 focus:outline-none focus:text-gray-300">
                  
                   <option value="" class="bg-black text-white text-center">Mostrar todos</option>
                   <option value="like" class="bg-black text-white text-center">Like: 👍</option>
                   <option value="corazon" class="bg-black text-white text-center">Corazon: ❤️</option>
                   <option value="confeti" class="bg-black text-white text-center">Confeti: 🎉</option>
                   <option value="cool" class="bg-black text-white text-center">Cool: 😎</option>
                   <option value="excelente" class="bg-black text-white text-center">Excelente: 💯</option>
                   <option value="estrella" class="bg-black text-white text-center">Estrella: ⭐</option>
                   <option value="feliz" class="bg-black text-white text-center">Feliz: 😺</option>
                   <option value="enojo" class="bg-black text-white text-center">Enojo: 😠</option>
                  </select>

</div>



            
<Dialog @comentario-creado="cargarComentarios"></Dialog>



        </div>
        
        <div class="col-span-1"></div>
      
        

           <TransitionGroup
  name="comentarios-fade"
  tag="div"
  class="col-span-5 h-150 gap-6 p-6 m-6 scrollable"
>
  <CardComentario
    v-for="comentario in filtrarComentarios"
    :key="comentario.id_comentario"
    :usuario="comentario.nombre_usuario"
    :fecha="comentario.fecha_creacion"
    :comentario="comentario.comentario"
    :reaccion="comentario.reaccion"
    class="mb-4"
  />
</TransitionGroup>



        

        
        <div class="col-span-1"></div>


    </div>
</Transition>
       
   </section>
</template>

<style>
.comentarios-fade-enter-active, .comentarios-fade-leave-active {
  transition: opacity 0.3s ease, transform 0.3s ease;
}
.comentarios-fade-enter-from {
  opacity: 0;
  transform: translateX(40px);
}
.comentarios-fade-enter-to {
  opacity: 1;
  transform: translateX(0);
}
.comentarios-fade-leave-from {
  opacity: 1;
  transform: translateX(0);
}
.comentarios-fade-leave-to {
  opacity: 0;
  transform: translateX(-10px);
}
</style>