<script setup>

import Card from '@/components/ui/card/Card.vue';
import axios from 'axios';
import { ref } from 'vue';

const nombreRemitente = ref('');
const asunto = ref('');
const correo = ref('');
const mensaje = ref('');

const enviarCorreo = async () => {

  try {
    const response = await axios.post("/api/contactame", {
      nombreRemitente: nombreRemitente.value,
      asunto: asunto.value,
      correo: correo.value,
      mensaje: mensaje.value
    });

    if (response.status === 201 || response.status === 200) {

      alert("Correo enviado exitosamente. ¡Gracias por contactarme!");
      
      // Limpiar los campos del formulario
      nombreRemitente.value = '';
      asunto.value = '';
      correo.value = '';
      mensaje.value = '';
        

    }
  } catch (error) {

    alert("Error al enviar el correo. Por favor, intenta nuevamente.");
    
  }
};

</script>


<template>
  <section key="contactame" class="page">

    <div class="grid grid-cols-12">

      <div class="col-span-1"></div>
      <div class="col-span-4">

        <div>
          <h2 class="text-turquesaBtnText animate-pulse my-10 items-center flex justify-center text-5xl">Contactame</h2>
        </div>

        <div class="flex text-lg text-gray-400">

          "Estoy abierto a nuevas oportunidades laborales y proyectos freelance.
          Si deseas colaborar conmigo, estaré encantado de conversar contigo."
        </div>

        <br>


        <div
          class="flex gap-4 mt-4 text-gray-400 border items-center justify-center border-gray-700 p-6 rounded-lg bg-gray-900 [&_a]:hover:underline-offset-2 [&_a]:hover:underline">

          <ul class="gap-9 space-y-4">
            <li class="flex">
              <strong class="text-turquesaBtnText">Correo Electronico:</strong>
            </li>

            <li class="flex">
              <strong class="text-turquesaBtnText">LinkedIn:</strong>

            </li>

            <li class="flex">
              <strong class="text-turquesaBtnText">GitHub:</strong>
            </li>

            <li class="flex">
              <strong class="text-turquesaBtnText">Whatsaap:</strong>
            </li>



          </ul>
          <ul class="gap-9 space-y-4">
            <li class="flex">
              <span>Ralphseastiaar@gmail.com</span>
              <button
                class="ms-10 px-2 border rounded-2xl hover:bg-transparent hover:text-white hover:border-white bg-white text-black">Copiar!</button>
            </li>

            <li class="flex">
              <a href="//">/Ralph Abarca.Tech</a>
            </li>

            <li class="flex">
              <a href="//">/abr_rod_2002/repository/46653</a>
            </li>

            <li class="flex">
              <a href="https://wa.me/62732763">Escribir un mensaje</a>
            </li>


          </ul>


          

        </div>

        <div class="flex justify-center items-center m-5 gap-4">
            <span class="text-lg text-white">Costa Rica</span>
            <img src="/icons/costa-rica.svg" alt="Contactame Illustration" class="h-12 w-12" />
          </div>


      </div>
      <div class="col-span-1"></div>

      <div class="col-span-5 px-15 flex justify-center items-center">


        <card class="border-turquesaBtnBorder backdrop-blur-2xl">
          

          <form class="space-y-4 p-3">
           

            <div class="col-span-3 px-4 text-left">
      <h2 class="text-lg underline underline-offset-4 pb-3">Enviame un correo:</h2>

      <input v-model="nombreRemitente" type="text" name="nombreRemitente" id="nombreRemitente" placeholder="Tu Nombre"
       class="p-2 rounded-lg bg-black/50 text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300">


      <input v-model="correo" type="email" name="correo" id="correo" placeholder="Tu correo electronico" 
       class="p-2 rounded-lg bg-black/50 text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300">
       
       <input v-model="asunto" type="text" name="asunto" id="asunto" placeholder="Asunto" 
       class="p-2 rounded-lg bg-black/50 text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300">

      <textarea v-model="mensaje" name="mensaje" id="mensaje" cols="30" rows="4" placeholder="Escribe tu mensaje..." 
      class="p-2 rounded-lg min-h-30 max-h-30 bg-black/50 text-gray-300 w-full my-2 border ring-2 ring-gray-700 border-cyan-700
        hover:border-gray-600 hover:ring-2 hover:ring-cyan-600 hover:outline-none hover:text-gray-400
       focus:border-gray-300 focus:ring-2 focus:ring-cyan-400 focus:outline-none focus:text-gray-300"></textarea>

       <div class="grid justify-end">
        <button @click="enviarCorreo" class="flex 
 text-white font-semibold py-2 px-4 border-2 bg-cyan-950 border-cyan-400 rounded-xl shadow gap-2
hover:scale-98 hover:border-2 hover:border-cyan-300 hover:bg-cyan-900 hover:white  transition-transform duration-300 ease-in-out">Enviar correo</button>
       </div>

    </div>


            
              <button @click="crearComentario" type="button"
          class="inline-flex w-full justify-center rounded-md bg-turquesaBtnBg border-2 border-turquesaBtnBorder px-3 py-2 text-sm font-semibold text-white hover:bg-turquesaBtnBorder hover:border-turquesaBtnText sm:ml-3 hover:shadow-[0_0_10px_2px_rgba(41,158,154,0.7)] sm:w-auto" > 
          Enviar Correo 
            </button>


          </form>

        </card>
      </div>
      <div class="col-span-1"></div>



    </div>

    <div class="flex justify-center text-2xl m-4 text-gray-400">
      <span>"Responderé lo antes posible. Gracias por tomarte el tiempo de visitar mi portafolio."</span>
    </div>

  </section>
</template>
