<template>
  <section class="bg-neutral-800 h-full">
    <NavBar />
    <BgImage />
  </section>
</template>

<script>
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import BgImage from "../Components/MyComponents/SharedComponents/BgImage.vue";
export default {
  name: "Skills",
  components: { NavBar, BgImage },
};
</script>

<style></style>
