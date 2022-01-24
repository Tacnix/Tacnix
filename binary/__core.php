<?php
/**
 * @category Core
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 * @var      DEFAULT_TIMEZONE - Default timezone of application is made in India.
 * @var      ENVIRONMENT - Set DEVELOPMENT, MAINTENANCE, or LIVE current ENVIRONMENT.
 */
//

session_start();
__timezone ('Asia/Kolkata');
__CustomErrorReporting(__ENV__);
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

if (file_exists(library . ds . 'template.php')) { require library . ds . 'template.php'; }
?>
