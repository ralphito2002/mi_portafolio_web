<template>


  <dialog id="modalNuevoComentario" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop-opacity-85 z-3">
    <div class="fixed inset-0 bg-black/80 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></div>

    <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      <div class="relative transform overflow-hidden border-2 border-turquesaBtnBorder rounded-lg bg-turquesaBtnBg text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all hover:shadow-[0_0_25px_5px_rgba(41,158,154,0.7)] data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="bg-black px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:size-10">
              <i class="fa-solid fa-comment fa-2xl" style="color: #FFFFFF;"></i>
            </div>
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
        </div>

        <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button @click="crearComentario" :disabled="!botonHabilitado || cargando" type="button"
          :class="[
              'inline-flex w-full justify-center rounded-md border-2 px-3 py-2 text-sm font-semibold sm:w-auto sm:ml-3 transition-all duration-300',
              cargando
                ? 'bg-gray-600 border-gray-400 cursor-wait text-white'
                : botonHabilitado
                ? 'inline-flex w-full justify-center rounded-md bg-turquesaBtnBg border-2 border-turquesaBtnBorder px-3 py-2 text-sm font-semibold text-white hover:bg-turquesaBtnBorder hover:border-turquesaBtnText sm:ml-3 hover:shadow-[0_0_20px_3px_rgba(41,158,154,0.7)] sm:w-auto'
                : 'bg-gray-700 border-gray-500 text-gray-400 cursor-not-allowed'
            ]" > 
          
          <span v-if="!cargando">Crear comentario</span>
            <span v-else>Cargando...<i class="ms-3 fa-solid fa-spinner animate-spin text-turquesaBtnText"></i></span>
          
          </button>
             <button @comentario-creado="cargarComentarios"  type="button" command="close" commandfor="modalNuevoComentario" class="mt-3 inline-flex w-full justify-center rounded-md bg-red-800/20 border-2 border-red-800/80 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-red-900/90 hover:border-red-500 hover:shadow-[0_0_20px_3px_rgba(220,38,38,0.7)] sm:mt-0 sm:w-auto">Cancelar</button>

        </div>
      </div>
    </div>
  </dialog>


<Alert
      :mostrar="mostrarAlerta"
      :tipo="tipoAlerta"
      :titulo="tituloAlerta"
      :mensaje="mensajeAlerta"
      @cerrar="mostrarAlerta = false"
    />

</template>

<script setup>
import { ref, computed } from "vue";
import axios from "axios";
import Alert from "@/components/Alert.vue";

const nombre_usuario = ref("");
const comentario = ref("");
const reaccion = ref("like");
const cargando = ref(false);


// Estado de la alerta
const mostrarAlerta = ref(false);
const tipoAlerta = ref("success");
const tituloAlerta = ref("");
const mensajeAlerta = ref("");

const emit = defineEmits(['comentario-creado']);

// Computed para habilitar o deshabilitar el botón
const botonHabilitado = computed(() => {
  return nombre_usuario.value.trim() !== "" && comentario.value.trim() !== "";
});

// Diccionario de reacciones
const reacciones = {
  like: "👍",
  corazon: "❤️",
  confeti: "🎉",
  cool: "😎",
  excelente: "💯",
  estrella: "⭐",
  feliz: "😺",
  enojo: "😠",
};

const crearComentario = async () => {
  cargando.value = true;
  const modal = document.getElementById("modalNuevoComentario");

  try {
    const response = await axios.post("/api/comentarios", {
      nombre_usuario: nombre_usuario.value,
      comentario: comentario.value,
      reaccion: reaccion.value,
    });

    if (response.status === 201 || response.status === 200) {

      let nombre = nombre_usuario.value.split(" ")[0];


      // Mostrar alerta de éxito
      tipoAlerta.value = "success";
      tituloAlerta.value = `¡Comentario creado! ${reacciones[reaccion.value]}`;
      mensajeAlerta.value = `Gracias por tu opinion ${nombre}.Tu comentario se ha almacenado correctamente.`;
      mostrarAlerta.value = true;
      
      modal.close();

      // Limpiar formulario
      nombre_usuario.value = "";
      comentario.value = "";
      reaccion.value = "like";

      //refrescar los comentarios
       emit('comentario-creado', response.data);
        

    }
  } catch (error) {

    modal.close();

    // Mostrar alerta de error
    
    tipoAlerta.value = "error";
    tituloAlerta.value = "¡Ups! Algo salió mal";
    mensajeAlerta.value = "Tu comentario no pudo ser almacenado. Inténtalo de nuevo.";
    mostrarAlerta.value = true;
    
  } finally {
    cargando.value = false;
  }
};
</script>

