<template>
  <transition name="fade">
    <div
      v-if="mostrar"
      class="fixed inset-0 flex items-center justify-center z-5 bg-black/50 backdrop-blur-sm"
    >
      <div
        class="bg-turquesaBtnBg text-white rounded-2xl shadow-xl border p-6 max-w-md w-full mx-4"
        :class="{
          'border-turquesaBtnBorder': tipo === 'success',
          'border-red-500': tipo === 'error',
          'border-yellow-500': tipo === 'warning'
        }"
      >
        <!-- Icono -->
        <div class="flex items-center gap-3 mb-4">
          <div
            v-if="tipo === 'success'"
            class=" p-3 rounded-full"
          >
            <i class="fa-solid fa-check fa-2xl text-green-300"></i>
          </div>
          <div
            v-if="tipo === 'error'"
            class="bg-red-900 p-3 rounded-full"
          >
            ❌
          </div>
          <div
            v-if="tipo === 'warning'"
            class="bg-yellow-500 p-3 rounded-full"
          >
            ⚠️
          </div>
          <h2 class="text-lg font-semibold">{{ titulo }}</h2>
        </div>

        <!-- Mensaje -->
        <p class="text-gray-300">{{ mensaje }}</p>

        <!-- Botón de cerrar -->
        <div class="flex justify-end mt-6">
          <button
            @click="$emit('cerrar')"
            class="px-4 py-2 rounded-lg text-white font-medium transition-all duration-200"
            :class="{
              'bg-green-600 hover:bg-green-500': tipo === 'success',
              'bg-red-600 hover:bg-red-500': tipo === 'error',
              'bg-yellow-600 hover:bg-yellow-500': tipo === 'warning'
            }"
          >
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </transition>
</template>

<script setup>
defineProps({
  mostrar: Boolean,
  tipo: {
    type: String,
    default: "success", // success | error | warning
  },
  titulo: {
    type: String,
    default: "¡Listo!",
  },
  mensaje: {
    type: String,
    default: "",
  },
});

</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
