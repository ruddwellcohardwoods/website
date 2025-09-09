/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                'wellco-brown': '#755D34',
              },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
