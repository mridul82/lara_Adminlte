<script>
 $('#confirm').on('click',function(){
  alert("hi");
  $("#delete-court-form").submit();
 })

  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>