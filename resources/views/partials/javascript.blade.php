    <!-- Core JS -->
    <!-- build:js assets/core.js -->
    {{-- <script src={{Vite::asset("resources/assets/js/jquery.min.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/popper.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/bootstrap.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/node-waves.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/perfect-scrollbar.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/hammer.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/i18n.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/typeahead.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/menu.js")}}></script> --}}

    <!-- endbuild -->

    <!-- Vendors JS -->
    {{-- <script src={{Vite::asset("resources/assets/js/apexcharts.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/datatables-bootstrap5.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/select2.js")}}></script>
    <script src={{Vite::asset("resources/assets/js/sweetalert2.js")}}></script> --}}

    <!-- Main JS -->
    {{-- <script src={{Vite::asset("resources/assets/js/main.js")}}></script> --}}

    @vite([
            "resources/assets/js/vendor.min.js",
            "resources/assets/js/app.min.js",
    ])
