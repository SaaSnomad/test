<?php
// DB Params
   define('DB_HOST','localhost');
   //define('DB_USER','sndb28');
   //define('DB_PASS','Saasnomad28');
   define('DB_USER','sndb28');
   define('DB_PASS','Saasnomad28');
   define('DB_NAME','saasnomad');
   define('SITE_TITLE', 'SaaSnomad');
// Paths
   define ('BASE_URL', 'https://test.saasnomad.com');
   define('ROOT_PATH', 'https://test.saasnomad.com');
// Define the webserver and path parameters
   // Main webserver: eg, http://localhost - should not be empty for productive servers
   // HTTP_SERVER is your Main webserver: eg, http://www.yourdomain.com
   // HTTPS_SERVER is your Secure webserver: eg, https://www.yourdomain.com
   define('BASE_URL', '/test/');
   define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/test/');
?>