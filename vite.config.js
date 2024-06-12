import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/Frontend/app.js'],
            refresh: true,
        }),
        vue(), // Add the Vue plugin here
    ],
    resolve: {
        alias: {
            '@': '/resources/js/Frontend', // Update this path according to your project structure
        },
    },
});
