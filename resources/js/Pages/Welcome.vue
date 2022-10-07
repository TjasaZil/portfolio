<template>
  <Head title="Welcome" />
  <section class="bg-neutral-800 text-neutral-200 overflow-x-hidden">
    <NavBar />
    <Hero />
    <Pacman />
    <SkillsWelcome />
    <Pacman />
    <ProjectsWelcome />
    <Pacman />
    <ContactForm />
    <Footer />
  </section>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

import Hero from "../Components/MyComponents/Hero/Hero.vue";
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import Pacman from "../Components/MyComponents/SharedComponents/Pacman.vue";
import SkillsWelcome from "../Components/MyComponents/SkillsView/SkillsWelcome.vue";
import ContactForm from "../Components/MyComponents/ContactView/ContactForm.vue";
import Footer from "../Components/MyComponents/SharedComponents/Footer.vue";
import ProjectsWelcome from "../Components/MyComponents/ProjectsView/ProjectsWelcome.vue";

export default {
  name: "Welcome",
  components: {
    Head,
    Hero,
    Link,
    NavBar,
    Pacman,
    SkillsWelcome,
    ContactForm,
    Footer,
    ProjectsWelcome,
  },
};
</script>
