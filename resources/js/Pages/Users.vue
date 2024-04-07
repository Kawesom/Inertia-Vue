<template>
    <Head title="User"/>
            
      
        <h1>
            Users
        </h1>


        <div style="margin-top: 400px">
            <p>The Current time is {{ time }}.</p>

            <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
        </div>
    
</template>

<script>
import Layout from "../Shared/Layout.vue";
//import { Head } from "@inertiajs/vue3";

    export default 
    {
        layout: Layout,

        props: {
        time: String
        }
    }
</script>
