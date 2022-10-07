<template>
  <section class="w-full mx-auto flex flex-col mt-32 bg-neutral-600 p-6">
    <section class="w-full xl:w-5/6 mx-auto">
      <div class="flex flex-row space-x-10 justify-evenly items-center">
        <h2 class="text-xl lg:text-3xl font-bold">Projects</h2>
        <NextButton href="/projects" />
      </div>
      <div class="flex flex-wrap w-10/12 2xl:w-4/6 justify-between mx-auto">
        <Container class="mt-8 w-full lg:w-1/4" />
        <Container class="mt-8 w-full lg:w-1/4" />
        <Container class="mt-8 w-full lg:w-1/4" />
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

<style></style>
