<?php
session_start();
$title = "Gites";
ob_start();
require "Templates/connexion.php";
?>

<div class="h-full">
    <img src="images/topnav.jpg" alt="">
    <form action="">

    <input class="bg-red-500 z-40" type="text">
    </form>
</div>

<h2 class="font-bold text-5xl p-5">Ajouts récents</h2>

<div class="md:flex md:grid md:grid-flow-col md:grid-cols-2 grid-rows-2">
    <?php $sql = "SELECT * FROM gites ORDER BY `id_gite` DESC LIMIT 4";
            foreach($bdd->query($sql) as $row){

            $date_formater = new DateTime($row['date_depart']); 
    ?>

    <div class="flex m-10">
            <img class="rounded" src="<?= $row['img_gite'] ?>" alt="">

            <div class="flex flex-col p-5">
                <p><?php echo $row['name_gite'] ?></p>
                <p><?php echo $row['description_gite'] ?> </p>
                <p><?php echo 'Prix : ' .$row['price_gite'] ?> €</p>
            </div>    
    </div>


<?php
}
?>




</div>
<?php
$content = ob_get_clean();
require "Templates/template.php";