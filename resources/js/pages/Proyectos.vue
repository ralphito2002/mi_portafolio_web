<script setup>
import Button from '@/components/ui/button/Button.vue';
</script>

<template>
  <div class="min-h-screen bg-gray-900 text-white blur2">
    <!-- Navbar -->
    <NavMain>
      <template #default>

      </template>
    </NavMain>

    <!-- Contenido -->
    <main class="p-6">
      <h1 class="text-3xl font-bold">Bienvenido a Proyectos</h1>
      <p class="mt-4 text-turquesaBtnBg">
        Aquí podrás ver todos los proyectos que hemos trabajado.

        <Button>hooi</Button>
      </p>
    </main>
  </div>
</template>
