<?php
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
          '
          <div class="work-item  swiper-slide over-hidden">
            <div class="box-img p-relative over-hidden" data-overlay="6">
              <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?=img?>%s.jpg" alt="%s">
            </div>
            <div class="box-content">
              <div class="metas d-inline-block mb-15"><span> %s</span> <span>%s</span></div>
              <h4 class="sec-title"><a class="effect-ajax" data-dsn-ajax="work" href="?page=portfolio&getid=%s&project=%s&client=%s">%s</a></h4>
            </div>
          </div>', $MySQLiRow[10], $MySQLiRow[3], $MySQLiRow[2], $MySQLiRow[3], $MySQLiRow[1], $MySQLiRow[2], $MySQLiRow[3], $MySQLiRow[4]
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
?>
