<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteButton from '@/Components/DeleteButton.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

defineProps({
    proveedores: {
        type: Object,
    }
});

const borrarUsuario = (id) => {
    // Logica de borrado
    console.log("Se eliminará al usuario " + id);
}
</script>

<template>

    <Head title="Pacientes" />

    <AuthenticatedLayout>
        <h2 class="font-semibold text-xl text-gray-50 leading-tight">Proveedores</h2>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="table-auto min-w-full text-left">
                            <thead class="border-b font-medium">
                                <tr>
                                    <th class="px-6 py-4"> Nombre </th>
                                    <th class="px-6 py-4"> Direccion </th>
                                    <th class="px-6 py-4"> Contacto </th>
                                    <th class="px-6 py-4"> Telefono </th>
                                    <th class="px-6 py-4"> Correo </th>
                                    <th class="px-6 py-4"> Sitio web </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(p, index) in proveedores " :key="index"
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 ">
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.nombre }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.direccion }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.contacto }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.telefono }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.email }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.sitio_web }}</td>
                                    <!-- <td>
                                        <div class="flex flex-nowrap gap-1">
                                            <Link :href="route('paciente.ver', { id: p.producto_id })">
                                            <div
                                                class="flex w-fit cursor-pointer px-2 py-1 border border-indigo-300 rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300 ease-in-out">
                                                <p> Ver </p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                            </Link>

                                            <Link v-if="$page.props.auth.user.rol_id == 1"
                                                :href="route('paciente.editar', { id: p.producto_id })">
                                            <div
                                                class="flex w-fit cursor-pointer px-2 py-1 border border-indigo-300 rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300 ease-in-out">
                                                <p> Editar </p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>
                                            </div>
                                            </Link>

                                            <Link v-if="$page.props.auth.user.rol_id == 1"
                                                :href="route('paciente.borrar', { id: id: p.producto_id })">
                                            <div
                                                class="flex w-fit cursor-pointer px-2 py-1 border border-indigo-300 rounded-lg hover:bg-indigo-600 hover:text-white transition duration-300 ease-in-out">
                                                <p> Borrar </p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </div>
                                            </Link>





                                        </div>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
