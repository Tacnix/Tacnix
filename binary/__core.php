
<?php

/**
 * Core
 *
 * @category Core
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
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
