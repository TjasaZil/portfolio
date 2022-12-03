<template>
  <section class="mt-28">
    <img
      src="@/assets/Images/profile.jpg"
      alt="a profile image of me with glasses and brown wavy hair"
      class="rounded-xl w-1/2 xl:w-96 shadow-lg origin-top-left rotate-12 grayscale hover:rotate-0 transition-all ease-linear duration-300 hover:grayscale-0 mx-auto"
    />
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
  name: "ImageComponent",
});
</script>
