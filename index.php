<?php
session_start();
$title = "Gites";
ob_start();
?>

<div class="h-screen">
    <img src="images/topnav2.jpg" alt="">
</div>

<?php
$content = ob_get_clean();
require "Templates/template.php";
