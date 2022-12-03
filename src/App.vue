<template>
  <section class="bg-neutral-800 overflow-x-hidden">
    <NavbarComponent />
    <HeroComponent />
    <ProjectsComponent />
    <FooterComponent />
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import HeroComponent from "@/components/Hero/HeroComponent.vue";
import FooterComponent from "./components/Shared/FooterComponent.vue";
import NavbarComponent from "./components/Shared/NavbarComponent.vue";
import ProjectsComponent from "./components/Projects/ProjectsComponent.vue";

export default defineComponent({
  name: "App",
  components: {
    HeroComponent,
    FooterComponent,
    NavbarComponent,
    ProjectsComponent,
  },
});
</script>

<style></style>
