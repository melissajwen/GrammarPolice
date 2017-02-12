<script type="text/javascript">
  $(function(){
    $.ajax({
      type: "GET",
      url: 'index.php',
      data: ({Imgname:"13"}),
      success: function(data) {
        alert(data);
      }
    });
  });
</script>