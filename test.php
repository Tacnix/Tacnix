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

echo "<p>" . customHash( 32, 32 ) . "</p>";

// Perform query
// db_query('SELECT * FROM `projects`');
$mysqli = new mysqli(host, user, pass, data);
// Check connection
if ($mysqli->connect_error) {
  die("Failed to connect to MySQL: " . $mysqli->connect_error);
}
// echo "Connected successfully";

$result = $mysqli->query('SELECT * FROM `serials`');

// Perform query
if (!$result) {
  echo 'Error: '. $mysqli->error;
} else {

  while ($row = $result -> fetch_row()) {
    // printf ('<div style="border: 1px solid #000; margin: 10px 50px; padding: 10px; display: block; background: #fff;"> <i>%s</i> <h3>%s</h3> <p>%s</p></div>', $row[1], $row[2], $row[3]);

    printf ('
    <div class="work__item pt-80 pb-80 border-bottom">
      <a href="?p=portfolio&get=projects&id=2" class="effect-ajax" data-dsn-ajax="work-hover" data-img="<?=img?>/project/project2/1.jpg"><span class="metas mb-25"><span> %s </span></span><h2 class="work__item-text"><span class="work__item-textinner title">%s</span></h2></a>
    </div>
    ', $row[2], $row[3]);

  }



  // Free result set
  $result -> free_result();
}
$mysqli->close();

// if ($result = $mysqli->query("SELECT * FROM `links`")) {
//   echo /*"Returned rows are: " . */ $result -> num_rows;
//   // Free result set
//   $result -> free_result();
// }
// $mysqli->close();

?>
</html>
