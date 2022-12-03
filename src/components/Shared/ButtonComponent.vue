<template>
  <button :class="buttonClass">{{ text }}</button>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
  name: "Button",
  props: {
    text: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      required: false,
      default: "primary",
    },
  },
  computed: {
    buttonClass() {
      return {
        [this.type]: true,
      };
    },
  },
});
</script>

<style scoped>
button {
  @apply border-solid border-2 px-2 py-1 xl:px-3 xl:py-2   rounded-full hover:cursor-pointer;
}
.primary {
  @apply bg-neutral-900 hover:bg-transparent  border-neutral-900 hover:border-neutral-200;
}
.secondary {
  @apply hover:bg-neutral-900 border-neutral-200 hover:border-neutral-900;
}
</style>
