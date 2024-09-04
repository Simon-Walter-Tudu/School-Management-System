</div>
<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2022 <a href="http://adminlte.io">School Management System</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

<script>
  (function() {
    var path = window.location.href;

    $(".nav-link").each(function() {

      var href = $(this).attr('href');
      //console.log(href);

      if (path === decodeURIComponent(href)) {
        var parent = $(this).closest('.has-treeview');
        parent.addClass('menu-open');
        $(parent).find('.nav-link').first().addClass('active');
        //console.log(parent);
      };
    });
  }());
</script>
<script>
jQuery(document).ready(function(){
  jQuery('#class').change(function(){
    // alert(jQuery(this).val());
    jQuery.ajax({
      url:'ajax.php',
      type : 'POST',
      data  : {'class_id':jQuery(this).val()},
      dataType : 'json',
      success: function(response){
        if(response.count > 0)
        {
          jQuery('#section-container').show();        
        }
        else
        {
          jQuery('#section-container').hide();
        }
        jQuery('#section').html(response.options); 
      }
    });
  });
})
</script>
</body>

</html>