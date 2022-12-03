<template>
  <section class="w-full mx-auto flex flex-col mt-32 bg-neutral-600 p-12">
    <section class="w-full mx-auto max-w-7xl">
      <div
        class="flex flex-row justify-between items-center mx-auto text-center lg:text-left"
      >
        <h2 class="text-xl lg:text-3xl font-bold">Projects</h2>
      </div>
      <div
        class="flex flex-row flex-wrap w-full justify-between mx-auto lg:space-x-3"
      >
        <ContainerComponent
          heading="Pomoč Pointerjem Website"
          class="container"
        />
        <ContainerComponent heading="heading" class="container" />
        <ContainerComponent heading="heading" class="container" />
      </div>
    </section>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import ContainerComponent from "./ContainerComponent.vue";
export default defineComponent({
  name: "ProjectsComponent",
  components: { ContainerComponent },
});
</script>

<style scoped>
.container {
  @apply mt-8 w-full sm:w-1/4;
}
</style>
