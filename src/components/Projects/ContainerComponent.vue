<template>
  <section>
    <div
      class="mx-auto max-w-sm bg-white border border-neutral-200 rounded-lg shadow-md dark:bg-neutral-800 dark:border-neutral-700 flex flex-col mt-16"
    >
      <a :href="live" target="_blank">
        <img class="rounded-t-lg" :src="image" alt="image" />
      </a>
      <div class="p-5">
        <a :href="live" target="_blank">
          <h5
            class="mb-2 text-2xl font-bold tracking-tight text-neutral-900 dark:text-neutral-300"
          >
            {{ heading }}
          </h5>
        </a>
        <p class="text-neutral-600 opacity-80 dark:text-neutral-300">
          {{ technologies }}
        </p>
        <p class="mb-5 mt-5 font-normal text-neutral-700 dark:text-neutral-300">
          {{ paragraph }}
        </p>
        <div class="flex flex-row justify-around items-center">
          <a
            :href="github"
            target="_blank"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-neutral-900 rounded-lg hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800"
          >
            GitHub
            <img
              src="@/assets/Images/github.png"
              alt="github logo"
              class="w-6 ml-3"
            /> </a
          ><a
            :href="live"
            target="_blank"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-emerald-700 rounded-lg hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
          >
            Live Site
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
    </div>
  </section>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "ContainerComponent",
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
    github: {
      type: String,
      required: true,
    },
    live: {
      type: String,
      required: true,
    },
  },
});
</script>

<style></style>
