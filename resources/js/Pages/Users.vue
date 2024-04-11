<template>
    <Head title="User"/>


        <h1 class="text-3xl">
            Users
        </h1>


        <ul>
            <li v-for="user in users" :key="user.id">{{ user.name }}</li>
        </ul>

</template>

<script setup>

defineProps({
    users: Array
})

</script>
