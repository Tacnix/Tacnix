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
// $lang = MYSQLi_LANGUAGE;
// $host = MYSQLi_HOSTNAME;
// $user = MYSQLi_USERNAME;
// $pass = MYSQLi_PASSWORD;
// $dbname = MYSQLi_DATABASE;
// $charset = MYSQLi_CHARSET;
// $port = MYSQLi_PORT;
// $db_prefix = MYSQLi_DB_PREFIX;

session_start();
__timezone ('Asia/Kolkata');
__customErrorReporting(__ENV__);
// __getbrowser();
// __getos();
// __getip();
// __logdata();
// db_connect($host, $user, $pass, $dbname);
db_query('SELECT * FROM `projects`');


if (file_exists(library . ds . 'template.php')) { require library . ds . 'template.php'; }
?>
