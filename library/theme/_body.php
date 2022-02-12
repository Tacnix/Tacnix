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
              // ?page=portfolio &getid=%s &project=%s &client=%s

              // $project = htmlspecialchars($_GET['project']);
              // $client = htmlspecialchars($_GET['client']);

              // $mysqli = new mysqli(host, user, pass, data);

              $con = mysqli_connect(host, user, pass, data);
              // Check connection
              if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
              }

              // Perform a query, check for error
              if (!mysqli_query($con, 'SELECT * FROM `projects`')) {
                echo ("Error description: " . mysqli_error($con));
              } else {
                $query = 'SELECT * FROM `projects`';
                $result = mysqli_query($query);
              }



              // Check connection
              // if ($mysqli->connect_error) { die("Failed to connect to MySQL: " . $mysqli->connect_error); }
              // $result = $mysqli->query('SELECT * FROM `projects`');

              // Perform query
              if (!$result) { echo 'Error: '. $mysqli->error; }
              else {

                if ($result = mysqli_query($con, $sql)) {
                  // Fetch one and one row
                  while ($row = mysqli_fetch_row($result)) {
                    printf ("%s (%s)\n", $row[0], $row[1]);
                  }
                  mysqli_free_result($result);
                }

                mysqli_close($con);

                
                // get only template id for loading template
                $row = $result -> fetch_row();
                $p_template =

                // Free result set
                $result -> free_result(); }

              $mysqli->close();

              switch (!$project && !$client == 0) {
                case 'value':
                  // code...
                  break;

                default:
                  // code...
                  break;
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
</main>
