<meta charset="utf-8" />
<title>Noisy</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="shortcut icon" href="favicon.ico"> -->
<!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!-- Theme specific styles -->
<link type="text/css" rel="stylesheet" media="all" href="css/owl.carousel.css?v=<?php echo mt_rand(1, 9999999) ?>">
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css?v=<?php echo mt_rand(1, 9999999) ?>">
<!-- Theme specific styles -->


<!-- Slice only jQuery update emulation -->
<script src="js/jquery.js"></script>
<!-- Slice only Query update emulation -->


<!-- Third party libraries -->
<script src="js/svgxuse.js?v=<?php echo mt_rand(1, 9999999) ?>"></script>
<script src="js/modernizr.js?v=<?php echo mt_rand(1, 9999999) ?>"></script>
<script src="js/owl.carousel.min.js?v=<?php echo mt_rand(1, 9999999) ?>"></script>
<!-- Third party libraries -->

<!-- Scripts -->
<!-- <script src="js/main-slider.js?v=<?php echo mt_rand(1, 9999999) ?>"></script> -->
<script src="js/partners.js?v=<?php echo mt_rand(1, 9999999) ?>"></script>
<script src="js/header.js?v=<?php echo mt_rand(1, 9999999) ?>"></script>
<script src="js/map.js?v=<?php echo mt_rand(1, 9999999) ?>"></script>
<!-- Scripts -->

<?php
/* Slice only livereload injection */
if (php_sapi_name() == 'cli-server') {
  function getRealHost(){
    list($realHost,)=explode(':',$_SERVER['HTTP_HOST']);
    return $realHost;
  }
  echo '<script src="//' . getRealHost() . ':35729/livereload.js?snipver=1" type="text/javascript"></script>';
}
?>

<?php
  function includeFileWithVariables($fileName, $variablesArray) {
    extract($variablesArray); // arr with data
    include($fileName); // path to template
  };
?>