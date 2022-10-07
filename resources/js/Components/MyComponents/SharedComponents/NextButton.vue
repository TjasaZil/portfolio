<template>
  <section>
    <div
      class="w-16 h-16 border-2 border-solid rounded-full border-neutral-200"
    >
      <div class="triangle"></div>
    </div>
  </section>
</template>

<script>
export default {
  name: "NextButton",
};
</script>

<style scoped>
.triangle {
  @apply w-0 h-0 border-y-[18px] border-y-transparent border-solid border-l-pink-500 border-l-[25px] mx-auto mt-2 animate-inout;
}
</style>
