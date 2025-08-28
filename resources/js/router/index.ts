import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';

// Importamos las páginas
import Inicio from '@/pages/Inicio.vue';
import SobreMi from '@/pages/SobreMi.vue';
import Proyectos from '@/pages/Proyectos.vue';
import Tecnologias from '@/pages/Tecnologias.vue';
import Servicios from '@/pages/Servicios.vue';
import Curriculums from '@/pages/Curriculums.vue';
import Comentarios from '@/pages/Comentarios.vue';


// Definimos las rutas con tipado
const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'inicio',
    component: Inicio,
  },
  {
    path: '/sobreMi',
    name: 'sobreMi',
    component: SobreMi,
  },
  {
    path: '/servicios',
    name: 'servicios',
    component: Servicios,
  },
  {
  path: '/proyectos',
    name: 'protectos',
    component: Proyectos,
  },
   {
  path: '/tecnologias',
    name: 'tecnologias',
    component: Tecnologias,
  },
  {
  path: '/curriculums',
    name: 'curriculums',
    component: Curriculums,
  },
  {
  path: '/comentarios',
    name: 'comentarios',
    component: Comentarios,
  },
  {
  path: '/contactame',
    name: 'contactame',
    component: Tecnologias,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
