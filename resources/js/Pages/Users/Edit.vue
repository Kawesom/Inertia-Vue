<template>
    <Head title="Edit User" />

    <h1 class="text-3xl">Edit User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name"> Name </label>

        <input v-model="form.name" class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" required>

        <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="text-red-500 text-xs mt-1"></div>
      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>

        <input v-model="form.email" class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"  required/>

        <div v-if="$page.props.errors.email" class="text-red-500 text-xs mt-1" v-text="$page.props.errors.email"></div>
      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password"> Password </label>

        <input
          v-model="form.password"
          class="border border-gray-400 p-2 w-full"
          type="password"
          name="password"
          id="password"
          required
        />

        <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-red-500 text-xs mt-1"></div>
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 disabled:bg-black" :disabled="form.processing">Submit</button>
      </div>
    </form>
</template>

<script setup>
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3'


let form = reactive({
    name: '',
    email: '',
    password: ''
  });

  //form.processing = false;

  let submit = () => {
    //form.processing = true;
    router.put('/users/edit',form);
  };

</script>
