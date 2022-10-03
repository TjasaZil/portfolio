<template>
  <section class="mt-32">
    <h1
      class="font-bold tracking-tighter text-xl sm:text-3xl md:text-4xl lg:text-5xl 3xl:text-6xl 4xl:text-7xl"
    >
      Hello, I am
      <span :class="[colorClasses]">{{ action }}</span>
    </h1>
    <h2 class="text-md sm:text-lg md:text-xl lg:text-2xl font-light">
      Welcome to my page.
    </h2>
    <div
      class="flex items-center absolute top-64 sm:top-72 md:top-80 lg:top-96 mt-16"
    >
      <h2 class="text-md sm:text-lg md:text-xl lg:text-2xl font-light">
        Let's connect:
      </h2>
      <SocialMedia />
    </div>
  </section>
</template>

<script>
import SocialMedia from "./SocialMedia.vue";

export default {
  name: "Headline",
  components: { SocialMedia },
  data() {
    return {
      action: "Tjaša",
      intervaL: null,
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
</style>
