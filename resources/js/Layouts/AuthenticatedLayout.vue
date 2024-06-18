<script setup>
import NavBarLayout from '@/Layouts/NavBarLayout.vue';
import SideBarLayout from '@/Layouts/SideBarLayout.vue';

</script>

<template>
    <div class="min-h-screen bg-slate-50 ">
        <NavBarLayout/>
        <SideBarLayout/>
        <main class="p-4 md:ml-64 h-auto pt-20">
            <slot/>
        </main>
    </div>
</template>