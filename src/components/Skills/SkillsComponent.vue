<template>
  <section
    class="flex flex-col mt-16 rounded-lg w-11/12 mx-auto h-auto p-6 max-w-7xl"
  >
    <hr
      class="w-full max-w-7xl border border-solid border-neutral-300 mx-auto rounded-lg"
    />
    <div
      class="flex flex-col mx-auto text-center sm:mx-0 sm:flex-row space-x-10 sm:justify-between sm:items-center mt-16"
    >
      <h2 class="text-xl lg:text-3xl text-center mx-auto font-bold">Skills</h2>
    </div>
    <div class="flex flex-col space-y-16 mx-auto">
      <div class="flex flex-col mt-16">
        <div class="flex flex-row flex-wrap">
          <div
            v-for="skill in skills"
            :key="skill"
            class="flex flex-col justify-center items-center space-y-4 ml-5"
          >
            <img :src="skill.img" :alt="skill.alt" />
            <p>{{ skill.text }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
  name: "SkillsComponent",
  data() {
    return {
      skills: [
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg",
          alt: "HTML logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg",
          alt: "CSS logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg",
          alt: "Tailwindcss logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg",
          alt: "Sass logo",
          text: "1 year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg",
          alt: "JS logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jest/jest-plain.svg",
          alt: "jest logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg",
          alt: "Vue logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain.svg",
          alt: "firebase logo",
          text: "1 year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg",
          alt: "git logo",
          text: "1+ year experience",
        },
        {
          img: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg",
          alt: "vscode logo",
          text: "1+ year experience",
        },
      ],
    };
  },
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
