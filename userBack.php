<?php
session_start();
$title = "Gites";
ob_start();
require "Templates/connexion.php";
?>

<?php
$sql = "SELECT * FROM users";
foreach($bdd->query($sql) as $row){

$name =htmlspecialchars( $_POST['name_user']);
$pass =htmlspecialchars ($_POST['password_user']);

if (!empty($name) && !empty($pass)) {

    if($name === $row['name_user'] && $pass === $row['password_user']){

        session_start();
        $_SESSION['password'] = $row['password_user'];
        $_SESSION['name'] = $row ['name_user'];
        $_SESSION['id_concierge'] = $row ['id_user'];
        header('Location: http://localhost/Gites/');
        
    }else{
        echo "<a href='index.php' class='btn btn-danger'>Retour</a>";
    }
}else{
    echo "Les champs n'ont pas été remplit";
    echo "<a href='index.php' class='btn btn-danger'>Retour</a>";
}

}

?>

<?php
$content = ob_get_clean();
require "Templates/template.php";