<template>
  <section>
    <!--<a
      href="#"
      class="flex w-10/12 flex-row items-center bg-white border rounded-lg shadow-md md:flex-row max-w-xl hover:bg-neutral-100 dark:border-neutral-700 dark:bg-neutral-800 dark:hover:bg-neutral-700 lg:hidden mt-5"
    >
      <img
        class="object-cover w-1/4 rounded-t-lg h-1/3 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
        :src="image"
        alt="image"
      />
      <div class="flex flex-col justify-between p-4 leading-normal">
        <h5
          class="mb-2 text-2xl font-bold tracking-tight text-neutral-900 dark:text-neutral-300"
        >
          {{ heading }}
        </h5>
        <p>{{ technologies }}</p>
        <p class="mb-3 font-normal text-neutral-700 dark:text-neutral-400">
          {{ paragraph }}
        </p>
      </div>
    </a>-->

    <div
      class="max-w-sm bg-white border border-neutral-200 rounded-lg shadow-md dark:bg-neutral-800 dark:border-neutral-700 flex flex-col mt-16"
    >
      <a href="#">
        <img class="rounded-t-lg" :src="image" alt="image" />
      </a>
      <div class="p-5">
        <a href="#">
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-neutral-900 dark:text-neutral-300"
          >
            {{ heading }}
          </h5>
        </a>
        <p>{{ technologies }}</p>
        <p class="mb-3 font-normal text-neutral-700 dark:text-neutral-400">
          {{ paragraph }}
        </p>
        <a
          href="#"
          class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-emerald-700 rounded-lg hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
        >
          Read more
          <svg
            aria-hidden="true"
            class="w-4 h-4 ml-2 -mr-1"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";

//import ButtonComponent from "../Shared/ButtonComponent.vue";
export default defineComponent({
  name: "ContainerComponent",
  //components: { ButtonComponent },
  props: {
    heading: {
      type: String,
      required: true,
    },
    technologies: {
      type: String,
      required: true,
    },
    paragraph: {
      type: String,
      required: true,
    },
    image: {
      type: String,
      required: true,
    },
  },
});
</script>

<style></style>
