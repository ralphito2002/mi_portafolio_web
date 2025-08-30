<script setup lang="ts">
import type { HTMLAttributes } from 'vue'
import { cn } from '@/lib/utils'

const props = defineProps<{
  class?: HTMLAttributes['class']
}>()
</script>

<template>
  <div
    data-slot="card"
    :class="
      cn(
        'bg-white/15 text-card-foreground flex flex-col gap-6 rounded-xl border-2 border-white overflow-hidden  hover:shadow-[0_0_25px_5px_rgba(41,158,154,0.7)]',
        props.class,
      )
    "
  >
    <slot />
  </div>
</template>
