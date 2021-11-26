<?php

/**
 * Functions
 *
 * @category Functions
 * @package  Tacnix
 * @author   Mukunda Pancal <hello@tacnix.com>
 * @license  Apache License 2.0 https://github.com/panchalmukundak/tacnix/blob/main/LICENSE
 * @version  GIT: 1.0.0 https://github.com/panchalmukundak/tacnix/main/
 * @link     https://tacnix.com
 * @var      DEFAULT_TIMEZONE - Default timezone of application is made in India.
 *
 */

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



function contactform() {
  /*
   * CONFIGURE EVERYTHING HERE
   */

  // an email address that will receive the email with the output of the form
  $sendTo = 'contact@tacnix.com';

  // message that will be displayed when everything is OK :)
  $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

  // If something goes wrong, we will display this message.
  $errorMessage = 'There was an error while submitting the form. Please try again later';

  /*
   * LET'S DO THE SENDING
   */

  // if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
  error_reporting( E_ALL & ~E_NOTICE );

  try {

  	if ( count( $_POST ) == 0 && ! isset($_POST['name'])&& ! isset($_POST['email'])&& ! isset($_POST['message'])) {
  		throw new \Exception( 'Form is empty' );
  	}

  	// an email address that will be in the From field of the email.
  	$from = $_POST['email'] ;
  	// The message send in email
  	$message = $_POST['message'] ;
  	// subject of the email
    $subject = $_POST['name'];

  	$headers = 'From: ' . $from . "\r\n" .
  	           'Reply-To: ' . $sendTo . "\r\n" .
  	           'X-Mailer: PHP/' . phpversion();

  	// Send email
  	mail( $sendTo, $subject, $message, $headers );

  	$responseArray = array('type' => 'success', 'message' => $okMessage);
  } catch ( \Exception $e ) {
  	 $responseArray = array('type' => 'danger', 'message' => $errorMessage);
  }

  // if requested by AJAX request return JSON response
  if ( ! empty( $_SERVER['HTTP_X_REQUESTED_WITH'] ) && strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest' ) {
  	$encoded = json_encode( array( 'status' => true, 'message' => $okMessage ) );
  	header( 'Content-Type: application/json' );
  	echo $encoded;
  } /* else just display the message */ else {
  	$encoded = json_encode( array( 'status' => false, 'message' => $errorMessage ) );
  	header( 'Content-Type: application/json' );
  	echo $encoded;
  }

}
