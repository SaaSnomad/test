<?php
// Database
   define('DB_HOST','localhost');
   define('DB_USER','sndb28');
   define('DB_PASS','Saasnomad28');
   define('DB_NAME','saasnomad');
   define('SITE_TITLE', 'SaaSnomad');
   
   // Define the webserver and path parameters
   // Main webserver: eg, http://localhost - should not be empty for productive servers
   // HTTP_SERVER is your Main webserver: eg, http://www.yourdomain.com
   // HTTPS_SERVER is your Secure webserver: eg, https://www.yourdomain.com
   
// Servers
   define('HTTP_SERVER', 'http://test.saasnomad.com');
   define('HTTPS_SERVER', 'https://test.saasnomad.com');

// Paths
   define('BASE_URL', '');
   define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '');
?>