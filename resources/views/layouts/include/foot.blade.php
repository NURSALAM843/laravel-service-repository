<script src="{{ asset("assets/js/oneui.app.min.js") }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset("assets/js/plugins/chart.js/chart.umd.js") }}"></script>

<!-- Page JS Code -->
<script src="{{ asset("assets/js/pages/be_pages_dashboard.min.js") }}"></script>
<script src="{{ asset("assets/form-element-helper.js") }}"></script>
<script src="{{ asset("assets/sweetalert2/sweetalert2.min.js") }}"></script>

@yield('script')
@stack('stack-script')