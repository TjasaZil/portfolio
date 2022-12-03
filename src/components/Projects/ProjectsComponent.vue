<template>
  <section class="w-full mx-auto flex flex-col mt-16 p-12">
    <section class="w-full mx-auto max-w-7xl">
      <div
        class="flex flex-row justify-between items-center mx-auto text-center lg:text-left"
      >
        <h2
          class="text-xl lg:text-3xl font-bold text-center mx-auto text-neutral-200"
        >
          Projects
        </h2>
      </div>
      <div
        class="flex flex-col xl:flex-row xl::flex-wrap w-full justify-center xl:justify-between mx-auto xl:space-x-3 mt-8"
      >
        <ContainerComponent
          heading="Pomoč Pointerjem Website"
          technologies="Vue.js, JS, Firebase, Tailwindcss"
          paragraph="This website was made for a nonprofit organization that helps with the adoption of hunting dogs from Spain. I used Sendgrid and Firebase to send contact messages from the site. "
          :github="'https://github.com/zuzexx/PomocPointerjemWebsite'"
          :live="'https://pomoc-pointerjem.si/'"
          :image="Pointerji"
        />
        <ContainerComponent
          heading="The Pasta Pot"
          technologies="Vue.js, JS, Jest, Tailwindcss"
          paragraph="This project was made in order for me to practice TDD. I used Jest to unit test the project and later used Cypress to write component tests. The site is made with the Vue3 framework and styled with Tailwindcss."
          :github="'https://github.com/zuzexx/ThePastaPot'"
          :live="'https://pastapot.vercel.app/'"
          :image="Pasta"
        />
        <ContainerComponent
          heading="Frontend Mentor Challenges"
          technologies="Vue.js, JS, Jest, Tailwindcss"
          paragraph="This is a website that holds all of my Frontend Mentor Challenges. While solving the challenges I followed the TDD approach. Challenges are tested with Jest/Vue testing library and solved using the Vue framework."
          :github="'https://github.com/zuzexx/FrontendMentor'"
          :live="'https://frontendmentor-steel.vercel.app/'"
          :image="Mentor"
        />
      </div>
    </section>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import ContainerComponent from "./ContainerComponent.vue";
import Pointerji from "@/assets/Images/pointerji.png";
import Pasta from "@/assets/Images/pasta.png";
import Mentor from "@/assets/Images/mentor.png";
export default defineComponent({
  name: "ProjectsComponent",
  components: { ContainerComponent },
  data() {
    return {
      Pointerji,
      Pasta,
      Mentor,
    };
  },
});
</script>

<style scoped>
.container {
  @apply mt-8 w-full sm:w-1/4;
}
</style>
