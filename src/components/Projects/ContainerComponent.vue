<template>
  <section>
    <div
      class="mx-auto max-w-sm border rounded-lg shadow-md bg-neutral-800 border-neutral-700 flex flex-col mt-16"
    >
      <a :href="live" target="_blank" class="img-container">
        <img class="rounded-t-lg img" :src="image" alt="image" />
      </a>
      <div class="p-5">
        <a :href="live" target="_blank">
          <h5
            class="mb-2 text-2xl xl:text-3xl font-bold tracking-tight text-neutral-300"
          >
            {{ heading }}
          </h5>
        </a>
        <p class="opacity-80 text-neutral-400 text-sm xl:text-md">
          {{ technologies }}
        </p>
        <p
          class="mb-5 mt-5 font-normal text-neutral-300 text-sm lg:text-md xl:text-lg"
        >
          {{ paragraph }}
        </p>
        <div
          class="flex flex-col justify-center mobilem:flex-row mobilem:justify-around items-center w-full space-y-4 mobilem:space-y-0"
        >
          <a
            :href="github"
            target="_blank"
            class="inline-flex items-center px-3 py-2 text-sm lg:text-md xl:text-xl font-medium text-center text-white bg-neutral-900 rounded-lg hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800"
          >
            GitHub
            <img
              src="@/assets/Images/github.png"
              alt="github logo"
              class="w-5 ml-3"
            /> </a
          ><a
            :href="live"
            target="_blank"
            class="inline-flex items-center px-3 py-2 text-sm lg:text-md xl:text-xl font-medium text-center text-white bg-emerald-700 rounded-lg hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
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

<style scoped>
.img {
  @apply w-full scale-100 hover:scale-105 transition-all;
}
.img-container {
  @apply hover:scale-100 w-full p-0 m-0 overflow-hidden;
}
.img-container .img {
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.7s ease-in-out;
  transition: 0.7s ease-in-out;
}
.img-container:hover .img {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
</style>
