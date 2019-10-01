$(function () {
    $('#example1').DataTable({
        'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'info'        : true,
      'autoWidth'   : false,
      'ordering'    : true,

    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': "false",
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
