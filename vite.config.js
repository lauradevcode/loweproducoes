import dotenvExpand from "dotenv-expand";
import {config} from "dotenv";
dotenvExpand.expand(config({ path: '.env' }));
import {defineConfig, splitVendorChunkPlugin} from 'vite';
import laravel, {refreshPaths} from 'laravel-vite-plugin';
import {viteStaticCopy} from 'vite-plugin-static-copy';
import path from "path";
import inject from '@rollup/plugin-inject';


export default defineConfig({
    plugins: [
        splitVendorChunkPlugin(),
        inject({
            $: 'jquery',
            jQuery: 'jquery',
        }),
        viteStaticCopy({
            targets: [
                {src: 'node_modules/simplebar/dist/simplebar.min.css', dest: 'simplebar'},
                {src: 'node_modules/simplebar/dist/simplebar.min.js', dest: 'simplebar'},
                {src: 'node_modules/flowbite/dist/flowbite.js', dest: 'flowbite'},
                {src: 'node_modules/flowbite/dist/datepicker.js', dest: 'flowbite'},
                {src: 'node_modules/flowbite/dist/flowbite.js.map', dest: 'flowbite'},
                {src: 'node_modules/@fortawesome/fontawesome-free/css/all.min.css', dest: 'fontawesome/css'},
                {src: 'node_modules/@fortawesome/fontawesome-free/webfonts', dest: 'fontawesome'},
                {src: 'node_modules/sweetalert2/dist/sweetalert2.min.css', dest: 'sweetalert2'},
                {src: 'node_modules/@sweetalert2/theme-default/default.min.css', dest: 'sweetalert2'},
                {src: 'node_modules/sweetalert2/dist/sweetalert2.min.js', dest: 'sweetalert2'},
                {src: 'node_modules/jquery-validation/dist/jquery.validate.min.js', dest: 'jsvalidation'},
                {src: 'resources/vendor/jsvalidation.min.js', dest: 'jsvalidation'},
                {src: 'resources/vendor/jsvalidation.min.js.map', dest: 'jsvalidation'},
            ]
        }),
        laravel({
            input: [
                'resources/js/app.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    css: {
        postcss: {
            plugins: [
                require("tailwindcss")({
                    config: path.resolve(__dirname, "tailwind.config.js"),
                }),
            ],
        },
    },
});
