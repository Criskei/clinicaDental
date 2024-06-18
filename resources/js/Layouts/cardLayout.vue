<template>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
        <div class="flex flex-col p-6 text-gray-900">
            <p class="uppercase text-xl font-semibold border-b-2 border-pink-500 w-fit">
                <slot name="tituloCard" />
            </p>
            <slot />
        </div>
    </div>
</template>