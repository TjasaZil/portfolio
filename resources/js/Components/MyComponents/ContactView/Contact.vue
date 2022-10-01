<template>
  <section>
    <div
      class="w-10/12 bg-neutral-700 text-neutral-200 flex flex-col justify-center mx-auto h-auto p-10 max-w-3xl rounded-lg"
    >
      <div class="flex flex-col">
        <h2>Let's make magic happen!</h2>
        <p>Contact me!</p>
        <ul>
          <li>Location: Slovenia</li>
          <li class="text-emerald-200">Available to work</li>
          <li>Email: tjasa.zilavec@gmail.com</li>
        </ul>
      </div>
      <form
        class="flex flex-col space-y-6 mt-8"
        method="POST"
        @submit.prevent="submit"
        v-if="!this.success"
      >
        <p
          v-if="this.error"
          class="text-center w-full border border-solid py-4 border-red-700 bg-red-300 text-red-700 mx-auto rounded-lg"
        >
          You failed to send a message.
        </p>

        <input
          placeholder="Your name"
          class="input"
          name="name"
          v-model="form.name"
        />
        <input
          placeholder="Your email"
          class="input"
          name="email"
          v-model="form.email"
        />
        <input
          placeholder="Subject"
          class="input"
          name="subject"
          v-model="form.subject"
        />
        <textarea
          placeholder="Your Message"
          rows="6"
          class="focus:outline-none bg-neutral-600 text-neutral-200 placeholder:text-neutral-400 border-neutral-700 border-2 rounded-lg"
          name="message"
          v-model="form.message"
        />
        <input type="submit" value="Submit" />
      </form>
      <p
        v-else
        class="text-center w-full border border-solid py-14 border-lime-900 bg-emerald-300 text-lime-900 mx-auto mt-8 rounded-lg"
      >
        Success!
      </p>
    </div>
  </section>
</template>

<script>
export default {
  name: "Contact",
  data() {
    return {
      error: false,
      success: false,
      form: this.$inertia.form({
        name: "",
        email: "",
        subject: "",
        message: "",
      }),
    };
  },

  methods: {
    submit() {
      this.form.post(route("contact"));
    },
  },
};
</script>
