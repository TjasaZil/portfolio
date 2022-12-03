<template>
  <section
    class="bg-neutral-900 h-16 lg:h-20 w-full fixed top-0 left-0 z-50 text-neutral-200"
  >
    <div class="flex h-full justify-between w-11/12 m-auto max-w-7xl">
      <ul class="flex justify-end items-center my-auto w-full h-full">
        <a href="#"
          ><li>
            <img
              src="@/assets/Images/home.png"
              alt="a pink icon of a house"
              class="h-5 w-5 xl:w-7 xl:h-7"
            /></li
        ></a>
        <a href="#skills"><li>Skills</li></a>
        <a href="#projects"><li>Projects</li></a>
        <a href="#contact"><li>Contact</li></a>
        <a href="#contact"><li></li></a>
        <a href="#contact"><li></li></a>
      </ul>
      <ThemeToggle />
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import ThemeToggle from "./ThemeToggle.vue";

export default defineComponent({
  name: "NavbarComponent",
  components: { ThemeToggle },
});
if (
  localStorage.getItem("color-theme") === "dark" ||
  (!("color-theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  document.documentElement.classList.add("dark");
} else {
  document.documentElement.classList.remove("dark");
}
</script>

<style scoped>
li {
  @apply pr-3 lg:pr-5 lg:text-lg xl:text-xl xl:pr-10;
}
</style>
