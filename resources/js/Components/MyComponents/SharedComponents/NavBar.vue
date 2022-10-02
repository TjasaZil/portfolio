<template>
  <section
    class="bg-neutral-900 h-16 lg:h-20 w-full fixed top-0 left-0 z-50 text-neutral-200"
  >
    <ul class="flex justify-end items-center my-auto w-full h-full">
      <Link href="/"
        ><li>
          <img
            src="../../../../Images/home.png"
            alt="a pink icon of a house"
            class="h-5 w-5 xl:w-7 xl:h-7"
          /></li
      ></Link>
      <Link href="/skills"><li>Skills</li></Link>
      <Link href="/projects"><li>Projects</li></Link>
      <Link href="/contact"><li>Contact</li></Link>
    </ul>
  </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  name: "NavBar",
  components: { Link },
};
</script>

<style scoped>
li {
  @apply pr-3 lg:pr-5 lg:text-lg xl:text-xl xl:pr-10;
}
</style>
