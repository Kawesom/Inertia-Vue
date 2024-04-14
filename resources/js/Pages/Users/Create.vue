<template>
    <Head title="Create User"/>

    <h1 class="text-3xl">Create New User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <Input v-model:value="form.name" name="name" type="text">
            Name
            
        </Input>
        
        <Input v-model:value="form.email" name="email" type="email">
            Email
        </Input>
        
        <Input v-model:value="form.password" name="password" type="password">
            Password
        </Input>
        
        <div class="mb-6">
            <button :disabled="processing" class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500 disabled:bg-black" type="submit">
                Submit
            </button>
        </div>
    </form>
</template>

<script setup>

import { router,useForm } from '@inertiajs/vue3';
import Input from '../../Shared/Input.vue';


let form = useForm({
    name: '',
    email: '',
    password: ''
});


let submit = () => {

    router.post('/users', form, {
        onStart: () => {processing.value = true},
        onFinish: () => {processing.value = false}
    });
};



</script>
