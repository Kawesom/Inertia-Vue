<template>
    <Head title="Login" />


    <main class="grid place-items-center min-h-screen">
        <section class="bg-blue-600 p-8 rounded-xl max-w-md mx-auto mt-8 border">
            <h1 class="text-3xl mb-6">Login</h1>

            <form @submit.prevent="submit">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>

                    <input v-model="form.email" class="border p-2 w-full rounded" type="email" name="email"
                        id="email" required />

                    <div v-if="$page.props.errors.email" class="text-red-500 text-xs mt-1"
                        v-text="$page.props.errors.email"></div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password"> Password
                    </label>

                    <input v-model="form.password" class="border p-2 w-full rounded" type="password"
                        name="password" id="password" required />

                    <div v-if="$page.props.errors.password" v-text="$page.props.errors.password"
                        class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-6">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 disabled:bg-black"
                        :disabled="form.processing">Login</button>
                </div>
            </form>
        </section>
    </main>
</template>

<script setup>
import { router } from '@inertiajs/vue3';
import { reactive } from 'vue';

defineOptions({ layout: null });

let form = reactive({
    email: '',
    password: '',
  });

//form.processing = false;

let submit = () => {
  //form.processing = true;
  router.post('/login',form);
};
</script>

