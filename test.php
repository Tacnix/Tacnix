<!DOCTYPE html>
<html lang="<?=lang?>">
<?php

define ('siteurl', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

define('path', dirname(__FILE__));
define('ds', DIRECTORY_SEPARATOR);

define('dir', "/mamp/htdocs/workspace/tacnix/");
define('url', "http://localhost/workspace/tacnix/");


define('binary', path . ds . 'binary');

if (file_exists(binary . ds . '__salts.php'))
{ require binary . ds . '__salts.php'; }
if (file_exists(binary . ds . '__defined.php'))
{ require binary . ds . '__defined.php'; }
if (file_exists(binary . ds . '__environment.php'))
{ require binary . ds . '__environment.php'; }
if (file_exists(binary . ds . '__functions.php'))
{ require binary . ds . '__functions.php'; }



session_start();
__mysqli();
__timezone ('Asia/Kolkata');
__customErrorReporting(__ENV__);
// __getbrowser();
// __getos();
// __getip();
// __logdata();
// db_connect($host, $user, $pass, $dbname);

// if (function_exists(db_connect())) {
//   db_connect();
//   echo "Database connected successfully!";
// } else {
//   echo "\n Error in connection!";
// }

// db_query('SELECT * FROM `projects`');
// db_close();


db_query("SHOW DATABASES");
?>
</html>
