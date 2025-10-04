/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                'wellco-brown': '#755D34',
                'wellco-beige': '#E5D9C3',
                'wellco-light-beige': '#F2ECE1',
                'wellco-dark-gray': '#4E4949',
                'wellco-black': '#1D1D1F',
                'wellco-gray': '#383434',
                'wellco-brown-alt': '#755D33',
                'wellco-medium-gray': '#595961',
              },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};
