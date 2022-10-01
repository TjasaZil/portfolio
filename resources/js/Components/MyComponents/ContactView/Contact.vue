<template>
  <section>
    <div
      class="w-10/12 bg-neutral-700 text-neutral-200 flex flex-col justify-center mx-auto h-auto p-10 max-w-5xl rounded-lg lg:flex-row lg:space-x-11"
    >
      <div class="flex flex-col lg:justify-top lg:j-center">
        <h2 class="font-bold text-xl md:text-3xl xl:text-5xl">
          Let's make
          <span class="text-pink-500 uppercase">magic</span> happen!
        </h2>
        <p class="font-light text-lg sm:text-xl md:text-2xl mt-3">
          Contact me!
        </p>
        <ul class="mt-8 md:text-xl">
          <li>Location: Slovenia</li>
          <li class="text-emerald-200">Available to work</li>
          <li>Email: tjasa.zilavec@gmail.com</li>
        </ul>
      </div>
      <div
        v-if="$page.props.flash.contacted"
        class="text-center w-full border border-solid py-14 border-lime-900 bg-emerald-300 text-lime-900 mx-auto mt-8 rounded-lg"
      >
        <p>Thank you for your message!</p>
        <p>I will get back to you soon.</p>
      </div>

      <div v-else>
        <form
          class="flex flex-col space-y-6 mt-8 lg:mt-0 lg:w-[500px]"
          method="POST"
          @submit.prevent="submit"
        >
          <input
            placeholder="Your name"
            class="input"
            name="name"
            v-model="form.name"
          />
          <InputError :message="form.errors.name" />
          <input
            placeholder="Your email"
            class="input"
            name="email"
            v-model="form.email"
          />
          <InputError :message="form.errors.email" />
          <input
            placeholder="Subject"
            class="input"
            name="subject"
            v-model="form.subject"
          />
          <InputError :message="form.errors.subject" />
          <textarea
            placeholder="Your Message"
            rows="6"
            class="focus:outline-none bg-neutral-600 text-neutral-200 placeholder:text-neutral-400 border-neutral-700 border-2 rounded-lg"
            name="message"
            v-model="form.message"
          />
          <InputError :message="form.errors.message" />
          <button
            :disabled="form.processing"
            class="bg-neutral-800 text-neutral-300 rounded-lg py-2 lg:py-3 lg:text-lg button-hover opacity-80 hover:opacity-100"
          >
            <span class="animate-spin mr-1" v-show="form.processing"
              >&#9696; Processing...</span
            >
            <span v-show="!form.processing">Send</span>
          </button>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
import InputError from "../../GeneratedComponents/InputError.vue";

export default {
  name: "Contact",
  components: { InputError },
  data() {
    return {
      form: this.$inertia.form({
        name: "",
        email: "",
        subject: "",
        message: "",
        color: "text-black",
        interval: null,
      }),
    };
  },
  methods: {
    submit() {
      this.form.post(route("contact"));
    },
  },
  components: { InputError },
};
</script>
<style scoped></style>
