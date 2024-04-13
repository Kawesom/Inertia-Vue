<template>
    <nav class="ml-6">
        <ul class="flex space-x-6">
        <li><Navlink href="/" :active="$page.component == 'Home'">Home</Navlink></li>
        <li><Navlink href="/users" :active="$page.component == 'Users'">Users</Navlink></li>
        <li><Navlink href="/settings" :active="$page.component == 'Settings'">Settings</Navlink></li>
    </ul>
    </nav>
</template>

<script>
import Navlink from "./Navlink.vue";

export default {
    components: { Navlink },
}
</script>
