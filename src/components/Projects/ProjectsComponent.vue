<template>
  <section class="w-full mx-auto flex flex-col mt-32 p-12">
    <section class="w-full mx-auto max-w-7xl">
      <div
        class="flex flex-row justify-between items-center mx-auto text-center lg:text-left"
      >
        <h2 class="text-xl lg:text-3xl font-bold text-center mx-auto">
          Projects
        </h2>
      </div>
      <div
        class="flex flex-col xl:flex-row xl::flex-wrap w-full justify-center xl:justify-between mx-auto xl:space-x-3 mt-16"
      >
        <ContainerComponent
          heading="Pomoč Pointerjem Website"
          technologies="Vue.js, JS, Firebase, Tailwindcss"
          paragraph="text"
          :image="Pointerji"
        />
        <ContainerComponent
          heading="The Pasta Pot"
          technologies="Vue.js, JS, Jest, Tailwindcss"
          paragraph="text"
          :image="Pasta"
        />
        <ContainerComponent
          heading="Frontend Mentor Challenges"
          technologies="Vue.js, JS, Jest, Tailwindcss"
          paragraph="text"
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
