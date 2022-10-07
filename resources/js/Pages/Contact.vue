<template>
  <section class="bg-neutral-800 h-full">
    <NavBar />
    <BgImage />
    <ContactForm class="pt-28" />
    <Footer />
  </section>
</template>

<script>
import ContactForm from "../Components/MyComponents/ContactView/ContactForm.vue";
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import BgImage from "../Components/MyComponents/SharedComponents/BgImage.vue";
import Footer from "../Components/MyComponents/SharedComponents/Footer.vue";

export default {
  name: "Contact",

  components: { ContactForm, NavBar, BgImage, Footer },
};
</script>
<style scoped></style>
