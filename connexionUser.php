<?php
session_start();
$title = "Gites";
ob_start();
require "Templates/connexion.php";
?>

<div class="mt-20">
<form action="userBack.php" method="post">

    <div class="mb-3 flex flex-col w-6/12 m-auto">
        <label class="font-bold">Nom d'utilisateur</label>
        <input type="text" class="border rounded p-2" aria-describedby="emailHelp" name="name_user" required>
    </div>
    <div  class="mb-3 flex flex-col w-6/12 m-auto">
        <label class="font-bold" for="exampleInputPassword1">Mot de passe</label>
        <input name="password_user" type="password" class="border rounded p-2" id="exampleInputPassword1" placeholder="Password" required>
    </div>
		<!--Footer-->
	<div class="flex justify-end pt-2 justify-center">
        <a href="http://localhost/Gites/" class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Quitter</a>
        <button type="submit" class="focus:outline-none px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-blue-400">Connexion</button>
    </div>
</form>
</div>


<?php
$content = ob_get_clean();
require "Templates/template.php";