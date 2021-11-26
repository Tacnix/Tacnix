<main class="main-root">
  <div id="dsn-scrollbar">
    <div class="main-content">
      <?php
      switch ($page) {
      // Home 00
        case 'home':
            if (file_exists(pages . ds . 'home.php')) { include (pages . ds . 'home.php'); }
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
            if (file_exists(pages . ds . 'portfolio.php')) { include (pages . ds . 'portfolio.php'); }
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
            if (file_exists(pages . ds . 'home.php')) { include (pages . ds . 'home.php'); }
            elseif (file_exists(pages . ds . '404.php')) { include (pages . ds . '404.php'); }
          break;
      }
      ?>
    </div>
  </div>
  <?php if (function_exists(ContactFormModel())) { ContactFormModel(); } ?>
</main>
