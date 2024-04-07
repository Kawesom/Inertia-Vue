<template>
    <nav class="mt-6">
        <ul class="list-disc">
        <li><Navlink href="/" :active="$page.component == 'Home'">Home</Navlink></li>
        <li><Navlink href="/settings" :active="$page.component == 'Settings'">Settings</Navlink></li>
        <li><Navlink href="/users" :active="$page.component == 'Users'">Users</Navlink></li>
    </ul>
    </nav>
</template>

<script>
import Navlink from "./Navlink.vue";

export default {
    components: { Navlink },
}
</script>