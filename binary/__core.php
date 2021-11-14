
<?php

/**
 * Engine
 *
 * @category Engine
 * @package  CORE
 * @author   M. Pancal <hello@tacnix.com>
 * @license  MIT <a href="https://tacnix.com/">Tacnix</a>
 * @version  GIT: <1.0.0>
 * @link     https://tacnix.com/
 * @var      ENVIRONMENT 0 default environmental level for starting the application.
 * @var      DEFAULT_TIMEZONE - Default timezone of application is made in India.
 * @var      ENVIRONMENT - Set DEVELOPMENT, MAINTENANCE, or LIVE current ENVIRONMENT.
 *
 */

// if (function_exists('date_default_timezone_set')) {
//     date_default_timezone_set('DEFAULT_TIMEZONE');
// }

function customErrorReporting($value) {
    if (__ENV__ === $value) { // DEVELOPMENT
        error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
        ini_set('display_errors', 'On');
        ini_set('log_errors', 'On');
        ini_set('error_log', path . ds . 'error.log');
    } else if (__ENV__ === $value) { // MAINTENANCE
        error_reporting(E_ALL);
        ini_set('display_errors', 'Off');
        ini_set('log_errors', 'On');
        ini_set('error_log', path . ds . 'error.log');
    } else if (__ENV__ === $value) { // LIVE
        error_reporting(E_ALL);
        ini_set('display_errors', 'Off');
        ini_set('log_errors', 'On');
        ini_set('error_log', path . ds . 'error.log');
    }
}

customErrorReporting(__ENV__);

if (file_exists(library . ds . 'template.php')) { require library . ds . 'template.php'; }

?>
