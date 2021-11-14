<?php
/**
 * @param MYSQL_HOST - 'MYSQL_HOST' is
 * host of the server where the files are stored.
 */
define( 'MYSQL_LANGUAGE', 'en' );
define( 'MYSQL_HOSTNAME', '' );
define( 'MYSQL_USERNAME', '' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DATABASE', '' );
define( 'MYSQL_CHARSET', 'utf8' );
define( 'MYSQL_PORT', '80' );
define( 'DB_PREFIX', 'db_' );

 // Use PRE-DEFINED prefix for the database, else use SYS by default.
define( 'TABLE_PREFIX', 'tbl_' );

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

// Set the default language of the site.
define('lang', 'en-US');

define('__ENV__',  'DEVELOPMENT');

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
