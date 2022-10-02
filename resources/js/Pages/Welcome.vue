<template>
  <Head title="Welcome" />
  <section class="bg-neutral-800 text-neutral-200">
    <NavBar />
    <Link href="/contact"> contact</Link>
    <Hero />
    <Contact />
  </section>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Contact from "./Contact.vue";
import Hero from "../Components/MyComponents/Hero/Hero.vue";
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";

export default {
  name: "Welcome",
  components: { Head, Contact, Hero, Link, NavBar },
};
</script>
