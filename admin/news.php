              

  <?php include 'core/init.php'; ?>

  <!-- Fetch all cards in Featured Companies Section from DB -->
  <?php  
      // Create  DB Object
      $db = new Database();
      // Run Query 
      $db->query("SELECT * FROM news");
      // Assign Result Set
      $news = $db->resultset();
  ?>


              <table id="example" class="display nowrap news-tab" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>News Title</th>
                          <th>News Summary</th>
                          <th>Date posted</th>
                          <th>News Source</th>
                          <th>3d Party Link</th>
                          <th>Date created</th>                       
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach($news as $news_item) : ?>
                      <tr>
                          <td><?php echo $news_item->id; ?></td>
                          <td><?php echo $news_item->news_title; ?></td>
                          <td><?php echo $news_item->news_summary; ?></td>
                          <td><?php echo $news_item->news_date_posted; ?></td>
                          <td><?php echo $news_item->news_source; ?></td>
                          <td><a href="<?php echo $news_item->news_link; ?>"><?php echo $news_item->news_link; ?></a></td>
                          <td><?php echo $news_item->date_added; ?></td>
                      </tr>
                      <?php endforeach; ?> 
                  </tbody>
              </table>


    <!-- jQuery 2.1.3 -->
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