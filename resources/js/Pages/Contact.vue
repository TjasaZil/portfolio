<template>
  <section class="bg-neutral-800 h-full">
    <NavBar />
    <BgImage />
    <ContactForm />
  </section>
</template>

<script>
import ContactForm from "../Components/MyComponents/ContactView/ContactForm.vue";
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import BgImage from "../Components/MyComponents/SharedComponents/BgImage.vue";

export default {
  name: "Contact",

  components: { ContactForm, NavBar, BgImage },
};
</script>
<style scoped></style>
