<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CardComentario from '@/components/ui/card/CardComentario.vue';
import Dialog from '@/components/ui/dialog/Dialog.vue';

// 1. Define una variable reactiva para guardar los comentarios
const comentarios = ref([]);

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

// 3. Usa onMounted para llamar a la función de carga
onMounted(() => {
    cargarComentarios();
});
</script>

<template>

    <div class="grid grid-cols-12">

        <div class="col-span-1"></div>
        <div class="col-span-4">

            <h2 class="text-turquesaBtnBorder my-10 items-center flex justify-center text-5xl">Comentarios</h2>
            
<div class="flex justify-center mt-8 gap-15 items-center">

    <Button command="show-modal" commandfor="modalNuevoComentario">Escribir comentario</Button>
    <a href="/comentarios"><Button>Ver mas comentarios</Button></a>

  </div>
<Dialog></Dialog>
<div class="mt-3 text-center sm:mt-0 w-full pe-5 sm:ml-4 sm:text-left">

              <h3 id="dialog-title" class="text-2xl font-semibold text-white">Crea tu comentario:</h3>

              <div class="mt-4">
                <p class="text-md text-gray-400">Escribe tu nombre y apellidos:</p>
                <input v-model="nombre_usuario" type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Tu nombre" class="p-2 rounded-lg text-gray-300 w-full my-2 border ring-2 border-gray-700 ring-turquesaBtnBorder
                   hover:border-turquesaBtnBorder hover:ring-2 hover:ring-turquesaBtnText hover:outline-none hover:text-gray-400
                   focus:border-gray-300 focus:ring-2 focus:shadow-[0_0_20px_3px_rgba(100,100,100,100)] focus:ring-cyan-400 focus:outline-none focus:text-gray-300">
              
                <br><br>
                <p class="text-sm text-gray-400">Ingresa el comentario que deseas dejar:</p>
                <textarea v-model="comentario" name="comentario" id="comentario" cols="30" rows="5" placeholder="Tu comentario" class="resize-none p-2 rounded-lg text-gray-300 w-full my-2 border ring-2 border-gray-700 ring-turquesaBtnBorder
                   hover:border-turquesaBtnBorder hover:ring-2 hover:ring-turquesaBtnText hover:outline-none hover:text-gray-400
                   focus:border-gray-300 focus:ring-2 focus:shadow-[0_0_20px_3px_rgba(100,100,100,100)] focus:ring-cyan-400 focus:outline-none focus:text-gray-300"></textarea>

                   <br><br>
                   <p class="text-sm text-gray-400">Elige una reaccion para tu comentario:</p>
                   <select v-model="reaccion" name="reaccion" id="reaccion" class="p-2 rounded-lg text-gray-300 w-full text-center my-2 border ring-2 border-gray-700 ring-turquesaBtnBorder
                   hover:border-turquesaBtnBorder hover:ring-2 hover:ring-turquesaBtnText hover:outline-none hover:text-gray-400
                   focus:border-gray-300 focus:ring-2 focus:shadow-[0_0_20px_3px_rgba(100,100,100,100)] focus:ring-cyan-400 focus:outline-none focus:text-gray-300">
                  
                   <option value="like" class="bg-black text-white text-center">Like: 👍</option>
                   <option value="corazon" class="bg-black text-white text-center">Corazon: ❤️</option>
                   <option value="confeti" class="bg-black text-white text-center">Confeti: 🎉</option>
                   <option value="cool" class="bg-black text-white text-center">Cool: 😎</option>
                   <option value="excelente" class="bg-black text-white text-center">Excelente: 💯</option>
                   <option value="estrella" class="bg-black text-white text-center">Estrella: ⭐</option>
                   <option value="feliz" class="bg-black text-white text-center">Feliz: 😺</option>
                   <option value="enojo" class="bg-black text-white text-center">Enojo: 😠</option>
                  </select>
                  <br><br>
              </div>
            </div>

        </div>
        
        <div class="col-span-1"></div>
      
        

             <div class="col-span-5 h-150 gap-6 overflow-auto"> <CardComentario class="mt-5" 
            v-for="comentario in comentarios" 
            :key="comentario.id_comentario" 
            :usuario="comentario.nombre_usuario" 
            :fecha="comentario.fecha_creacion" 
            :comentario="comentario.comentario" 
            :reaccion="comentario.reaccion"
        /></div>
        

        
        <div class="col-span-1"></div>


    </div>
    
       
   
</template>