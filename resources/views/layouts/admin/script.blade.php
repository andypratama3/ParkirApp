<script src="{{ asset('asset_admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('asset_admin/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('asset_admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('asset_admin/js/jquery.cookie.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('asset_admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('asset_admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('asset_admin/js/misc.js') }}"></script>
    <script src="{{ asset('asset_admin/js/settings.js') }}"></script>
    <script src="{{ asset('asset_admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('asset_admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
@stack('js')
