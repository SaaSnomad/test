    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- jQuery 2.1.3 -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/jsdataTables.material.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.flash.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    


    <!-- Table Exportable -->
      <script>
      $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
    </script>
    <script>
      jQuery(document).ready(function ($) {
        $(window).load(function () {
            setTimeout(function(){
                $('#preloader').fadeOut('slow', function () {
                });
            },1000);
          });  
      });
    </script>
    <script src="js/modal.js"></script>
    <script src="js/news-ajax.js"></script>
 
  </body>
</html>