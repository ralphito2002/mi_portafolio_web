<script setup>

import Alert from '@/components/Alert.vue';
import Card from '@/components/ui/card/Card.vue';
import axios from 'axios';
import { ref } from 'vue';

const nombreRemitente = ref('');
const asunto = ref('');
const correo = ref('');
const mensaje = ref('');

// Estado de la alerta
const mostrarAlerta = ref(false);
const tipoAlerta = ref('success');
const tituloAlerta = ref('');
const mensajeAlerta = ref('');


async function copiarTexto() {

  const texto = "Ralfhsebastiaar@gmail.com";

  try {
    await navigator.clipboard.writeText(texto);
    alert('¡Texto copiado al portapapeles!');
  } catch (err) {
    alert('No se pudo copiar el texto.');
  }
}


const enviarCorreo = async () => {

  if (!nombreRemitente.value || !asunto.value || !correo.value || !mensaje.value) {
    tipoAlerta.value = "warning";
    tituloAlerta.value = "Campos incompletos";
    mensajeAlerta.value = "Por favor, completa todos los campos antes de enviar el correo.";
    mostrarAlerta.value = true;
    return;
  }
  else{

  try {
    const response = await axios.post("/api/enviarCorreo", {
      nombreRemitente: nombreRemitente.value,
      asunto: asunto.value,
      correo: correo.value,
      mensaje: mensaje.value
    });

    if(response.status === 200){

      let nombre = nombreRemitente.value.split(" ")[0];
      
      tipoAlerta.value = "success";
    tituloAlerta.value = "¡Correo Enviado de manera exitosa!";
    mensajeAlerta.value = `Gracias por contactarme. Te responderé lo antes posible. ¡Que tengas un excelente ${nombre}!`;
    mostrarAlerta.value = true;
    

      nombreRemitente.value = '';
      asunto.value = '';
      correo.value = '';
      mensaje.value = '';

    }
    
  } catch (error) {

    tipoAlerta.value = "error";
    tituloAlerta.value = "Error al enviar el correo";
    mensajeAlerta.value = "Hubo un problema al enviar tu correo. Por favor, intenta nuevamente más tarde.";
    mostrarAlerta.value = true;
  }
  }
};

</script>


<template>
  <section key="contactame" class="page">

    <div class="grid grid-cols-12">

      <div class="col-span-1"></div>
      <div class="col-span-5">

        <div>
          <h2 class="text-turquesaBtnText animate-pulse my-10 items-center flex justify-center text-5xl">Contactame</h2>
        </div>

        <div class="text-center text-lg ">

          Estoy abierto a nuevas oportunidades laborales y proyectos freelance. Este espacio está pensado para consultas, propuestas o ideas de colaboración; si deseas trabajar conmigo o conversar sobre un proyecto, estaré encantado de leerte y responderte.
        </div>

        <br>
<hr>
        <table  class="[&_td]:text-center [&_td]:p-2  [&_th]:p-2 [&_button]:border [&_button]:border-white [&_button]:rounded-xl [&_button]:hover:bg-white rounded-2xl  [&_button]:hover:text-black w-full [&_button]:w-full text-gray-400 items-center justify-center">

  
  
  <tbody class=" "> <!-- Opcional: para el cuerpo -->
    
    <tr class="">

      <td class="text-turquesaBtnBorder font-bold">Correo Electronico</td>
      <td>Ralfhsebastiaar@gmail.com</td>
      <td><button class="cursor-copy" @click="copiarTexto">Copiar!</button></td>
    </tr>
    
    <tr>

      <td class="text-turquesaBtnBorder font-bold">LinkedIn</td>
      <td>/ralph.Profesional/linked/73</td>
      <td><a href="sobreMi"><button class="hover:cursor-pointer">Visitar</button></a></td>
    </tr>

    <tr>
      <td class="text-turquesaBtnBorder font-bold">GitHub</td>
      <td>/ralph.devGithub/277362511626001</td>
      <td><a href="sobreMi"><button class="cursor-pointer">Visitar</button></a></td>
    </tr>

    <tr>
      <td class="text-turquesaBtnBorder font-bold">Whatsapp</td>
      <td>(+506) 62732763</td>
      <td><a href="https://wa.me/62732763"><button class="cursor-alias">Escribir mensaje</button></a></td>
    </tr>

  </tbody>

</table>


       

       

        <div class="flex justify-center items-center m-5 gap-4">
            <span class="text-lg text-white">Costa Rica</span>
            <img src="/icons/costa-rica.svg" alt="Contactame Illustration" class="h-12 w-12" />
          </div>


      </div>
      <div class="col-span-1"></div>

      <div class="col-span-4  flex justify-center items-center">


        <card class="border-turquesaBtnBorder backdrop-blur-2xl">
          

          <div class="space-y-4 p-3">
           

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



  </div>

        </card>
      </div>
      <div class="col-span-1"></div>



    </div>

    <hr>
    <br>
    <div class="flex justify-center text-2xl text-gray-400">
      <span>"Responderé lo antes posible. Gracias por tomarte el tiempo de visitar mi portafolio."</span>
    </div>


    <Alert
      :mostrar="mostrarAlerta"
      :tipo="tipoAlerta"
      :titulo="tituloAlerta"
      :mensaje="mensajeAlerta"
      @cerrar="mostrarAlerta = false"
    />

  </section>
</template>
