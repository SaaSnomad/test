<?php include 'core/init.php'; ?>

<!-- Fetch all cards in Featured Companies Section from DB -->
<?php  
    // Create  DB Object
    $db = new Database();
    // Run Query 
    $db->query("SELECT * FROM buyers");
    // Assign Result Set
    $buyers = $db->resultset();
?>

<!-- Header -->
<?php include 'includes/header.php'; ?>
<!--/.Header-->

        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="calculator-results.php" class="mdl-layout__tab">Calculator Results</a>
          <a href="sellers.php" class="mdl-layout__tab">Sellers</a>
          <a href="buyers.php" class="mdl-layout__tab is-active">Buyers</a>
          <a href="contact-requests.php" class="mdl-layout__tab">Contact Requests</a>
          <a href="new-features-subscribers.php" class="mdl-layout__tab">New Feature Subscribers</a>
          <a href="news-subscribers.php" class="mdl-layout__tab">News Subscribers</a>
          <a href="add-news.php" class="mdl-layout__tab">News</a>
        </div>
      </header>

      <main class="mdl-layout__content" style="width: 100%;">
        <div class="mdl-layout__tab-panel is-active" id="overview">
        <div id="preloader"></div>
          <section class="mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>BUYERS</h4> 
        
                <table id="example" class="display nowrap" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Country</th>
                          <th>Date created</th>                        
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach($buyers as $buyer) : ?>
                      <tr>
                          <td><?php echo $buyer->id; ?></td>
                          <td><?php echo $buyer->buyer_name; ?></td>
                          <td><?php echo $buyer->buyer_email; ?></td>
                          <td><?php echo $buyer->buyer_country; ?></td>
                          <td><?php echo $buyer->date_added; ?></td>
                      </tr>
                      <?php endforeach; ?> 
                  </tbody>
              </table>
              </div>
            </div>
          </section> 
      </main>
    </div>
    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->
  
