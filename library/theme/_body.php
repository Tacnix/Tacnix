<main class="main-root">
  <div id="dsn-scrollbar">
    <div class="main-content">
      <?php
      /**
      * About 01
      * Services 02
      * Portfolio 03
      * Blog 04
      * Contact 05
      */
      switch ($page) {
        case 'home':
            if (file_exists(pages . ds . 'home.php')) { include (pages . ds . 'home.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
        case 'about':
            if (file_exists(pages . ds . 'about.php')) { include (pages . ds . 'about.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
        case 'services':
            if (file_exists(pages . ds . 'services.php')) { include (pages . ds . 'services.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
        case 'portfolio':
            if (file_exists(pages . ds . 'portfolio.php')) { include (pages . ds . 'portfolio.php'); }
            else { if (file_exists(pages . ds . '404.php')) include (pages . ds . '404.php'); }

          break;
        case 'blog':
            if (file_exists(pages . ds . 'blog.php')) { include (pages . ds . 'blog.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
        case 'contact':
            if (file_exists(pages . ds . 'contact.php')) { include (pages . ds . 'contact.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
        default:
            if (file_exists(pages . ds . 'home.php')) { include (pages . ds . 'home.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      }
      ?>
    </div>
  </div>
  <?php if (function_exists(ContactFormModel())) { ContactFormModel(); } ?>
</main>
