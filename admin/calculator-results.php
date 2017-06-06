<?php include 'core/init.php'; ?>

<!-- Fetch all cards in Featured Companies Section from DB -->
<?php  
    // Create  DB Object
    $db = new Database();
    // Run Query 
    $db->query("SELECT * FROM calculator");
    // Assign Result Set
    $calculator = $db->resultset();
?>

<!-- Header -->
<?php include 'includes/header.php'; ?>
<!--/.Header-->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="calculator-results.php" class="mdl-layout__tab is-active">Calculator Results</a>
          <a href="sellers.php" class="mdl-layout__tab">Sellers</a>
          <a href="buyers.php" class="mdl-layout__tab">Buyers</a>
          <a href="contact-requests.php" class="mdl-layout__tab">Contact Requests</a>
          <a href="new-features-subscribers.php" class="mdl-layout__tab">New Feature Subscribers</a>
          <a href="news-subscribers.php" class="mdl-layout__tab">News Subscribers</a>
          <a href="add-news.php" class="mdl-layout__tab">Add News</a> 
        </div>
      </header>

      <main class="mdl-layout__content" style="width: 100%;">
        <div class="mdl-layout__tab-panel is-active" id="overview">
        <div id="preloader"></div>
          <section class="mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>CALCULATOR RESULTS</h4> 
        
                <table id="example" class="display nowrap" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Region</th>
                          <th>Last Month MRR</th>
                          <th>MRR Monthly Growth</th>
                          <th>Gross Margin</th>
                          <th>Monthly Cash Burn</th>
                          <th>Email</th>
                          <th>Location</th>
                          <th>Range From</th>
                          <th>Range To</th>
                          <th>Date Used</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach($calculator as $item) : ?>
                      <tr>
                          <td><?php echo $item->id; ?></td>
                          <td><?php echo $item->calculator_region; ?></td>
                          <td><?php echo $item->calculator_mrr; ?></td>
                          <td><?php echo $item->calculator_mrr_growth; ?></td>
                          <td><?php echo $item->calculator_margin; ?></td>
                          <td><?php echo $item->calculator_burn; ?></td>
                          <td><?php echo $item->calculator_email; ?></td>
                          <td><?php echo $item->calculator_location; ?></td>
                          <td><?php echo $item->range_from; ?></td>
                          <td><?php echo $item->range_to; ?></td>
                          <td><?php echo $item->date_used; ?></td>
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
  
