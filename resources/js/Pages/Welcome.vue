<template>
  <Head title="Welcome" />
  <section class="bg-neutral-800 text-neutral-200">
    <NavBar />
    <Hero />
    <Pacman />
    <SkillsWelcome />
  </section>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";

import Hero from "../Components/MyComponents/Hero/Hero.vue";
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import Pacman from "../Components/MyComponents/SharedComponents/Pacman.vue";
import SkillsWelcome from "../Components/MyComponents/SkillsView/SkillsWelcome.vue";

export default {
  name: "Welcome",
  components: { Head, Hero, Link, NavBar, Pacman, SkillsWelcome },
};
</script>
