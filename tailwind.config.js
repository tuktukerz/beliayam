/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                'fit': 'repeat(auto-fit, minmax(250px, max-content))'
            }
        },
    },
    plugins: [require("flowbite/plugin")],
    safelist: [
        "border-[#5BC0EB]",
        "text-[#5BC0EB]",
        "bg-[#5BC0EB]",

        "border-[#03B5AA]",
        "text-[#03B5AA]",
        "bg-[#03B5AA]",

        "border-[#F9DB6D]",
        "text-[#F9DB6D]",
        "bg-[#F9DB6D]",

        "border-[#957FEF]",
        "text-[#957FEF]",
        "bg-[#957FEF]",

        "border-[#36827F]",
        "text-[#36827F]",
        "bg-[#36827F]",

        "border-[#48E9BC]",
        "text-[#48E9BC]",
        "bg-[#48E9BC]",

        "border-[#FF331F]",
        "text-[#FF331F]",
        "bg-[#FF331F]",

        "border-[#F19A3E]",
        "text-[#F19A3E]",
        "bg-[#F19A3E]",
    ],
};
