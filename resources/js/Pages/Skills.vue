<template>
  <section class="bg-neutral-800 h-full">
    <NavBar />
    <BgImage />
    <Footer />
  </section>
</template>

<script>
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import BgImage from "../Components/MyComponents/SharedComponents/BgImage.vue";
import Footer from "../Components/MyComponents/SharedComponents/Footer.vue";
export default {
  name: "Skills",
  components: { NavBar, BgImage, Footer },
};
</script>

<style></style>
