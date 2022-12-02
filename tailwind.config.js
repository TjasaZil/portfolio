/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      keyframes: {
        inout: {
          "0%, 100%": { opacity: 0 },
          "50%": { opacity: 1 },
        },
      },
      animation: {
        inout: "inout 1s infinite",
      },
    },
  },
  plugins: [],
};
