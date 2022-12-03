<template>
  <section class="mt-32">
    <h1
      class="font-bold tracking-tighter text-xl sm:text-3xl md:text-4xl lg:text-5xl 3xl:text-6xl 4xl:text-7xl"
    >
      Hello, I am
      <span :class="[colorClasses]">{{ action }}</span>
    </h1>
    <h2>Welcome to my page.</h2>
    <div
      class="flex items-center absolute top-52 sm:top-72 md:top-80 lg:top-96 mt-16"
    >
      <h2>Let's connect:</h2>
      <SocialMedia />
    </div>
    <div
      class="bg-neutral-600 mx-auto w-1/2 lg:w-1/3 rounded-lg flex flex-col items-center absolute top-60 sm:top-80 md:top-96 lg:top-[450px] mt-16"
    >
      <h2 class="pt-3">About me:</h2>
      <p class="p-3">
        I am a software developer, specializing in the web development arena. I
        have been developing websites using Vue.js, TailwindCss, and Jest for
        the last year.
      </p>
      <p class="p-3">
        I'm currently working on getting my skill to a higher level, by offering
        my services to people and non-profit organizations that need a website.
        All my projects are made using the TDD workflow to ensure a seamless
        user experience. I mostly enjoy working on converting Figma files to
        fully responsive website layouts.
      </p>
      <p class="p-3">
        Drop me a line if you want to talk about web development, coding, or
        anything else. I am currently available for employment and eager to hear
        from GitHub users.
      </p>
    </div>
  </section>
</template>

<script>
import SocialMedia from "./SocialMedia.vue";

export default {
  name: "HeadlineComponent",

  components: { SocialMedia },
  data() {
    return {
      action: "Tjaša",
      interval: null,
    };
  },
  computed: {
    colorClasses() {
      return {
        tjaša: this.action === "Tjaša",
        frontendenthusiast: this.action === "a Frontend Enthusiast",
        vuedeveloper: this.action === "a Vue Developer",
      };
    },
  },
  created() {
    this.changeTitle();
  },
  beforeUnmount() {
    clearInterval(this.interval);
  },
  methods: {
    changeTitle() {
      this.interval = setInterval(() => {
        const actions = ["Tjaša", "a Frontend Enthusiast", "a Vue Developer"];
        const currentActionIndex = actions.indexOf(this.action);
        const nextActionIndex = (currentActionIndex + 1) % 3;
        const nextAction = actions[nextActionIndex];
        this.action = nextAction;
      }, 4000);
    },
  },
};
</script>

<style scoped>
.tjaša {
  color: #ec4899;
}
.frontendenthusiast {
  color: #f59e0b;
}
.vuedeveloper {
  color: #10b981;
}
h2 {
  @apply text-lg md:text-xl lg:text-2xl font-light;
}
</style>
