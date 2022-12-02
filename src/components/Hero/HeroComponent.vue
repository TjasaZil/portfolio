<template>
  <section class="w-11/12 h-screen bg-natural-800 mx-auto">
    <div class="grid grid-cols-12">
      <div class="col-start-1 col-span-1"></div>
      <div class="col-start-2 col-span-5 flex flex-row justify-between">
        <Headline />
        <BgImage />
      </div>
      <div class="col-start-7 col-span-5"><Image /></div>

      <div class="col-start-12 col-span-1"></div>
    </div>
  </section>
</template>

<script lang="ts">
import BgImage from "../Shared/BgImage.vue";
import Headline from "./HeadlineComponent.vue";
import Image from "./ImageComponent.vue";

export default {
  name: "Hero",
  components: { Headline, Image, BgImage },
};
</script>

<style></style>
