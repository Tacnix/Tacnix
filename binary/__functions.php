<?php

function cleanurl() {

  // $get = $_GET['go'];

  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
      $url = "https://";
  } else {
      $url = "http://";
      // Append the host(domain name, ip) to the URL.
      $url.= $_SERVER['HTTP_HOST'];

      // Append the requested resource location to the URL
      $url.= $_SERVER['REQUEST_URI'];
      $url.= "?go=home";
      return $url;
  }

  if (cleanurl() === cleanurl()) {
      // header("Location: http://localhost/workspace/tacnix2020/?go=home", true, 301);
      // exit();
  } else {
      // header("Location: " .cleanurl(), true, 301);
      // exit();
  }

}

function __timezone($value) {
  define('DEFAULT_TIMEZONE', $value);
  if (function_exists('date_default_timezone_set'))
  { date_default_timezone_set('DEFAULT_TIMEZONE'); }
}

// __timezone ('Asia/Calcutta');

function posts() {

}
