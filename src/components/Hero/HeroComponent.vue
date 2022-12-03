<template>
  <section class="w-full h-screen bg-natural-800 mx-auto">
    <div
      class="w-11/12 lg:w-4/6 max-w-7xl flex flex-row lg:justify-between items-center mx-auto"
    >
      <Headline /><Image />
    </div>
    <!-- <div class="grid grid-cols-12">
      <div class="col-start-1 col-span-1"></div>
      <div class="col-start-2 col-span-5 flex flex-row justify-between">
        <Headline />
      </div>
      <div class="col-start-7 col-span-5"><Image /></div>

      <div class="col-start-12 col-span-1"></div>
    </div>-->
  </section>
</template>

<script lang="ts">
import Headline from "./HeadlineComponent.vue";
import Image from "./ImageComponent.vue";

export default {
  name: "Hero",
  components: { Headline, Image },
};
</script>

<style></style>
