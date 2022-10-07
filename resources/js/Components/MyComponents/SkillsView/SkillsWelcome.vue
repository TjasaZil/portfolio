<template>
  <section
    class="flex flex-col mt-32 rounded-lg bg-neutral-900 w-10/12 mx-auto h-auto p-6"
  >
    <div class="flex flex-row space-x-10">
      <h2>Skills</h2>
      <NextButton />
    </div>
    <div class="flex flex-wrap space-x-10">
      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jest/jest-plain.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/svelte/svelte-original.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
      />

      <img
        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg"
      />
    </div>
  </section>
</template>

<script>
import NextButton from "../SharedComponents/NextButton.vue";
export default {
  name: "SkillsWelcome",
  components: { NextButton },
};
</script>

<style scoped>
img {
  @apply w-16 hover:w-32;
}
</style>
