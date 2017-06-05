
<!-- Header -->
<?php include 'includes/header.php'; ?>
<!--/.Header-->

        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="calculator-results.php" class="mdl-layout__tab">Calculator Results</a>
          <a href="sellers.php" class="mdl-layout__tab">Sellers</a>
          <a href="buyers.php" class="mdl-layout__tab">Buyers</a>
          <a href="contact-requests.php" class="mdl-layout__tab">Contact Requests</a>
          <a href="new-features-subscribers.php" class="mdl-layout__tab">New Feature Subscribers</a>
          <a href="news-subscribers.php" class="mdl-layout__tab">News Subscribers</a>
          <a href="news.php" class="mdl-layout__tab">News</a>
          <a href="add-news.php" class="mdl-layout__tab is-active">Add News</a>
        </div>
      </header>

      <main class="mdl-layout__content" style="width: 100%;">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <div id="preloader"></div>
          <section class="mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--3-col"></div>
            <div class="mdl-card mdl-cell mdl-cell--6-col">
              <div class="mdl-card__supporting-text">
                <h4 style="display:inline-block;">ADD NEWS TO WEBSITE</h4>  

                <form action="add_news_to_db.php"  id="news" method="post">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="news_title" id="news_title" required>
                    <label class="mdl-textfield__label" for="news_title">News Title</label>
                  </div>
                  </br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="news_summary" id="news_summary" maxlength="150" required>
                    <label class="mdl-textfield__label" for="news_summary">News Summary (max 150 chars)</label>
                  </div>
                  </br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="news_date_posted" id="news_date_posted" maxlength="11" required>
                    <label class="mdl-textfield__label" for="news_date_posted">Date Posted (e.g. Jan 3, 2017)</label>
                  </div>
                  </br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="news_source" id="news_source" required>
                    <label class="mdl-textfield__label" for="news_source">News Source (e.g. Techstars)</label>
                  </div>
                  </br>
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="url" name="news_link" id="news_link" required>
                    <label class="mdl-textfield__label" for="news_link">News Link</label>
                  </div>  
                  </br>      
                  <button type="submit" id="add-news-button" class="mdl-button mdl-button--raised mdl-button--colored" style="margin-top:30px;float:right;">Add News</button>
                </form>
              </div>
            </div>
            <div class="mdl-card mdl-cell mdl-cell--3-col"></div>
          </section>
        </div>
      </main>
    </div>
  

        <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->