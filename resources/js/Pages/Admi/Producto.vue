<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteButton from '@/Components/DeleteButton.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';

defineProps({
    productos: {
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
        <h2 class="font-semibold text-xl text-gray-50 leading-tight">Productos</h2>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="table-auto min-w-full text-left">
                            <thead class="border-b font-medium">
                                <tr>
                                    <th class="px-6 py-4"> Nombre </th>
                                    <th class="px-6 py-4"> Descripción </th>
                                    <th class="px-6 py-4"> Categoría </th>
                                    <th class="px-6 py-4"> Cantidad </th>
                                    <th class="px-6 py-4"> Cantidad mínima de existencia </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(p, index) in productos " :key="index"
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 ">
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.nombre_producto }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.descripcion }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.nombre_categoria }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.cantidad }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ p.cantidad_min }}</td>
                                    <td>
                                        <div class="flex flex-nowrap gap-1">
                                            <Link>
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

                                            <Link>
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


                                            <DeleteButton v-if="$page.props.auth.user.rol_id == 1"
                                                @accept="borrarUsuario(user.id)" />
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
