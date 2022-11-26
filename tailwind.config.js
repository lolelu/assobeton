const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                archivo: ["Archivo", ...defaultTheme.fontFamily.sans],
                sans: ["Archivo", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: "#266DD3",
                secondary: "#2d3748",
                tertiary: "#4a5568",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
