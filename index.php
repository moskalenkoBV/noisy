<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>CSNOISYTT</title>

<link type="text/css" rel="stylesheet" media="all" href="css/screen.css">

<?php
  function includeFileWithVariables($fileName, $variablesArray) {
    extract($variablesArray); // arr with data
    include($fileName); // path to template
  };
?>

</head>
<?php
  $data_arr = [
    [
      "title" => "Homepage",
      "link" => "homepage.php",
      "img" => "homepage.jpg"
    ],
    [
      "title" => "Homepage",
      "link" => "homepage.php",
      "img" => "homepage.jpg"
    ],
  ];
  $tmp_url = "inc/blocks/preview__item.php";
?>
<body>
  <div class="preview">
    <div class="preview__header">
      <div class="container">
        <h1 class="preview__title">CSNOISYTT</h1>
      </div>
    </div>
    <div class="preview__content">
      <div class="container">
        <div class="preview__pages">
          <?php
            foreach($data_arr as $content) {
              includeFileWithVariables($tmp_url, $content);
            }
          ?>
        </div>
      </div>
    </div>
    <div class="preview__footer">
      <div class="container">
        <p>Moskalenko team! With <span class="text-danger">&#10084;</span>.</p>
      </div>
    </div>
  </div>
</body>
</html>

