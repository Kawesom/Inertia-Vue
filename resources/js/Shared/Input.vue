<template>
    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" :for="name">
            <slot />
        </label>

        <input
        	:value="value"
        	@input="$emit('update:value', $event.target.value)"
        	:id="name"
        	:name="name"
        	:type="type"
        	class="border border-gray-700 rounded-lg p-2 w-full md:w-1/2"
        	required
        >
    </div>
</template>

<script setup>
defineProps({
    value: String,
    type: String,
    name: String,
});

defineEmits(['update:value']);
</script>
