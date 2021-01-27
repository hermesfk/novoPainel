<footer class="main-footer">
    <strong>Copyright &copy; 2021 - <a href="www.senac.com.br">Senac</a>.</strong>
    Todos os direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
    </div>
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="painel/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="painel/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="painel/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="painel/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="painel/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="painel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="painel/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="painel/plugins/moment/moment.min.js"></script>
<script src="painel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="painel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="painel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->


<!-- DataTables  & Plugins -->
<script src="painel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="painel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

<script src="painel/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="painel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

<script src="painel/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="painel/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script src="painel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="painel/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="painel/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="painel/dist/js/pages/dashboard.js"></script>

<!-- Page specific script -->
<script>
    $(function () {
        $("#tabela-produtos").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "searching": true,
            "paging": true,
            "info": true
        }).buttons()
                .container()
                .appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
</body>
</html>
