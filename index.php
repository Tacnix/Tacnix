<?php
/**
 * TACNIX
 *
 * @category Main Index Page
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchal-mukunda-k/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://www.github.com/tacnix/main/
 * @link     https://tacnix.com
 */

 define ('siteurl', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

 define('path', dirname(__FILE__));
 define('ds', DIRECTORY_SEPARATOR);

 define('dir', "/mamp/htdocs/workspace/tacnix/");
 define('url', "http://localhost/workspace/tacnix/");

 if (file_exists(path . ds . '__boot.php')) { require_once path . ds . '__boot.php'; }
