<?php
session_start();
$title = "Gites";
ob_start();
?>


<?php
$content = ob_get_clean();
require "Templates/template.php";
