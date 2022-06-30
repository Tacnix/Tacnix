<!DOCTYPE html>
<html lang="<?=lang?>">
<?php
$logtime = date('Y-m-d h:i:sa');
if (file_exists(theme . ds . 'ThemeFunction.php'))
{ include (theme . ds . 'ThemeFunction.php'); }

// If some changes happen into siteinfo.php or siteinfo.json then page head section info must be change.
if (file_exists(theme . ds . 'htmlhead.php'))
{ include (theme . ds . 'htmlhead.php'); }

if ( isset($_GET['page']) ) {  $page = htmlspecialchars($_GET['page']); } else { $page = 'home'; }

?>
<body class="v-dark dsn-line-style dsn-effect-scroll dsn-cursor-effect dsn-ajax">
<?php
if (function_exists(preloader())) {preloader();}
if (function_exists(mainmenu())) {mainmenu();}

if (!empty($page) && isset($page)) { if (file_exists(theme . ds . 'htmlbody.php')) { include (theme . ds . 'htmlbody.php'); } }
else { if (file_exists(theme . ds . 'htmlbody.php')) { include (theme . ds . 'htmlbody.php'); } }
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
  <!-- GMap API Link: AIzaSyBT8M_IEzL_yNywNLYxvNcp4ej_Fp31O9w -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT8M_IEzL_yNywNLYxvNcp4ej_Fp31O9w&callback=initMap"></script>
  <script src="<?=js?>/custom.js"></script>
</body>
</html>
