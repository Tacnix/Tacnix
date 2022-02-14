<?php if ($page = 'portfolio') { ?>

<!-- ========== Header Normal ========== -->
<header class="header-page over-hidden p-relative header-padding-top header-padding-bottom dsn-header-animation background-section">
  <div class="bg-circle-dotted"></div>
  <div class="dsn-container">
    <div class="content-hero p-relative d-flex align-items-center text-center flex-column h-100 dsn-hero-parallax-title">
      <p class="subtitle p-relative line-shap  dsn-load-animate"><span class="pl-10 pr-10 background-main">SOME OF OUR LATEST</span></p>
      <h1 class="title mt-30 dsn-load-animate">OUR BEST WORKS</h1>
    </div>
  </div>
</header>
<!-- ========== End Header Normal ========== -->
<div class="wrapper over-hidden">
  <div class="work-inner work-hover work  d-flex dsn-load-animate" data-fx="1">
    <?php
    // db_query('SELECT * FROM `projects`');
    $mysqli = new mysqli(host, user, pass, data);
    // Check connection
    if ($mysqli->connect_error) {
      die("Failed to connect to MySQL: " . $mysqli->connect_error);
    }
    // echo "Connected successfully";

    $result = $mysqli->query('SELECT * FROM `projects`');
    // $subquery = $mysql->query(`SELECT * FROM `tacnix`.`categories` WHERE `category_id` = %s`), $row[1];

    // Perform query
    if (!$result) {
      echo 'Error: '. $mysqli->error;
    } else {

      while ($row = $result -> fetch_row()) {
        // printf ('<div style="border: 1px solid #000; margin: 10px 50px; padding: 10px; display: block; background: #fff;"> <i>%s</i> <h3>%s</h3> <p>%s</p></div>', $row[1], $row[2], $row[3]);

        printf ('
        <div class="work__item pt-80 pb-80 border-bottom">
          <a href="?page=portfolio&getid=%s&project=%s&client=%s" class="effect-ajax" data-dsn-ajax="work-hover" data-img="<?=img?>/project/project_img.jpg"><span class="metas mb-25"><span> %s </span></span><h2 class="work__item-text"><span class="work__item-textinner title">%s</span></h2></a>
        </div>
        ', $row[1], $row[2], $row[3], $row[4], $row[3]);

      }



      // Free result set
      $result -> free_result();
    }
    $mysqli->close();
    ?>
  </div>

  <!-- ==========  next page  ========== -->
  <section class="next-page p-relative section-padding background-section">
    <div class="bg-circle-dotted"></div>
    <div class="bg-circle-dotted bg-circle-dotted-right"></div>
    <div class="container">
      <div class="c-wapp d-flex justify-content-between">
        <div class="d-flex flex-column">
          <p class="sub-heading line-shap line-shap-after "><span class="line-bg-left">Don't be a stranger</span></p>
          <h2 class="title mt-15">Wil je meer informatie of <br> heb je een vraag?</h2>
        </div>
        <div class="button-box d-flex justify-content-end align-items-center">
          <div><a href="?p=contact&from=portfolio" class="mt-30 effect-ajax dsn-button p-relative"><span class="dsn-border-rdu "></span>Contact Us</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== End next page ========== -->
</div>
<?php if (function_exists(_footer())) { _footer(); }

} else if ($page = 'portfolio' && !empty($getid)) {

  $con = mysqli_connect(host, user, pass, data);

  // connection checking...
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  // Perform query
  if ($result = mysqli_query($con, 'SELECT * FROM `projects`')) {

    // echo "Returned rows are: " . mysqli_num_rows($result);


    // Free result set
    mysqli_free_result($result);
  }

  mysqli_close($con);

  // switch (!$project && !$client == 0) {
  //   case 'value':
  //     // code...
  //     break;
  //
  //   default:
  //     // code...
  //     break;
  // }
}

?>
