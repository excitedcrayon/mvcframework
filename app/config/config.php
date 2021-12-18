<?php 
    /**
     * Config file holds constants that will be useful across the web app
     */

     # Database params
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     define('DB_NAME', 'mvc');

     # APP ROOT
     define('APPROOT',dirname(dirname(__FILE__)));

     # URL ROOT (Dynamic links)
     define('URLROOT', 'locahost/mvcframework');

     define('SITENAME', 'MVC Framework');
?>