<?php
/**
 * @category Boot
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 */

define('binary', path . ds . 'binary');

if (file_exists(binary . ds . 'salts.php')) { require binary . ds . 'salts.php'; }
if (file_exists(binary . ds . 'defined.php')) { require binary . ds . 'defined.php'; }
if (file_exists(binary . ds . 'environment.php')) { require binary . ds . 'environment.php'; }
if (file_exists(binary . ds . 'config.php')) { require binary . ds . 'config.php'; }
if (file_exists(binary . ds . 'functions.php')) { require binary . ds . 'functions.php'; }
if (file_exists(binary . ds . 'core.php')) { require binary . ds . 'core.php'; }
