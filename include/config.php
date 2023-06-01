<?php 
/* 

 
 
 /* 
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
| 2checkout configuration 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */

define('TWOCHECKOUT_SELLER_ID', '251637920326');
define('TWOCHECKOUT_PUBLISHABLE_KEY', '73F9B40B-878C-4A76-AD0F-EFCB597F5181');
define('TWOCHECKOUT_PRIVATE_KEY', '1DA5944A-1A07-4E32-A228-19E631B3C652');
define('CURRENCY_CODE', 'usd');


/* 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
| Database configuration *
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */ 
 
define('DB_HOST', 'sql113.epizy.com'); 
define('DB_USERNAME', 'epiz_29931282'); 
define('DB_PASSWORD', 'UFxEJzDO1DqfQIJ'); 
define('DB_NAME', 'epiz_29931282_gateway');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}

/* 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
| Site configuration *
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */ 
define('BASE_URL', 'http://site.com/');

define('TITLE', 'Hax India');