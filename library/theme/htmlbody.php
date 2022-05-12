<main class="main-root">
  <div id="dsn-scrollbar">
    <div class="main-content">
      <?php
      switch ($page) {
      // Home 00
        case 'home':
            if (file_exists(pages . ds . 'homepage.php')) { include (pages . ds . 'homepage.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      // About 01
        case 'about':
            if (file_exists(pages . ds . 'about.php')) { include (pages . ds . 'about.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      // Services 02
        case 'services':
            if (file_exists(pages . ds . 'services.php')) { include (pages . ds . 'services.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      // Portfolio 03
        case 'portfolio':
            if (file_exists(pages . ds . 'portfolio.php')) {
              include (pages . ds . 'portfolio.php');

              // add database here using "while" loop and
              // then use template files in cases as per
              // the retreved database value of template.

              $MySQLiConnect = MySQLi_connect(MySQLi_Hostname, MySQLi_Username, MySQLi_Password, MySQLi_Database);

              // Check connection
              if (!mysqli_connect_errno()) {
                $logmsg = "MySQLi Database Connected successfully!";

                if ($MySQLiResult = mysqli_query($MySQLiConnect, 'SELECT * FROM `projects`')) {

                  if (!$MySQLiResult) {
                    $logmsg = 'Error: '. mysqli_error($MySQLiConnect);
                    echo 'Error: '. mysqli_error($MySQLiConnect);
                  } else if (!empty($MySQLiResult)) {
                    // Fetch one and one row
                    $MySQLiRow = mysqli_fetch_row($MySQLiResult);



                    // Numeric array
                    $MySQLiRow = mysqli_fetch_array($MySQLiResult, MYSQLI_NUM);
                    printf ("%s (%s)\n", $MySQLiRow[0], $MySQLiRow[1]);

                    // Associative array
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    printf ("%s (%s)\n", $row["Lastname"], $row["Age"]);

                    // Free result set
                    mysqli_free_result($result);






                    // **************************** START OF SWITCH CASE ****************************
                    switch ($template) {

                      case 'value':
                        // code...
                        break;

                      default:
                        // code...
                        break;
                    // **************************** END OF SWITCH CASE ****************************

                  }
                }
                mysqli_free_result($MySQLiResult);

              } else {
                $logmsg = "Failed to connect to MySQL: " . mysqli_connect_errno();
                die("Failed to connect to MySQL: " . mysqli_connect_errno());
                exit();
              }

              mysqli_close($MySQLiConnect);



              }
            }
            else { if (file_exists(pages . ds . '404.php')) include (pages . ds . '404.php'); }
          break;
      // Blog 04
        case 'blog':
            if (file_exists(pages . ds . 'blog.php')) { include (pages . ds . 'blog.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      // Contact 05
        case 'contact':
            if (file_exists(pages . ds . 'contact.php')) { include (pages . ds . 'contact.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      // Contact 06
        case 'policy':
            if (file_exists(pages . ds . 'policy.php')) { include (pages . ds . 'policy.php'); }
            elseif (file_exists(pages . ds . 'policy.php')) { include (pages . ds . 'policy.php'); }
          break;
      // Home -01
        default:
            if (file_exists(pages . ds . 'homepage.php')) { include (pages . ds . 'homepage.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
            // show blank page
          break;
      }
      ?>
    </div>
  </div>
  <?php if (function_exists(ContactFormModel())) { ContactFormModel(); } ?>

  <!-- Messenger Chat plugin Code -->
  <div id="fb-root"></div>

  <!-- Your Chat plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "105930064549205");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v13.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

</main>
