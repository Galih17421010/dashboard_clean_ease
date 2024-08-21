import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",

                //head
                "resources/assets/fonts/remixicon.css",
                "resources/assets/css/node-waves.css",
                "resources/assets/css/perfect-scrollbar.css",
                "resources/assets/css/typeahead.css",

                "resources/assets/css/core.css",
                "resources/assets/css/theme-default.css",
                "resources/assets/css/demo.css",

                "resources/assets/js/helpers.js",
                "resources/assets/js/template-customizer.js",
                "resources/assets/js/config.js",
                "resources/assets/js/jquery.min.js",

                //javascript
                "resources/assets/js/jquery.min.js",
                "resources/assets/js/popper.js",
                "resources/assets/js/bootstrap.js",
                "resources/assets/js/node-waves.js",
                "resources/assets/js/perfect-scrollbar.js",
                "resources/assets/js/hammer.js",
                "resources/assets/js/i18n.js",
                "resources/assets/js/typeahead.js",
                "resources/assets/js/menu.js",

                "resources/assets/js/apexcharts.js",
                "resources/assets/js/datatables-bootstrap5.js",
                "resources/assets/js/select2.js",
                "resources/assets/js/sweetalert2.js",
                "resources/assets/js/main.js",
            ],
            refresh: true,
        }),
    ],
});
