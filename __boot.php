<?php

/**
 * Boot
 *
 * @category Boot
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 *
 */

define('binary', path . ds . 'binary');

if (file_exists(binary . ds . '__salts.php'))
{ require binary . ds . '__salts.php'; }
if (file_exists(binary . ds . '__defined.php'))
{ require binary . ds . '__defined.php'; }
if (file_exists(binary . ds . '__environment.php'))
{ require binary . ds . '__environment.php'; }
if (file_exists(binary . ds . '__functions.php'))
{ require binary . ds . '__functions.php'; }
if (file_exists(binary . ds . '__core.php'))
{ require binary . ds . '__core.php'; }
