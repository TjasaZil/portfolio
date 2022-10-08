<template>
  <section>
    <div class="border border-solid rounded-lg border-neutral-300">
      <hr
        class="w-10/12 mx-auto bg-neutral-900 border-2 border-solid border-neutral-900 mt-4"
      />
      <div class="flex flex-col">
        <h3 class="text-center p-4">{{ heading }}</h3>
        <div class="flex justify-between w-10/12 mx-auto mb-4">
          <Button text="About" /><Button text="Live Site" type="secondary" />
        </div>
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
  props: {
    heading: {
      type: String,
      required: true,
    },
  },
};
</script>

<style></style>
