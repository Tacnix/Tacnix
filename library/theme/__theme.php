<?php
if (file_exists(theme . ds . '__themeFunction.php'))
{ include (theme . ds . '__themeFunction.php'); }

// If some changes happen into siteinfo.php or siteinfo.json then page head section info must be change.
if (file_exists(theme . ds . '_head.php'))
{ include (theme . ds . '_head.php'); }

$page = htmlspecialchars($_GET['page']);
$projects = htmlspecialchars($_GET['get']);
?>
<body class="v-dark dsn-line-style dsn-effect-scroll dsn-cursor-effect dsn-ajax">
<?php
if (function_exists(preloader())) {preloader();}
if (function_exists(mainmenu())) {mainmenu();}

if ($page === TRUE) {
  if (file_exists(theme . ds . '_body.php'))
  { include (theme . ds . '_body.php'); }
}
elseif ($page == 'portfolio' && $projects == TRUE) {
  if (file_exists(pages . ds . '_projects.php'))
  { include (pages . ds . '_projects.php');  }
}
else {
  if (file_exists(theme . ds . '_body.php'))
  {include (theme . ds . '_body.php'); }
}
// As per query string pages have to change in the body section of the page.

if (function_exists(scrolltop())) { scrolltop(); }
if (function_exists(cursorpage())) { cursorpage(); }
if (function_exists(sociallinks())) { sociallinks(); }
?>
  <div class="dsn-paginate-right-page"></div>
  <div class="line-border-style w-100 h-100"></div>

  <script src="<?=js?>/jquery-3.1.1.min.js"></script>
  <script src="<?=js?>/plugins.min.js"></script>
  <script src="<?=js?>/tacnix.min.js"></script>
  <script src="<?=js?>/custom.js"></script>
</body>
