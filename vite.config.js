import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/public/',  // Sesuaikan dengan path di server Anda
    build: {
      outDir: 'public/build',  // Folder tempat output build akan disimpan
    },
    plugins: [
        laravel({
            input: ['resources/assets/scss/app.scss', 'resources/assets/js/app.js'],
            refresh: true,
        }),
    ],
});
