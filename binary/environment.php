<?php
/**
 * @category Environment
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 * @var      DEFAULT_TIMEZONE - Default timezone of application is made in India.
 * @var      ENVIRONMENT - Set DEVELOPMENT, MAINTENANCE, or LIVE. Current = ENVIRONMENT.
 */

// Owner details
const SITE_NAME = '&lt;/Tacnix&gt;';
const SITE_TAG = '&lt;/Tacnix&gt;';
const SITE_LINK = 'https://tacnix.com/';

// Author details
const AUTH_NAME = 'Panchal Mukunda K';
const AUTH_TAG = 'Panchal_Mukunda_K';
const AUTH_LINK = 'https://linktr.ee/panchal.mukunda.k';

// Developer details
const DEV_NAME = 'Panchal Mukunda K';
const DEV_TAG = 'Panchal_Mukunda_K';
const DEV_LINK = 'https://linktr.ee/panchal.mukunda.k';


// Set the default language of the project.
const lang = 'en-US';

// Set project environment value.
const __ENV__ = 'DEVELOPMENT';

// Set "default timezone" value.
const DEFAULT_TIMEZONE = 'Asia/Kolkata';

// Meta details
const meta_title = '&lt;/tacnix&gt;';
const meta_desc = 'We are a webste design & web development agency, that Crafting Digital Experiences';
const meta_keyword = 'tacnix, website design, web development, web hosting, domain registration, crm solutions, erp solutions, pos solutoins, ppc marketing';
const title = '&lt;/tacnix&gt;';
const contact_address = 'B/303, Goumukh Dham, Opp. Shivar Garden <br> Mira Road, Thane, MH, IN 401107.';
const contact_number = '+91 7738 064 970';
const contact_email = 'hello@tacnix.com';

// SOCIAL LINKS
const dribbble = 'https://dribbble.com/Tacnix';
const twitter = 'https://twitter.com/Tacnix1';
const behance = 'https://www.behance.net/Tacnix';
const facebook = 'https://www.facebook.com/tacnix/';
const linkedin = 'https://www.linkedin.com/tacnix/';

// MySQLi host, username, password, dbname, port, socket
const MySQLi_Hostname = 'localhost';
const MySQLi_Username = 'root';
const MySQLi_Password = 'root';
const MySQLi_Database = 'tacnix';
const MySQLi_Charset = 'utf8';
const MySQLi_Port = '3306' /*'80'*/;
const MySQLi_Prefix = 'tac_';
const MySQLi_Socket = '/tmp/mysql.sock';

 // Use PRE-DEFINED prefix for the database, else use SYS by default.
const MYSQLi_TABLE_PREFIX = 't_';

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
