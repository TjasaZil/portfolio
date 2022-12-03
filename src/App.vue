<template>
  <section class="bg-neutral-800">
    <NavbarComponent />
    <HeroComponent />
    <FooterComponent />
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import HeroComponent from "@/components/Hero/HeroComponent.vue";
import FooterComponent from "./components/Shared/FooterComponent.vue";
import NavbarComponent from "./components/Shared/NavbarComponent.vue";

export default defineComponent({
  name: "App",
  components: { HeroComponent, FooterComponent, NavbarComponent },
});
</script>

<style></style>
