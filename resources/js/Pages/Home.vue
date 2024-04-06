<template>
<h1>
    Hello, {{ name }}.
</h1>
    <p>In this series, we'll be using the following frameworks:</p>

    <ol>
        <li v-for="framework in frameworks"> {{ framework }} </li>
    </ol>

</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array
    }
}
</script>