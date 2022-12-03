<template>
  <section
    class="hero-background w-full h-screen bg-natural-900 my-auto lg:pt-24"
  >
    <div
      class="w-11/12 h-full my-auto space-y-9 lg:w-4/6 max-w-7xl flex flex-col lg:flex-row-reverse justify-center lg:justify-between lg:content-center items-center mx-auto"
    >
      <img
        src="@/assets/Images/profile.jpg"
        alt="a profile image of me with glasses and brown wavy hair"
        class="rounded-xl w-1/3 mt-24 lg:-mt-16 max-w-xs shadow-lg origin-top-left rotate-12 grayscale hover:rotate-0 transition-all ease-linear duration-300 hover:grayscale-0 mx-auto"
      />
      <div class="pt-8 flex flex-col justify-center items-center">
        <h1
          class="font-bold tracking-tighter text-xl sm:text-2xl md:text-3xl lg:text-4xl 3xl:text-5xl 4xl:text-6xl text-neutral-200"
        >
          Hello, I am
          <span
            class="text-emerald-700 text-2xl sm:text-3xl md:text-4xl lg:text-5xl 3xl:text-6xl 4xl:text-7xl"
            >Tjaša</span
          >
        </h1>
        <h2 class="text-neutral-200 text-md lg:text-lg xl:text-2xl mt-8">
          Welcome to my page.
        </h2>
        <div class="flex flex-col justify-center items-center mt-8">
          <div
            class="flex items-center text-neutral-200 text-sm lg:text-md xl:text-xl"
          >
            <h2>Let's connect:</h2>
            <SocialMedia />
          </div>
          <div
            class="bg-neutral-600 mx-auto w-1/2 lg:w-full max-w-2xl rounded-lg flex flex-col items-center mt-16"
          >
            <h2 class="pt-3 text-neutral-200 text-lg lg:text-xl xl:text-3xl">
              About me:
            </h2>
            <p class="p-3 text-neutral-300 text-sm lg:text-md xl:text-xl">
              I am a software developer, specializing in the web development
              arena.I mostly enjoy working on converting Figma files to fully
              responsive, mobile-first website layouts.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts">
import SocialMedia from "./SocialMedia.vue";
import { defineComponent } from "vue";

export default defineComponent({
  name: "Hero",

  components: { SocialMedia },
});
</script>
<style scoped>
.hero-background {
  background-image: url("@/assets/Images/bg-1.svg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
