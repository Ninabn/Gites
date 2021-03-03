<?php
session_start();
$title = "Gites";
ob_start();

?>

<div class="h-full">
    <img src="images/topnav.jpg" alt="">
</div>

<h2 class="font-bold text-5xl p-5">Ajouts récents</h2>

<?php
    require "Classes/Database.php";
    $gites = new Database();
    $gites->getLastGites();?>

<?php
$content = ob_get_clean();
require "Templates/template.php";