<?php

function scrolltop() {
  ?>
<div class="scroll-to-top">
  <img src="<?=img?>/scroll_top.svg" alt="">
  <div class="box-numper"><span>10%</span></div>
</div>
  <?php
}

function cursorpage() {
?>
<div class="cursor">
    <div class="cursor-helper">
        <span class="cursor-drag">Drag</span>
        <span class="cursor-view">View</span>
        <span class="cursor-open"><i class="fas fa-plus"></i></span>
        <span class="cursor-close">Close</span>
        <span class="cursor-play">play</span>
        <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
        <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
    </div>
</div>
<?php
}

function socialnetwork() {
  ?>
<div class="social-side social-network d-flex align-items-center ">
  <div class="icon" data-dsn="parallax"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
  <ul class="socials d-flex flex-column p-absolute ">
    <li><a href="<?=dribbble?>" target="_blank"><i class="fab fa-dribbble"></i><span>Db</span></a></li>
    <li><a href="<?=twitter?>" target="_blank"><i class="fab fa-twitter"></i><span>Tw</span></a></li>
    <li><a href="<?=behance?>" target="_blank"><i class="fab fa-behance"></i><span>Be</span></a></li>
    <li><a href="<?=facebook?>" target="_blank"><i class="fab fa-facebook-f"></i><span>Fb</span></a></li>
  </ul>
</div>
  <?php
}

function loader() {
  ?>
<div class="preloader">
  <span class="percent ">0</span>
  <span class="loading-text text-uppercase">Loading...</span>
  <div class="preloader-bar"><div class="preloader-progress"></div></div>
  <h1 class="title v-middle">
    <span class="text-strok"><?=title?></span>
    <span class="text-fill"><?=title?></span>
  </h1>
</div>
  <?php
}

function menu() {
  ?>
<div class="site-header dsn-container dsn-load-animate">
  <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
    <div class="inner-header p-relative">
      <div class="main-logo">
        <a href="?p=home" data-dsn="parallax"><img class="light-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?=img?>/logo.png" alt="tacnix" /><img class="dark-logo" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?=img?>/logo-dark.png" alt="tacnix" /></a>
      </div>
    </div>
    <div class="menu-icon d-flex align-items-baseline">
      <div class="text-menu p-relative  font-heading text-transform-upper">
        <div class="p-absolute text-button">Menu</div>
        <div class="p-absolute text-open">Open</div>
        <div class="p-absolute text-close">Close</div>
      </div>
      <div class="icon-m" data-dsn="parallax" data-dsn-move="10">
        <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
        <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
        <span class="menu-icon-line p-relative d-block icon-bottom"></span>
      </div>
    </div>
    <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex align-items-baseline ">
      <div class="menu-cover-title">Menu</div>
      <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">
        <li><a href="?p=about"><span class="dsn-title-menu">About</span><span class="dsn-meta-menu">01</span><span class="dsn-bg-arrow"></span></a></li>
        <li><a href="?p=services"><span class="dsn-title-menu">Services</span><span class="dsn-meta-menu">02</span><span class="dsn-bg-arrow"></span></a></li>
        <li><a href="?p=portfolio"><span class="dsn-title-menu">Portfolio</span><span class="dsn-meta-menu">03</span><span class="dsn-bg-arrow"></span></a></li>
        <li><a href="?p=blog"><span class="dsn-title-menu">Blog</span><span class="dsn-meta-menu">04</span><span class="dsn-bg-arrow"></span></a></li>
        <li><a href="?p=contact" class="user-no-selection"><span class="dsn-title-menu">Contact</span><span class="dsn-meta-menu">05</span><span class="dsn-bg-arrow"></span></a></li>
      </ul>
      <div class="container-content  p-absolute h-100 left-60 d-flex flex-column justify-content-center">
        <div class="nav__info">
          <div class="nav-content">
            <p class="title-line"><?=title?></p>
            <p><?=contact_address?></p>
          </div>
          <div class="nav-content">
            <p class="title-line">Contact</p>
            <p class="links over-hidden"><a href="#" data-hover-text="+91 7738 064 970" class="link-hover"><?=contact_number?></a></p>
            <p class="links  over-hidden"><a href="mailto:hello@tacnix.com;" data-hover-text="hello@tacnix.com" class="link-hover"><?=contact_email?></a></p>
          </div>
        </div>
        <div class="nav-social nav-content">
          <div class="nav-social-inner p-relative">
            <p class="title-line">Follow us</p>
            <ul>
              <li><a href="#" target="_blank" rel="nofollow">Dribbble.<div class="icon-circle"></div></a></li>
              <li><a href="#" target="_blank" rel="nofollow">Behance.<div class="icon-circle"></div></a></li>
              <li><a href="#" target="_blank" rel="nofollow">Linkedin.<div class="icon-circle"></div></a></li>
              <li><a href="#" target="_blank" rel="nofollow">Twitter.<div class="icon-circle"></div></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
  <?php
}

function contactform() {
  /*
   *  CONFIGURE EVERYTHING HERE
   */

  // an email address that will receive the email with the output of the form
  $sendTo = 'contact@tacnix.com';

  // message that will be displayed when everything is OK :)
  $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

  // If something goes wrong, we will display this message.
  $errorMessage = 'There was an error while submitting the form. Please try again later';

  /*
   *  LET'S DO THE SENDING
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

function homepage_footer() {
  ?>
<footer class="footer  background-section p-relative">
  <div class="container">
    <div class="footer-container">
      <div class="d-flex align-items-center h-100">
        <div class="column-left">
          <div class="footer-social p-relative">
            <ul>
              <li class="over-hidden"><a href="#" data-dsn="parallax" target="_blank" rel="nofollow">Dribbble.</a></li>
              <li class="over-hidden"><a href="#" data-dsn="parallax" target="_blank" rel="nofollow">Behance.</a></li>
              <li class="over-hidden"><a href="#" data-dsn="parallax" target="_blank" rel="nofollow">Linkedin.</a></li>
              <li class="over-hidden"><a href="#" data-dsn="parallax" target="_blank" rel="nofollow">Twitter.</a></li>
            </ul>
          </div>
        </div>
        <div class="scroll-top animation-rotate" data-dsn="parallax">
          <img src="<?=img?>/scroll_top.svg" alt="">
          <i class="fa fa-angle-up"></i>
        </div>
        <div class="column-right">
          <h5><?=date('Y')?> &copy; by <a class="link-hover" data-hover-text="&lt;/tacnix&gt;" target="_blank" rel="nofollow" href="https://tacnix.com">&lt;/tacnix&gt;</a></h5>
        </div>
      </div>
    </div>
  </div>
</footer>
  <?php
}

function ContactFormModel() {
  ?>
  <!-- ========== Contact Form Model ========== -->
<div class="contact-btn"><div class="contact-btn-txt">Contact</div></div>
<div class="contact-modal background-section">
    <div class="contact-container h-100 w-100  border-right">
        <div class="box-contact-inner section-padding ">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="form-box">
                        <div class="line line-top"></div>
                        <div class="line line-bottom"></div>
                        <div class="line line-left"></div>
                        <div class="line line-right"></div>
                        <div class="mb-30 d-flex text-left flex-column align-items-start">
                            <p class="sub-heading line-shap line-shap-before mb-15"><span class="line-bg-right">Stay connected</span></p>
                            <h2 class="section-title  title-cap">Get in Touch</h2>
                        </div>
                        <form id="contact-form" class="form" method="post" action="contact.php"
                            data-toggle="validator">
                            <div class="messages"></div>
                            <div class="input__wrap controls">
                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your name *</label>
                                        <input id="form_name" type="text" name="name" placeholder="Type your name" required="required" data-error="name is required." />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>Your E-Mail *</label>
                                        <input id="form_email" type="email" name="email" placeholder="Type your Email Address" required="required" data-error="Valid email is required." />
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="entry-box">
                                        <label>What's up?</label>
                                        <textarea id="form_message" class="form-control" name="message" placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="text-right">
                                    <div class="image-zoom w-auto d-inline-block" data-dsn="parallax">
                                        <input type="submit" value="Send Message" class="dsn-button background-main border-radius">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="box-info-contact">
                        <ul>
                            <li>
                                <h5 class="title-block mb-15">Contact</h5>
                                <p class="text-p">+91 7738 064 970</p>
                                <div class="over-hidden mt-5">
                                    <a class="link-hover" data-hover-text="hello@tacnix.com" href="#">hello@tacnix.com</a>
                                </div>
                            </li>
                            <li>
                                <h5 class="title-block mb-15">Address</h5>
                                <p class="text-p">804, Mahalakshmi Tower, Tithal Road <br> Valsad, Gujarat 396001</p>
                            </li>
                            <li>
                                <h5 class="title-block mb-15">Follow</h5>
                                <div class="social-item over-hidden">
                                    <a class="link-hover" data-hover-text="Instagram." href="#" target="_blank" rel="nofollow">Instagram.</a>
                                </div>
                                <div class="social-item over-hidden">
                                    <a class="link-hover" data-hover-text="Facebook." href="#" target="_blank" rel="nofollow">Facebook.</a>
                                </div>
                                <div class="social-item over-hidden">
                                    <a class="link-hover" data-hover-text="YouTube." href="#" target="_blank" rel="nofollow">YouTube.</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- ========== End Contact Form Model ========== -->
  <?php
}
