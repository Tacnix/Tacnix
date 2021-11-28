MYSQLi_<?php
/**
 * @category Defined
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 */

const MYSQLi_LANGUAGE = 'en';
const MYSQLi_HOSTNAME = 'localhost';
const MYSQLi_USERNAME = 'tacnix';
const MYSQLi_PASSWORD = 'tacnix';
const MYSQLi_DATABASE = 'tacnix';
const MYSQLi_CHARSET = 'utf8';
const MYSQLi_PORT = '80';
const MYSQLi_DB_PREFIX = 'tac_';

 // Use PRE-DEFINED prefix for the database, else use SYS by default.
const MYSQLi_TABLE_PREFIX = 'tbl_';

// Output $sep[amershand] = &
$separator = array(
    'at' => '@',
    'doller' => '$',
    'comma' => ',',
    'pipe' => '|',
    'dot' => '.',
    'acute' => '`',
    'quote_single' => "'",
    'quote' => '"',
    'question_mark' => '?',
    'slash' => '/',
    'colon' => ':',
    'semicolon' => ';',
    'equal' => '=',
    'plus' => '+',
    'underscore' => '_',
    'hyphen' => '-',
    'amershand' => '&',
    'percent' => '%',
    'hash' => '#'
);

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

define ('post','0');
define ('testimonial','0');
