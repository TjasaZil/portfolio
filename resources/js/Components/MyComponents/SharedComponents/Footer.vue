<template>
  <section class="w-full mt-16 bg-neutral-900 h-auto p-16">
    <div class="flex justify-between">
      <p>Copyright 2022</p>
      <SocialMedia />
    </div>
  </section>
</template>

<script>
import SocialMedia from "../Hero/SocialMedia.vue";
export default {
  name: "Footer",
  components: { SocialMedia },
};
</script>

<style></style>
