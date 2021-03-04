<?php
require "Classes/Database.php";
session_start();
$title = "Gites : Créez un compte";
ob_start();

?>
<h1 class="flex justify-center text-3xl">Gestionnaire de gites</h1>

<a href="ajoutGite.php" class="bg-blue-500 rounded p-2 text-white ml-5 font-bold items-center"><i class="fa fa-plus fa-lg p-2" aria-hidden="true"></i>Ajouter</a>


<?php
$gite = new Database;
$gite->getGites();
if(isset($_POST["delete"])){
  $gite->deleteGites();
?>


<?php
}
$content = ob_get_clean();
require "Templates/template.php";