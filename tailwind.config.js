/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./PHP/**/*.{html,js,php}",
    "./phpWPU/**/*.{html,js,php}",
    "./KuliahPHP/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter"],
        chalk: "ChalkPaint,sans-serif",
        oswald: ["Oswald"],
      },
    },
  },
  plugins: [],
};
