<template>
  <section
    class="flex flex-col mt-16 rounded-lg bg-neutral-900 w-11/12 mx-auto h-auto p-6 max-w-7xl"
  >
    <div
      class="flex flex-col mx-auto text-center sm:mx-0 sm:flex-row space-x-10 sm:justify-between sm:items-center"
    >
      <h2 class="text-xl lg:text-3xl font-bold">Skills</h2>
    </div>
    <div class="flex flex-col space-y-16 mx-auto">
      <div class="flex flex-col mt-16">
        <div
          class="flex flex-row flex-wrap space-x-3 lg:space-x-8 xl:space-x-10"
        >
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jest/jest-plain.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
  name: "SkillsComponent",
});
</script>

<style scoped>
img {
  @apply w-16 mt-4 ml-3 hover:cursor-pointer;
}
h3 {
  @apply xl:text-xl italic;
}
</style>
