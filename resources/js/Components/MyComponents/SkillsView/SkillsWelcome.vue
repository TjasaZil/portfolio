<template>
  <section
    class="flex flex-col mt-32 rounded-lg bg-neutral-900 w-1/2 mx-auto h-auto p-6"
  >
    <div class="flex flex-row space-x-10 justify-between items-center">
      <h2 class="text-xl lg:text-3xl font-bold">Skills</h2>
      <NextButton />
    </div>
    <div class="flex flex-col space-y-16 mx-auto">
      <div class="flex flex-col mt-16">
        <h3>I Work most with:</h3>
        <SpeechBubble />
        <Percentage />
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
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jest/jest-plain.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg"
          />
        </div>
      </div>
      <div class="flex flex-col">
        <h3>Familiar with:</h3>
        <div
          class="flex flex-row flex-wrap space-x-3 lg:space-x-8 xl:space-x-10"
        >
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg"
          />
          <img
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/svelte/svelte-original.svg"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import NextButton from "../SharedComponents/NextButton.vue";
import Percentage from "../SharedComponents/Percentage.vue";
import SpeechBubble from "../SharedComponents/SpeechBubble.vue";

export default {
  name: "SkillsWelcome",
  components: { NextButton, SpeechBubble, Percentage },
};
</script>

<style scoped>
img {
  @apply w-8 lg:w-10 xl:w-16 mt-4 hover:cursor-pointer;
}
h3 {
  @apply xl:text-xl italic;
}
</style>
