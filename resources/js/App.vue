<template>

  <div :class="temaActual" class="fixed inset-0 z-0"></div>
  <div id="" class=" text-white contenedorVue scrollable">



    <div class="relative z-5 bg-gradient-to-r from-black/80 from-100% to-90% md:from-74% md:to-transparent md:to-90% ">



      <!-- NAVBAR -->

      <div class="fixed top-0 w-full z-[10] bg-black shadow-lg shadow-turquesaBtnBorder">

        <div class="grid grid-cols-12 items-center p-3">

          <!-- MOBILE: HAMBURGER -->
          <div class="col-span-4 md:hidden flex items-center">
            <button @click="menuOpen = true">
              <i class="fa-solid fa-bars text-xl"></i>
            </button>
          </div>

          <!-- TITULO -->
          <div class="col-span-4 md:hidden md:col-span-2 text-center font-semibold">
            Portfolio Web
          </div>

          <!-- NAV DESKTOP -->
          <div class="hidden md:flex col-span-9 justify-center gap-4 text-sm font-semibold">
            <RouterLink to="/" class="routerNavBar">INICIO</RouterLink>
            <RouterLink to="/sobreMi" class="routerNavBar">SOBRE MI</RouterLink>
            <RouterLink to="/servicios" class="routerNavBar">SERVICIOS</RouterLink>
            <RouterLink to="/proyectos" class="routerNavBar">PROYECTOS</RouterLink>
            <RouterLink to="/tecnologias" class="routerNavBar">TECNOLOGIAS</RouterLink>
            <RouterLink to="/curriculums" class="routerNavBar">CURRICULUMS</RouterLink>
            <RouterLink to="/comentarios" class="routerNavBar">COMENTARIOS</RouterLink>
            <RouterLink to="/contactame" class="routerNavBar">CONTACTAME</RouterLink>
          </div>

          <!-- BOTONES -->
          <div class="col-span-4 md:col-span-3 flex justify-end gap-2 md:gap-4">
            <Button variant="secondary" size="secondary" class="hidden md:flex">
              Admin <i class="fa-solid fa-user fa-lg"></i>
            </Button>

            <Button variant="secondary" size="sm" @click="cambiarTema">
              <i class="fa-solid fa-palette"></i>
            </Button>
          </div>

        </div>

        <!-- LINEAS DECORATIVAS -->
        <div class="px-4 md:px-8">
          <hr class="border-cyan-400">
          <hr class="border-white">
          <div class="h-1.5 bg-gradient-to-b to-black from-turquesaBtnBorder"></div>
        </div>

      </div>



      <!-- FALSO NAVBAR ESPACIO VACIO-->

      <div class=" h-20"></div>


      <!-- OVERLAY -->
      <div v-if="menuOpen" class="fixed inset-0 bg-black/70 z-20" @click="menuOpen = false"></div>

      <!-- MENU -->
      <div class="fixed top-0 left-0 h-full w-64 bg-black z-30 transform transition-transform duration-300"
        :class="menuOpen ? 'translate-x-0' : '-translate-x-full'">

        <div class="p-5 flex flex-col gap-4 text-lg">

          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/">Inicio</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/sobreMi">Sobre Mi</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/servicios">Servicios</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/proyectos">Proyectos</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/tecnologias">Tecnologias</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/curriculums">Curriculums</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/comentarios">Comentarios</RouterLink>
          <RouterLink class="routerNavBarMobile" @click="menuOpen = false" to="/contactame">Contactame</RouterLink>

        </div>

      </div>




      <!-- MAIN -->

      <Transition name="page-fade" mode="out-in">
        <RouterView class="min-h-150" />
      </Transition>


      <!-- FIN DEL MAIN -->



      <!-- FOOTER -->

      <div class="bg-turquesaBtnBorder h-0.5"></div>
      <div class="bg-white h-0.5"></div>

      <div class="bg-gradient-to-b from-cyan-950 to-black text-white">

        <div class="bg-gradient-to-b from-turquesaBtnBorder to-transparent h-2"></div>

        <div class="py-10 px-4 md:px-10">

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- FRASE -->
            <div>
              <div class="h-0.5 bg-white mb-6 w-2/3"></div>

              <h4 class="text-lg md:text-2xl font-semibold leading-relaxed">
                El esfuerzo siempre proveerá frutos siempre y cuando nunca te rindas
                y logres superar cada obstáculo.
              </h4>

              <div class="h-0.5 bg-white mt-6 w-2/3"></div>
            </div>

            <!-- FORMULARIO -->
            <div>
              <h2 class="text-lg underline underline-offset-4 pb-3">
                Envíame un correo:
              </h2>

              <input placeholder="Tu Nombre" class="p-2 rounded-lg w-full my-2 bg-transparent border border-cyan-700
          focus:ring-2 focus:ring-cyan-400 outline-none" />

              <input placeholder="Tu email" class="p-2 rounded-lg w-full my-2 bg-transparent border border-cyan-700
          focus:ring-2 focus:ring-cyan-400 outline-none" />

              <textarea rows="4" placeholder="Tu mensaje" class="p-2 rounded-lg w-full my-2 bg-transparent border border-cyan-700
          focus:ring-2 focus:ring-cyan-400 outline-none"></textarea>

              <div class="flex justify-end mt-3">
                <button class="px-4 py-2 border-2 border-cyan-400 rounded-xl
            hover:bg-cyan-900 transition">
                  Enviar
                </button>
              </div>
            </div>

            <!-- LINKS -->
            <div class="hidden md:show text-center md:text-left md:flex flex-col gap-2">
              <RouterLink to="/" class="routerNavBarFooter">INICIO</RouterLink>
              <RouterLink to="/sobreMi" class="routerNavBarFooter">SOBRE MI</RouterLink>
              <RouterLink to="/servicios" class="routerNavBarFooter">SERVICIOS</RouterLink>
              <RouterLink to="/proyectos" class="routerNavBarFooter">PROYECTOS</RouterLink>
              <RouterLink to="/tecnologias" class="routerNavBarFooter">TECNOLOGIAS</RouterLink>
              <RouterLink to="/curriculums" class="routerNavBarFooter">CURRICULUMS</RouterLink>
              <RouterLink to="/comentarios" class="routerNavBarFooter">COMENTARIOS</RouterLink>
              <RouterLink to="/contactame" class="routerNavBarFooter">CONTACTAME</RouterLink>
            </div>

            <!-- INFO + REDES -->
            <div>
              <h2 class="text-xl md:text-2xl font-semibold">
                Ralph Sebastian Abarca Rodriguez
              </h2>

              <hr class="border-cyan-800 my-3">

              <div class="text-gray-400 text-sm leading-relaxed">
                RalfhSebastiaar@gmail.com <br>
                (+506) 6273-2763 <br>
                Siquirres, Limón, Costa Rica <br>
                Universidad de Costa Rica
              </div>

              <div class="text-amber-200 mt-4">
                Visita mis redes sociales:
              </div>

              <div class="flex flex-wrap gap-3 mt-4">

                <a href="#" class="socialIcon hover:bg-blue-400">
                  <i class="fa-brands fa-linkedin"></i>
                </a>

                <a href="#" class="socialIcon hover:bg-gray-400">
                  <i class="fab fa-github"></i>
                </a>

                <a href="#" class="socialIcon hover:bg-red-400">
                  <i class="fa-brands fa-youtube"></i>
                </a>

                <a href="#" class="socialIcon hover:bg-blue-500">
                  <i class="fab fa-facebook"></i>
                </a>

                <a href="#" class="socialIcon hover:bg-pink-500">
                  <i class="fab fa-instagram"></i>
                </a>

                <a href="#" class="socialIcon hover:bg-green-500">
                  <i class="fab fa-whatsapp"></i>
                </a>

              </div>

            </div>

          </div>

        </div>

      </div>
      <!-- FIN DEL FOOTER -->

      <div class="text-center bg-gray-950 border-t-1 border-gray-500 text-gray-500 pe-3">
        &copy; 2025 Ralph Sebastian Abarca Rodriguez. Todos los derechos reservados.
      </div>

    </div>
  </div>

</template>




<script setup>
import { ref, computed } from 'vue'
import Button from '@/components/ui/button/Button.vue'

const menuOpen = ref(false);



const currentSection = ref('inicio');

let contador = ref(0);
const temas = ["tema1", "tema2", "tema3", "tema4", "tema5", "tema6", "tema7"];

const cambiarTema = () => {
  contador.value = (contador.value + 1) % temas.length;
};

const temaActual = computed(() => temas[contador.value]);
</script>


<style>
.page-fade-enter-active,
.page-fade-leave-active {
  transition: opacity 0.5s ease, transform 0.6s ease-in;
}

.page-fade-enter-from {
  opacity: 0;
  transform: translateX(40px);
}

.page-fade-enter-to {
  opacity: 1;
  transform: translateX(0);
}

.page-fade-leave-from {
  opacity: 1;
  transform: translateX(0);
}

.page-fade-leave-to {
  opacity: 0;
  transform: translateX(-10px);
}
</style>
