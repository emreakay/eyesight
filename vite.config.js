import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = 'emreakay-vigilant-xylophone-rjvxg5x54fx4qx-8080.preview.app.github.dev'; 

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
