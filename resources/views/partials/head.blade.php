<!-- Favicon -->
{{-- <link rel="icon" type="image/x-icon" href={{Vite::asset("resources/assets/img/favicon/favicon.ico")}} /> --}}

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />

<!-- Icons -->
{{-- <link rel="stylesheet" href={{Vite::asset("resources/assets/fonts/remixicon.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/flag-icons.css")}} /> --}}

<!-- Menu waves for no-customizer fix -->
{{-- <link rel="stylesheet" href={{Vite::asset("resources/assets/css/node-waves.css")}} /> --}}

<!-- Core CSS -->
{{-- <link rel="stylesheet" href={{Vite::asset("resources/assets/css/core.css")}} class="template-customizer-core-css" />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/theme-default.css")}} class="template-customizer-theme-css" />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/demo.css")}} /> --}}

<!-- Vendors CSS -->
{{-- <link rel="stylesheet" href={{Vite::asset("resources/assets/css/perfect-scrollbar.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/typeahead.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/apex-charts.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/datatables.bootstrap5.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/responsive.bootstrap5.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/buttons.bootstrap5.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/datatables.checkboxes.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/select2.css")}} />
<link rel="stylesheet" href={{Vite::asset("resources/assets/css/sweetalert2.css")}} /> --}}

<!-- Page CSS -->

<!-- Helpers -->
{{-- <script src={{Vite::asset("resources/assets/js/helpers.js")}}></script>
<script src={{Vite::asset("resources/assets/js/template-customizer.js")}}></script>
<script src={{Vite::asset("resources/assets/js/config.js")}}></script>
<script src={{Vite::asset("resources/assets/js/jquery.min.js")}}></script> --}}

@vite([
                "resources/css/app.css",
                "resources/js/app.js",

                //head
                "resources/assets/css/vendor.min.css",
                "resources/assets/css/icon.min.css",
                "resources/assets/css/app.min.css",

                "resources/assets/js/config.min.js",

])
