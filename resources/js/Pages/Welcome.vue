<template>
  <Head title="Welcome" />
  <section class="bg-neutral-800 text-neutral-200">
    <Hero />
    <Contact />
  </section>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Contact from "../Components/MyComponents/ContactView/Contact.vue";
import Hero from "../Components/MyComponents/Hero/Hero.vue";

export default {
  name: "Welcome",
  components: { Head, Contact, Hero },
};
</script>
