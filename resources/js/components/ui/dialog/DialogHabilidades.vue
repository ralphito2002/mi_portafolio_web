<template>

    
        <dialog id="modalHabilidades" aria-labelledby="dialog-title"
            class="fixed inset-0 size-auto max-h-none max-w-none scrollable bg-transparent backdrop-opacity-85 z-3">
            <div
                class="fixed inset-0 bg-black/80 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></div>

            <div tabindex="0"
                class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden border-2 border-turquesaBtnBorder rounded-lg bg-turquesaBtnBg text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all hover:shadow-[0_0_25px_5px_rgba(41,158,154,0.7)] data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                    <div class="bg-black px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                        <div class="text-center p-3 text-turquesaBtnBorder text-3xl w-full border-b-2">Habilidades {{tipo}}</div>

                        <div class="flex justify-center items-center">
                        <ul class="grid gap-4 py-5 px-10">

                            <li v-for="habilidad in habilidades" :key="habilidad.id_habilidad" class="list-disc text-lg text-left text-white">
                                {{habilidad.nombre}}
                            </li>

                        </ul>
</div>
                        




                    </div>

                    <div class="bg-gray-700/25 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">

                        <button type="button" command="close" commandfor="modalHabilidades"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-red-800/20 border-2 border-red-800/80 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-red-900/90 hover:border-red-500 hover:shadow-[0_0_20px_3px_rgba(220,38,38,0.7)] sm:mt-0 sm:w-auto items-center ">Cerrar</button>

                    </div>
                </div>
            </div>
        </dialog>
    

</template>


<script setup>


const props = defineProps({
    tipo: {
        type: String,
        required: true
    },
    habilidades: {
        type: Object,
        required: true
    }
});

</script>