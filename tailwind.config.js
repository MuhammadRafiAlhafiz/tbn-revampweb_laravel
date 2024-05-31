/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
    ],
    theme: {
        daisyui: {
            themes: ["light"],
        },
        extend: {
            colors: {
                hijau: "#C9D32C",
                background: "#FAFBE6",
                biru: "#25396F",
                graybg: "#D1D2AD",
                foundationgreen: "#8E9400",
                purple: "#403879",
                bgpayment: "#DDEBF5B2",
                bgpayment2: "#DFECF6",
            },
            fontFamily: {
                popins: ["Poppins, sans-serif"],
                nunito: ["Nunito, sans-serif"],
                Roboto: ["Roboto, sans-serif"],
            },
        },
    },
};