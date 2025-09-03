<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import CardComentario from '@/components/ui/card/CardComentario.vue';

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
    
        <CardComentario 
            v-for="comentario in comentarios" 
            :key="comentario.id_comentario" 
            :usuario="comentario.nombre_usuario" 
            :fecha="comentario.fecha_creacion" 
            :comentario="comentario.comentario" 
            :reaccion="comentario.reaccion"
        />
   
</template>