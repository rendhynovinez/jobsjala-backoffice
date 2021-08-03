<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE-3.0.5/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('AdminLTE-3.0.5/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
{{-- <script src="{{asset('AdminLTE-3.0.5/plugins/chart.js/Chart.min.js')}}"></script> --}}
<script src="{{asset('AdminLTE-3.0.5/dist/js/demo.js')}}"></script>
{{-- <script src="{{asset('AdminLTE-3.0.5/dist/js/pages/dashboard3.js')}}"></script> --}}

<script src="{{asset('AdminLTE-3.0.5/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->

<script src="{{asset('AdminLTE-3.0.5/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.0.5/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.0.5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<!-- SweetAlert2 -->
<script src="{{asset('AdminLTE-3.0.5/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Toastr -->
<script src="{{asset('AdminLTE-3.0.5/plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.0.5/dist/js/adminlte.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ asset('AdminLTE-3.0.5/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('AdminLTE-3.0.5/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

<!--DateRangePicker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- Bootstrap Switch -->
<script src="{{asset('AdminLTE-3.0.5/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

@yield('additional-js')

<script type="text/javascript">
    function checkLogout()
    {
        var rememberme = localStorage.getItem('rememberMe')

        if (rememberme == 'false') {
            localStorage.clear()
        }
    }
</script>

