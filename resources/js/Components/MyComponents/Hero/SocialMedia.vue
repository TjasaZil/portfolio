<template>
  <section>
    <div class="flex">
      <a href="https://github.com/zuzexx" target="_blank"
        ><img
          src="../../../../Images/github.png"
          alt="github logo"
          class="socials"
      /></a>
      <a href="https://www.linkedin.com/in/tjasa-zilavec/" target="_blank"
        ><img
          src="../../../../Images/linknedin.png"
          alt="linkedin logo"
          class="socials"
      /></a>
    </div>
  </section>
</template>

<script>
export default {
  name: "SocialMedia",
};
</script>

<style scope>
.socials {
  @apply ml-2 w-6 md:w-8 lg:w-9 xl:w-10;
}
</style>
