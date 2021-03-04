<?php
require "Classes/Database.php";
session_start();
$title = "Gites : Créez un compte";
ob_start();

?>

<h1  class="flex justify-center font-bold text-3xl">Ajouter un nouveau gite</h1>


<div class="">

    <form action="" method="POST"> 
        
        <div class="w-6/12 m-auto font-bold mt-14">
        
            <div class="flex flex-col">
                <label for="">Nom du gites</label>
                <input name="name" class="border border-black rounded p-2 mb-5" type="text">
            </div>
            <div class="flex flex-col">
                <label for="">Description</label>
                <input name="description" class="border border-black rounded p-2 mb-5 " type="text">
            </div>
            <div class="flex flex-col">
                <label for="">Image</label>
                <input name="img" class="border border-black rounded p-2 mb-5" type="text">
            </div>
            <div class="flex flex-col">
                <label for="">Prix (nuit)</label>
                <input class="border border-black rounded p-2 mb-5" type="text">
            </div>
            <div class="flex flex-col">
                <label for="">Nombre de chambres</label>
                <input class="border border-black rounded p-2 mb-5" type="text">
            </div>
            <div class="flex flex-col">
                <label for="">Nombre de salle de bain</label>
                <input class="border border-black rounded p-2 mb-5" type="text">
            </div>
            <div class="flex flex-col">
                <label for="">Catégorie</label>
            <select class="border border-black rounded p-2 mb-5">  
                <option value="">--Choisir une catégorie--</option>
                <option value="1">Chambre d'hotes</option>
                <option value="2">Maison</option>
                <option value="3">Appartement</option>
            </select>

            </div>
            <button class="bg-blue-600 hover:bg-blue-500 p-2 rounded text-white mb-10" type="submit">Ajouter</button>
            <a href="gestionnaire.php" class="bg-red-600 hover:bg-red-500 p-2 rounded text-white" type="submit">Retour</a>
        </div>

    </form>

</div>



<?php
$content = ob_get_clean();
require "Templates/template.php";