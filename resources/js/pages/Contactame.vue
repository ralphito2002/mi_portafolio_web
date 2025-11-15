<script setup>

import Card from '@/components/ui/card/Card.vue';
import Button from '@/components/ui/button/Button.vue';

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

      <div class="col-span-5 m-10 px-5">


        <card>
          <div class="text-lg text-center m-4 text-white flex">Puedes enviarme un correo electroico directo desde
            aca:</div>

          <form class="space-y-4 p-5">
            <input type="text" placeholder="Tu nombre"
              class="w-full p-2 rounded bg-gray-900 text-white border border-gray-700" />
            <input type="email" placeholder="Tu correo"
              class="w-full p-2 rounded bg-gray-900 text-white border border-gray-700" />
            <input type="text" placeholder="Asunto"
              class="w-full p-2 rounded bg-gray-900 text-white border border-gray-700" />
            <textarea rows="4" placeholder="Tu mensaje..."
              class="w-full p-2 rounded bg-gray-900 text-white border border-gray-700"></textarea>
            <button type="submit"
              class="w-full bg-gradient-to-r from-turquesaBtnBorder to-teal-900 py-2 rounded-xl text-white font-semibold hover:scale-105 transition">Enviar
              mensaje</button>
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
