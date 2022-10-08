<template>
  <section class="w-11/12 h-screen bg-natural-800 mx-auto">
    <div class="grid grid-cols-12">
      <div class="col-start-1 col-span-1"></div>
      <div class="col-start-2 col-span-6">
        <Headline />
        <BgImage />
      </div>
      <div class="col-start-8 col-span-4"><Image /></div>

      <div class="col-start-12 col-span-1"></div>
    </div>
  </section>
</template>

<script>
import Headline from "./Headline.vue";
import Image from "./Image.vue";
import BgImage from "../SharedComponents/BgImage.vue";

export default {
  name: "Hero",
  components: { Headline, Image, BgImage },
};
</script>

<style></style>
