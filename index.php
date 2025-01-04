<?php
    require "libs/variables.php";
    require "libs/functions.php";

?>
    <?php include "partials/header.php"; ?>
    <?php include "partials/navbar.php"; ?>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <?php include "partials/menu.php"; ?>
            </div>
            <div class="col-9">
                <?php include "partials/title.php"; ?>
                <?php include "partials/kurs-listesi.php"; ?>
            </div>
        </div>
    </div>
    <?php include "partials/footer.php"; ?>