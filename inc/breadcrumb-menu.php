<?php
$data_arr = [
    "pageTitle" => "Test",
    "pageCategory" => "TestCategory"
];
?>

<div class="breadcrumb-container">
    <div class="breadcrumb-menu">
        <div class="page-title">
            <a><?php echo "$data_arr[pageTitle]" ?></a>
        </div>
        <div class="page-breadcrumb">
            <a href="#"><?php echo "$data_arr[pageCategory]" ?></a>
            <a> / <?php echo "$data_arr[pageTitle]" ?></a>
        </div>
    </div>
</div>