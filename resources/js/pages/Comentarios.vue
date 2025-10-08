<script setup>
import { ref, onMounted, Transition } from 'vue';
import axios from 'axios';
import CardComentario from '@/components/ui/card/CardComentario.vue';
import Dialog from '@/components/ui/dialog/Dialog.vue';
import Button from '@/components/ui/button/Button.vue';

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
    
<Transition name="fade" mode="in-out">
    <div class="grid grid-cols-12">

        <div class="col-span-1"></div>
        <div class="col-span-4">

            <h2 class="text-turquesaBtnBorder my-10 items-center flex justify-center text-5xl">Comentarios</h2>

            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit excepturi eaque quod totam atque id, minus nam beatae unde modi eos enim est exercitationem dignissimos quos! Harum iusto a sint?Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro vero quibusdam autem facilis obcaecati aliquid nihil in nemo, quae maxime doloremque provident vitae natus explicabo, atque ut! Doloribus, amet!
<br><br>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis enim nisi reiciendis numquam tempora excepturi veniam. Soluta ducimus harum modi, accusantium eveniet excepturi consequuntur laudantium molestiae tempore placeat, ipsam fuga.
<br><br>

    <Button class="w-full" command="show-modal" commandfor="modalNuevoComentario">Escribir comentario</Button>
<br><br>
   <Button class="w-full">Filtrar por reaccion</Button>


            
<Dialog @comentario-creado="cargarComentarios"></Dialog>



        </div>
        
        <div class="col-span-1"></div>
      
        

           <TransitionGroup
  name="fade"
  tag="div"
  class="col-span-5 h-150 gap-6 p-6 m-6 overflow-auto"
>
  <CardComentario
    v-for="comentario in comentarios"
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
       
   
</template>