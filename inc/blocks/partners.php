<?php
  $data_arr = [
    [
      "title" => "news1",
      "link" => "https://facebook.com",
      "image" => "partner1.jpg"
    ],
    [
      "title" => "news2",
      "link" => "https://facebook.com",
      "image" => "partner2.jpg"
    ],
    [
      "title" => "news3",
      "link" => "https://facebook.com",
      "image" => "partner3.jpg"
    ],
    [
      "title" => "news4",
      "link" => "https://facebook.com",
      "image" => "partner4.jpg"
    ],
    [
      "title" => "news5",
      "link" => "https://facebook.com",
      "image" => "partner3.jpg"
    ],
    [
      "title" => "news6",
      "link" => "https://facebook.com",
      "image" => "partner2.jpg"
    ],
  ];
  $tmp_url = "inc/blocks/partners__item.php";
?>
<section class="section-padding">
  <h2 class="site-title">Nos partenaires</h2>
  <div class="partners">
    <div class="container">
      <div class="partners__wrap owl-carousel">
        <?php
          foreach($data_arr as $content) {
            includeFileWithVariables($tmp_url, $content);
          }
        ?>
      </div>
    </div>
  </div>
</section>