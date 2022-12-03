<template>
  <section>
    <div
      class="border border-solid rounded-lg border-neutral-300 min-w-[250px]"
    >
      <hr
        class="w-10/12 mx-auto bg-neutral-900 border-2 border-solid border-neutral-900 mt-4"
      />
      <div class="flex flex-col">
        <h3 class="text-center p-4">{{ heading }}</h3>
        <div class="flex justify-between w-10/12 mx-auto mb-4">
          <ButtonComponent text="About" /><ButtonComponent
            text="Live Site"
            type="secondary"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import ButtonComponent from "../Shared/ButtonComponent.vue";
export default defineComponent({
  name: "ContainerComponent",
  components: { ButtonComponent },
  props: {
    heading: {
      type: String,
      required: true,
    },
  },
});
</script>

<style></style>
