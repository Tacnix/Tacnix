<?php
/**
 * @category Defined
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 */


// Library & Binary defined with base path.
define('library', path . ds . 'library');

// Sub folders of Library defined.
define('pages', library . ds . 'pages');
define('theme', library . ds . 'theme');

// Theme folders and files are defined from URL type.
define('themes', url . 'library/theme/');
define('css', themes . 'css');
define('fonts', themes . 'fonts');
define('img', themes . 'img');
define('js', themes . 'js');

// $id['id'] = "0123456789";
// $id['uid'] = "0123456789";
// $id['pid'] = "0123456789";

// Temp Defined Values.
define ('post','0');
define ('testimonial','0');
define ('work','1');
define ('brand','0');
define ('awards','0');
define ('team','0');
define ('clients','0');
