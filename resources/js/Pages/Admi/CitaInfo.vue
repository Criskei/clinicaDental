<script setup>
import { computed, onMounted, ref, watch } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import cardLayout from '@/Layouts/cardLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import tituloTabla from '@/Components/tituloTabla.vue';
import contenidoTabla from '@/Components/contenidoTabla.vue';
import Checkbox from '@/Components/Checkbox.vue';
import { useForm } from '@inertiajs/vue3';
import tablaCRUDLayout from '@/Layouts/tablaCRUDLayout.vue';


const props = defineProps({
    cita: {
        type: Object
    },
    pagos: {
        type: Array,
    },
    tratamientos: {
        type: Array,
    },
    productos: {
        type: Array,
    }
});
</script>

<template>

    <Head title="Cita" />

    <AuthenticatedLayout>

        <h2 class="font-semibold text-xl text-black leading-tight">Información Cita</h2>

        <cardLayout>
            <template #tituloCard>
                Datos de la cita
            </template>

            <table>
                <tbody>
                    <tr>
                        <td class="label">Paciente</td>
                        <td>{{ cita.paciente.usuario.nombres }}</td>
                    </tr>
                    <tr class="info-container">
                        <td class="label">Dentista</td>
                        <td>{{ cita.dentista.usuario.nombres }}</td>
                    </tr>
                    <tr class="info-container">
                        <td class="label">Estado</td>
                        <td>{{ cita.estado.nombre_estado }}</td>
                    </tr>
                    <tr class="info-container">
                        <td class="label">Fecha de la cita</td>
                        <td>{{ cita.fecha_cita }}</td>
                    </tr>
                    <tr class="info-container">
                        <td class="label">Hora de inicio</td>
                        <td>{{ cita.hora_inicio }}</td>
                    </tr>
                    <tr class="info-container">
                        <td class="label">Hora de fin</td>
                        <td>{{ cita.hora_fin }}</td>
                    </tr>                
                </tbody>
            </table>
        </cardLayout>
        

        <cardLayout>
            <template #tituloCard>
                Pagos
            </template>

            <tablaCRUDLayout>
                <template #tituloTabla>
                    <tituloTabla>Metodo de pago</tituloTabla>
                    <tituloTabla>Tipo de pago</tituloTabla>
                    <tituloTabla>Monto</tituloTabla>
                    <tituloTabla>Fecha</tituloTabla>
                </template>

                <template #contenidoTabla>
                    <tr v-for="(p, index) in pagos " :key="index">
                        <checkbox />
                        
                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center space-x-4">
                                <button type="button" data-modal-target="updateProductModal"
                                    data-modal-toggle="updateProductModal"
                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Editar
                                </button>
                                <Link
                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                                    class="w-4 h-4 mr-2 -ml-0.5">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                </svg>
                                Ver
                                </Link>
                                <button type="button" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                    class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Borrar
                                </button>
                            </div>
                        </td>
                    </tr>
                </template>
            </tablaCRUDLayout>
        </cardLayout>

        <cardLayout>
            <template #tituloCard>
                Tratamientos realizados
            </template>

            <tablaCRUDLayout>
                <template #tituloTabla>
                    <tituloTabla>Tratamiento</tituloTabla>
                    <tituloTabla>Diente</tituloTabla>
                    <tituloTabla>Estado</tituloTabla>
                    <tituloTabla>Nota</tituloTabla>
                    <tituloTabla>Receta médica</tituloTabla>
                    <tituloTabla>Registrado por</tituloTabla>
                    <tituloTabla>Creado</tituloTabla>
                    <tituloTabla>Ultimo cambio</tituloTabla>
                </template>

                <template #contenidoTabla>
                    <tr v-for="(t, index) in tratamientos " :key="index">
                        <checkbox />
                        <contenidoTabla>{{ t.historial_medico.tratamiento.nombre_tratamiento ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.diente.nombre_diente ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.estado.nombre_estado ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.nota ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.receta_medica ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.tipo_historial.nombre_tipo_historial ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.created_at ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ t.historial_medico.updated_at ?? null }}</contenidoTabla>
                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center space-x-4">
                                <button type="button" data-modal-target="updateProductModal"
                                    data-modal-toggle="updateProductModal"
                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Editar
                                </button>
                                <Link
                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                                    class="w-4 h-4 mr-2 -ml-0.5">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                </svg>
                                Ver
                                </Link>
                                <button type="button" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                    class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Borrar
                                </button>
                            </div>
                        </td>
                    </tr>
                </template>
            </tablaCRUDLayout>
        </cardLayout>

        <cardLayout>
            <template #tituloCard>
                Productos usados
            </template>

            <tablaCRUDLayout>
                <template #tituloTabla>
                    <tituloTabla>Producto</tituloTabla>
                    <tituloTabla>Cantidad</tituloTabla>
                </template>

                <template #contenidoTabla>
                    <tr v-for="(p, index) in productos " :key="index">
                        <checkbox />
                        <contenidoTabla>{{ p.nombre ?? null }}</contenidoTabla>
                        <contenidoTabla>{{ p.pivote.cantidad }}</contenidoTabla>
                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center space-x-4">
                                <button type="button" data-modal-target="updateProductModal"
                                    data-modal-toggle="updateProductModal"
                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Editar
                                </button>
                                <Link
                                    class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                                    class="w-4 h-4 mr-2 -ml-0.5">
                                    <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                </svg>
                                Ver
                                </Link>
                                <button type="button" data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                    class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5"
                                        viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Borrar
                                </button>
                            </div>
                        </td>
                    </tr>
                </template>
            </tablaCRUDLayout>
        </cardLayout>        
    </AuthenticatedLayout>
</template>
<style scoped>
.label {
    @apply font-semibold pr-4
}

.info-container {
    @apply gap-2 items-baseline
}
</style>
