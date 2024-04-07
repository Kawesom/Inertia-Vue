<template>
    <Link class="text-black hover:underline" :class="{'font-bold underline': active}"
    > 
    <slot/>
</Link>


</template>

<script>

export default {
    components: {},

  props: {
    active: Boolean
  }
}
</script>