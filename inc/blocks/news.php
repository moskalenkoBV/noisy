<?php
  $data_arr = [
    [
      "title" => "news1",
      "link" => "https://facebook.com",
      "short" => "Deux de nos meilleurs jeunes, Paul 
      BORGNON et Quentin LADAIQUE, 
      ont participé dimanche dernier au 
      Centre de Perfectionnement",
      "image" => "news1.jpg"
    ],
    [
      "title" => "news1",
      "link" => "https://facebook.com",
      "short" => "Deux de nos meilleurs jeunes, Paul 
      BORGNON et Quentin LADAIQUE, 
      ont participé dimanche dernier au 
      Centre de Perfectionnement",
      "image" => "news1.jpg"
    ],
    [
      "title" => "news1",
      "link" => "https://facebook.com",
      "short" => "Deux de nos meilleurs jeunes, Paul 
      BORGNON et Quentin LADAIQUE, 
      ont participé dimanche dernier au 
      Centre de Perfectionnement",
      "image" => "news1.jpg"
    ],
  ];
  $tmp_url = "inc/blocks/news__item.php";
?>
<section class="section-padding">
  <div class="container">
    <h2 class="site-title">les dernières nouvelles</h2>
    <div class="news">
      <?php
        foreach($data_arr as $content) {
          includeFileWithVariables($tmp_url, $content);
        }
      ?>
    </div>
  </div>
</section>