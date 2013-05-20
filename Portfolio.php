<?php
include('classes.php');
$title = "Portfolio";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" class="cardholder">
    <?php
        portfolio::$view = $_GET['view'];
        if (portfolio::$view == "") {
            portfolio::$view = "All";
        }
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>