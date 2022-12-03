<template>
  <section class="mt-32">
    <h1
      class="font-bold tracking-tighter text-xl sm:text-2xl md:text-3xl lg:text-4xl 3xl:text-5xl 4xl:text-6xl text-neutral-200"
    >
      Hello, I am
      <span
        class="text-emerald-700 text-2xl sm:text-3xl md:text-4xl lg:text-5xl 3xl:text-6xl 4xl:text-7xl"
        >Tjaša</span
      >
    </h1>
    <h2 class="text-neutral-200">Welcome to my page.</h2>
    <div
      class="flex items-center absolute top-60 sm:top-72 md:top-80 lg:top-96 mt-16 text-neutral-200"
    >
      <h2>Let's connect:</h2>
      <SocialMedia />
    </div>
    <div
      class="bg-neutral-600 mx-auto w-1/2 lg:w-1/3 rounded-lg flex flex-col items-center absolute top-60 sm:top-80 md:top-96 lg:top-[450px] mt-56"
    >
      <h2 class="pt-3 text-neutral-200">About me:</h2>
      <p class="p-3 text-neutral-300">
        I am a software developer, specializing in the web development arena.I
        mostly enjoy working on converting Figma files to fully responsive,
        mobile-first website layouts.
      </p>
    </div>
  </section>
</template>

<script lang="ts">
import SocialMedia from "./SocialMedia.vue";
import { defineComponent } from "vue";
export default defineComponent({
  name: "HeadlineComponent",

  components: { SocialMedia },
});
</script>

<style scoped>
h2 {
  @apply text-lg md:text-xl lg:text-2xl font-light;
}
</style>
