<?php
  $data_arr = [
    [
      "title" => "Homepage",
      "link" => "homepage.php",
      "image" => "main-slider2.jpg"
    ]
  ];

$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);

if ($basename == 'homepage') $tmp_url = "inc/blocks/main-slider__item.php";

?>
<section>
  <h2 class="assistive-title">Slider</h2>
  <div class="main-slider">
    <?php
      foreach($data_arr as $content) {
        includeFileWithVariables($tmp_url, $content);
      }
    ?>
  </div>
</section>