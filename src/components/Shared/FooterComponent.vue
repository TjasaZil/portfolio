<template>
  <section class="w-full mt-16 bg-neutral-900 h-auto p-16">
    <div class="flex justify-between w-11/12 mx-auto max-w-7xl">
      <p class="text-neutral-200">Copyright 2022</p>
      <SocialMedia />
    </div>
  </section>
</template>

<script lang="ts">
import SocialMedia from "@/components/Hero/SocialMedia.vue";
import { defineComponent } from "vue";
export default defineComponent({
  name: "FooterComponenet",
  components: { SocialMedia },
});
</script>

<style></style>
