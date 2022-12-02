<template>
  <section class="bg-neutral-800"><HeroComponent /></section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import HeroComponent from "@/components/Hero/HeroComponent.vue";

export default defineComponent({
  name: "App",
  components: { HeroComponent },
});
</script>

<style></style>
