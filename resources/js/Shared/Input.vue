<template>
  <div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-sm text-gray-700" :for="name">
      <slot />
    </label>

    <input
      :value="value"
      @input="$emit('update:value', $event.target.value)"
      :id="name"
      :name="name"
      :type="type"
      class="border border-gray-700 rounded-lg p-2 w-full"
      required
    />
    <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-red-500 text-xs mt-1"></div>
  </div>
</template>

<script setup>
defineProps({
  value: String,
  type: String,
  name: String,
  errors: Object
});

defineEmits(["update:value"]);
</script>
