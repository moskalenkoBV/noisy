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
        "image" => "partner1.jpg",
        "category" => "Encardrement",
    ],
    [
        "name" => "Hugo",
        "position" => "",
        "image" => "partner1.jpg",
        "category" => "Juges Arbitres",
    ],
    [
        "name" => "Gilles",
        "position" => "",
        "image" => "partner1.jpg",
        "category" => "Juges Arbitres",
    ],
    [
        "name" => "Ali",
        "position" => "",
        "image" => "partner1.jpg",
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

<?php

foreach ($data_arr as $val) {
    if ($val['category'] == 'Encardrement') {
        echo "<img src='images/tmp/" . $val['image'] . "'/><br/>";
        echo "<h3>" . $val['name'] . "</h3>";
        echo "<h3>" . $val['position'] . "</h3>";
    }
}

?>

    <h2 class="site-title">Juges Arbitres</h2>

<?php

foreach ($data_arr as $val) {
    if ($val['category'] == 'Juges Arbitres') {
        echo "<img src='images/tmp/" . $val['image'] . "'/><br/>";
        echo "<h3>" . $val['name'] . "</h3>";
        echo "<h3>" . $val['position'] . "</h3>";
    }
}
