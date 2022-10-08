<template>
  <section class="w-full mx-auto flex flex-col mt-32 bg-neutral-600 p-6">
    <section class="w-full mx-auto">
      <div class="flex flex-row space-x-10 justify-between items-center">
        <h2 class="text-xl lg:text-3xl font-bold">Projects</h2>
        <NextButton href="/projects" />
      </div>
      <div class="flex flex-wrap w-full justify-evenly mx-auto lg:space-x-3">
        <Container heading="Pomoč Pointerjem Website" class="container" />
        <Container heading="heading" class="container" />
        <Container heading="heading" class="container" />
      </div>
    </section>
  </section>
</template>

<script>
import NextButton from "../SharedComponents/NextButton.vue";
import Container from "./Container.vue";
export default {
  name: "ProjectsWelcome",
  components: { NextButton, Container },
};
</script>

<style scoped>
.container {
  @apply mt-8 w-full sm:w-1/4;
}
</style>
