<template>
  <section class="bg-neutral-800 overflow-x-hidden">
    <NavbarComponent />
    <HeroComponent />
    <SkillsComponent id="skills" />
    <ProjectsComponent id="projects" />
    <FooterComponent />
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import HeroComponent from "@/components/Hero/HeroComponent.vue";
import FooterComponent from "./components/Shared/FooterComponent.vue";
import NavbarComponent from "./components/Shared/NavbarComponent.vue";
import ProjectsComponent from "./components/Projects/ProjectsComponent.vue";
import SkillsComponent from "./components/Skills/SkillsComponent.vue";

export default defineComponent({
  name: "App",
  components: {
    HeroComponent,
    FooterComponent,
    NavbarComponent,
    ProjectsComponent,
    SkillsComponent,
  },
});
</script>

<style></style>
