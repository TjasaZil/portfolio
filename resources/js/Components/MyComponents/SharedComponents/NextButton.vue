<template>
  <section>
    <Link href="/skills">
      <div
        class="w-8 h-8 xl:w-12 xl:h-12 border-2 border-solid rounded-full border-neutral-200 hover:cursor-pointer"
      >
        <div class="triangle"></div>
      </div>
    </Link>
  </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "NextButton",
  components: { Link },
};
</script>

<style scoped>
.triangle {
  @apply w-0 h-0  border-y-transparent border-solid border-l-pink-500 animate-inout border-y-[8px] border-l-[8px] mx-[11px] mt-[6px] xl:border-y-[12px] xl:border-l-[18px] xl:mx-[16px] xl:mt-[10px];
}
</style>
