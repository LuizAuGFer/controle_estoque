<script setup>
defineProps({
  title: {
    title: String,
    default: "Tìtulo",
  },
});
</script>

<template>
  <div class="card card-primary card-outline mb-4 mt-4">
    <div class="card-header">
      <div class="card-title">
        {{ title }}
      </div>
    </div>
    <div class="card-body">
      <slot />
    </div>
    <div class="card-footer text-end">
        <slot name="footer"/>
    </div>
  </div>
</template>
