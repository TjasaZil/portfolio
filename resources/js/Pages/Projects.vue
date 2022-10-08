<template>
  <section class="bg-neutral-800 h-full text-neutral-200">
    <NavBar />

    <AboutProjects />
    <div class="flex flex-wrap w-full justify-evenly mx-auto lg:space-x-3">
      <Container class="container" />
      <Container class="container bg-neutral-800" />
      <Container class="container bg-neutral-800" />
    </div>
    <BgImage />
    <Footer />
  </section>
</template>

<script>
import NavBar from "../Components/MyComponents/SharedComponents/NavBar.vue";
import BgImage from "../Components/MyComponents/SharedComponents/BgImage.vue";
import Footer from "../Components/MyComponents/SharedComponents/Footer.vue";
import Container from "../Components/MyComponents/ProjectsView/Container.vue";
import AboutProjects from "../Components/MyComponents/ProjectsView/AboutProjects.vue";
export default {
  name: "Projects",
  components: { NavBar, BgImage, Footer, Container, AboutProjects },
};
</script>

<style scoped>
.container {
  @apply w-full sm:w-1/4 z-40 p-6 sm:p-0 sm:mt-8;
}
</style>
