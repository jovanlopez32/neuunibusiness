import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                /* Components */
                'resources/js/components/pusher.js',
                /* Animation */
                'resources/js/animation/pages/us.js',
                'resources/js/animation/nav/menu.js',
            ],
            refresh: true,
        }),
    ],
});
