<template>
  <Head title="Welcome" />
  <section class="bg-neutral-800"><Contact /></section>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Contact from "../Components/MyComponents/ContactView/Contact.vue";

export default {
  name: "Welcome",
  components: { Head, Contact },
};
</script>
