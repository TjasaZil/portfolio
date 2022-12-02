<template>
  <img
    src="@/assets/Images/hero-bg-1.png"
    alt="a hero image with multi colored circles"
    class="animate-[inout_4s_infinite]"
  />
  <img
    src="@/assets/Images/hero-bg-2.png"
    alt="a hero image with multi colored circles"
    class="animate-[inout_8s_infinite]"
  />
  <img
    src="@/assets/Images/hero-bg-3.png"
    alt="a hero image with multi colored circles"
    class="animate-[inout_12s_infinite]"
  />
  <img
    src="@/assets/Images/hero-bg-4.png"
    alt="a hero image with multi colored circles"
    class="animate-[inout_16s_infinite]"
  />
  <img
    src="@/assets/Images/hero-bg-5.png"
    alt="a hero image with multi colored circles"
    class="animate-[inout_20s_infinite]"
  />
</template>

<script lang="ts">
export default {
  name: "BgImage",
};
</script>

<style scoped>
img {
  @apply right-0 top-0 hidden lg:block absolute w-1/3 lg:w-auto max-h-screen;
}
</style>
