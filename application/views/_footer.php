<div class="footer-pleca"></div>
</section>
</div>
<!-- <footer class="main-footer"></footer> -->
</div>

<script type="text/javascript">
	var base_url = "<?php echo base_url(); ?>";
</script>

<!-- REQUIRED JS SCRIPTS -->
<script src="./assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="./assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/admin/dist/js/adminlte.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="./assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- bootstrap datepicker -->
<script src="./assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<?php
  if ($this->uri->segment(1) == "productos" || $this->uri->segment(1) == "notificaciones") {
?>
  <!-- iCheck -->
  <script src="./assets/admin/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $("input[type='checkbox']").iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
<?php
  }
?>

<script src="./assets/admin/dist/js/admin.js"></script>

<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="./assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>