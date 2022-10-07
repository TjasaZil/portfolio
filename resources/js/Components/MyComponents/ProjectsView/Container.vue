<template>
  <section>
    <div class="border border-solid rounded-lg border-neutral-300">
      <hr
        class="w-10/12 mx-auto bg-neutral-900 border-2 border-solid border-neutral-900 my-4"
      />
      <div class="flex justify-evenly mx-auto mb-4">
        <Button text="About" /><Button text="Live Site" type="secondary" />
      </div>
    </div>
  </section>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Button from "../SharedComponents/Button.vue";
export default {
  name: "Container",
  components: { Link, Button },
};
</script>

<style></style>
