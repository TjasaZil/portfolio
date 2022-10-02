<template>
  <section class="bg-neutral-800 h-screen">
    <NavBar />
    <ContactForm />
  </section>
</template>

<script>
import ContactForm from "../Components/MyComponents/ContactView/ContactForm.vue";
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";

export default {
  name: "Contact",

  components: { ContactForm, NavBar },
};
</script>
<style scoped></style>
