<template>
  <Head title="Welcome" />
  <section>
    <Contact />
  </section>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Contact from "../Components/MyComponents/ContactView/Contact.vue";

export default {
  name: "Welcome",
  components: { Head, Contact },
};
</script>
