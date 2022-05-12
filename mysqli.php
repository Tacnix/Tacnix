<?php

$logtime = date('Y-m-d h:i:sa');
define ('siteurl', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

define('path', dirname(__FILE__));
define('ds', DIRECTORY_SEPARATOR);

define('dir', "/mamp/htdocs/workspace/tacnix/");
define('url', "http://localhost/workspace/tacnix/");


define('binary', path . ds . 'binary');

if (file_exists(binary . ds . 'config.php')) { require binary . ds . 'config.php'; }
if (file_exists(binary . ds . 'salts.php')) { require binary . ds . 'salts.php'; }
if (file_exists(binary . ds . 'defined.php')) { require binary . ds . 'defined.php'; }
if (file_exists(binary . ds . 'environment.php')) { require binary . ds . 'environment.php'; }
if (file_exists(binary . ds . 'functions.php')) { require binary . ds . 'functions.php'; }

// Log file starting.
mysqlilog("************** Start Log For Day : '" . $logtime . "' of file **********");
?>

<!DOCTYPE html>
<html lang="<?=lang?>">

<?php
session_start();
// Timezone ('Asia/Kolkata');
// CustomErrorReporting(__ENV__);
echo "<p>" . customHash( 32, 32 ) . "</p>";

$MySQLiConnect = MySQLi_connect(MySQLi_Hostname, MySQLi_Username, MySQLi_Password, MySQLi_Database);
// Check connection
if (!mysqli_connect_errno()) {
  $logmsg = "MySQLi Database Connected successfully!";

  if ($MySQLiResult = mysqli_query($MySQLiConnect, 'SELECT * FROM `projects`')) {

    if (!$MySQLiResult) {
      $logmsg = 'Error: '. mysqli_error($MySQLiConnect);
      echo 'Error: '. mysqli_error($MySQLiConnect);
    } else if (!empty($MySQLiResult)) {
      // Fetch one and one row
      while ($MySQLiRow = mysqli_fetch_row($MySQLiResult)) {
        printf (
          '<div class="work__item pt-80 pb-80 border-bottom">
          <a href="?page=portfolio&getid=%s&project=%s&client=%s" class="effect-ajax" data-dsn-ajax="work-hover" data-img="<?=img?>/project/project_img.jpg"><span class="metas mb-25"><span> %s </span></span><h2 class="work__item-text"><span class="work__item-textinner title">%s</span></h2></a>
        </div>', $MySQLiRow[1], $MySQLiRow[2], $MySQLiRow[3], $MySQLiRow[4], $MySQLiRow[3]
        );
      }
    }
  }
  mysqli_free_result($MySQLiResult);
} else {
  $logmsg = "Failed to connect to MySQL: " . mysqli_connect_errno();
  die("Failed to connect to MySQL: " . mysqli_connect_errno());
  exit();
}

mysqli_close($MySQLiConnect);

mysqlilog($logmsg);
mysqlilog("************** END Log For Day : '" . $logtime . "'**********");
?>
</html>
