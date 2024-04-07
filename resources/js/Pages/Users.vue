<template>
    <Layout>
        <h1>
            Users
        </h1>


        <div style="margin-top: 400px">
            <p>The Current time is {{ time }}.</p>

            <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import Layout from "../Shared/Layout.vue";

export default {
    components: { Layout, Link },

    props: {
        time: String
    }
}
</script>
