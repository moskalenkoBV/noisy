<?php
$data_arr = [
    [
        "name" => "Stephane",
        "position" => "President",
        "image" => "Hugo.jpg",
        "category" => "Bureau",
    ],
    [
        "name" => "Nicolas",
        "position" => "Secretaire",
        "image" => "Richard.jpg",
        "category" => "Bureau",
    ],
    [
        "name" => "Yao",
        "position" => "Coach",
        "image" => "Hugo.jpg",
        "category" => "Encardrement",
    ],
    [
        "name" => "Hugo",
        "position" => "",
        "image" => "Richard.jpg",
        "category" => "Juges Arbitres",
    ],
    [
        "name" => "Gilles",
        "position" => "",
        "image" => "Hugo.jpg",
        "category" => "Juges Arbitres",
    ],
    [
        "name" => "Ali",
        "position" => "",
        "image" => "Richard.jpg",
        "category" => "Juges Arbitres",
    ],
];

?>

<h2 class="site-title">Bureau</h2>
<div class='bureau-people'>
    <?php
    foreach ($data_arr as $val) {
        if ($val['category'] == 'Bureau') {
            echo "<div class='people-photo'><img src='images/tmp/" . $val['image'] . "'/><br/>";
            echo "<a class='people-name'>" . $val['name'] . "</a><br/>";
            echo "<a class='people-position'>" . $val['position'] . "</a></div>";
        }
    }
    ?>
</div>

<h2 class="site-title">Encardrement</h2>
<div class='bureau-people'>
    <?php
    foreach ($data_arr as $val) {
        if ($val['category'] == 'Encardrement') {
            echo "<div class='people-photo'><img src='images/tmp/" . $val['image'] . "'/><br/>";
            echo "<a class='people-name'>" . $val['name'] . "</a><br/>";
            echo "<a class='people-position'>" . $val['position'] . "</a></div>";
        }
    }
    ?>
</div>

<h2 class="site-title">Juges Arbitres</h2>
<div class='bureau-people'>
    <?php
    foreach ($data_arr as $val) {
        if ($val['category'] == 'Juges Arbitres') {
            echo "<div class='people-photo'><img src='images/tmp/" . $val['image'] . "'/><br/>";
            echo "<a class='people-name'>" . $val['name'] . "</a><br/>";
            echo "<a class='people-position'>" . $val['position'] . "</a></div>";
        }
    }
    ?>
</div>