import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",

                //head
                "resources/assets/css/vendor.min.css",
                "resources/assets/css/icon.min.css",
                "resources/assets/css/app.min.css",

                "resources/assets/js/config.min.js",

                //javascript
                "resources/assets/js/vendor.min.js",
                "resources/assets/js/app.min.js",
            ],
            refresh: true,
        }),
    ],
});
