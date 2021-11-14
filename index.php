<?php
/**
 * TACNIX
 *
 * @category INDEX
 * @package  CORE
 * @author   M. Pancal <hello@tacnix.com>
 * @license  MIT <a href="https://tacnix.com/license/mit/">Tacnix</a>
 * @version  GIT: 1.0.0 https://www.github.com/tacnix/main/
 * @link     https://tacnix.com
 */

 define ('siteurl', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

 define('path', dirname(__FILE__));
 define('ds', DIRECTORY_SEPARATOR);

 define('dir', "/mamp/htdocs/workspace/tacnix/");
 define('url', "http://localhost/workspace/tacnix/");

 if (file_exists(path . ds . '__boot.php')) { require_once path . ds . '__boot.php'; }
