<?php
if (!empty($page) && isset($page) && $page == 'portfolio') {

  echo '<p>'.$page.'</p>';

  // $MySQLiConnect = MySQLi_connect(MySQLi_Hostname, MySQLi_Username, MySQLi_Password, MySQLi_Database);
  //
  // // Check connection
  // if (!mysqli_connect_errno()) {
  //   $logmsg = "MySQLi Database Connected successfully!";
  //
  //   if ($MySQLiResult = mysqli_query($MySQLiConnect, 'SELECT * FROM `projects`')) {
  //
  //     if (!$MySQLiResult) {
  //       $logmsg = 'Error: '. mysqli_error($MySQLiConnect);
  //       echo 'Error: '. mysqli_error($MySQLiConnect);
  //     } else if (!empty($MySQLiResult)) {
  //       // Fetch one and one row
  //       $MySQLiRow = mysqli_fetch_row($MySQLiResult);
  //
  //
  //
  //       // Numeric array
  //       $MySQLiRow = mysqli_fetch_array($MySQLiResult, MYSQLI_NUM);
  //       printf ("%s (%s)\n", $MySQLiRow[0], $MySQLiRow[1]);
  //
  //       // Associative array
  //       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  //       printf ("%s (%s)\n", $row["Lastname"], $row["Age"]);
  //
  //       // Free result set
  //       mysqli_free_result($result);
  //
  //
  //
  //
  //
  //
  //       // **************************** START OF SWITCH CASE ****************************
  //       switch ($template) {
  //
  //         case 'value':
  //           // code...
  //           break;
  //
  //         default:
  //           // code...
  //           break;
  //       // **************************** END OF SWITCH CASE ****************************
  //
  //     }
  //   }
  //   mysqli_free_result($MySQLiResult);
  //
  // } else {
  //   $logmsg = "Failed to connect to MySQL: " . mysqli_connect_errno();
  //   die("Failed to connect to MySQL: " . mysqli_connect_errno());
  //   exit();
  // }
  //
  // mysqli_close($MySQLiConnect);
  //
  //
  //
  // }




} else {

  echo '<p> if part of page is not working properly.</p>';

}
