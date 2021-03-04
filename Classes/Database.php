<?php

class Database{

    public function getPDO(){
        $user = "root";
        $pass = "";
        try{
            $db = new PDO("mysql:host=localhost;dbname=gites;charset=utf8", $user, $pass);
            return $db;
        }catch (PDOException $e){
            echo "Erreur de connexion : " .$e->getMessage();
        }
    }




    public function newUser(){
        $db = $this->getPDO();        

            $name =htmlspecialchars($_POST['name_new_user']);
            $password = htmlspecialchars($_POST['password_new_user']);

            $sql = "INSERT INTO users (password_user, name_user)
            VALUES ('$password','$name')";

            $db->exec($sql);
            
            
            header('refresh:2;url=http://localhost/Gites/');

    }





        public function getLastGites(){
            $db = $this->getPDO();
    
            $sql = $db->query ("SELECT * FROM gitesinfo ORDER BY `id_gite` DESC LIMIT 10");
    ?>
    
    <div class="md:flex md:grid md:grid-flow-col md:grid-cols-2 grid-rows-2">
    
   
        <?php 
                foreach($sql as $row){
    
                $date_formater = new DateTime($row['date_depart']); 
        ?>
    
        <div class="flex m-auto my-5">
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
        }




    
        public function userConnexion(){
            $db = $this->getPDO();


                    $sql = "SELECT * FROM users";
                    

                    $name =htmlspecialchars( $_POST['name_user']);
                    $pass =htmlspecialchars ($_POST['password_user']);

                    if (!empty($name) && !empty($pass)) {

                        if($name === $row['name_user'] && $pass === $row['password_user']){

                    session_start();
                    $_SESSION['password'] = $row['password_user'];
                    $_SESSION['name'] = $row ['name_user'];
                    $_SESSION['id_concierge'] = $row ['id_user'];
                    header('refresh:2;url=http://localhost/Gites/');
                    echo $_SESSION['name'];
                            
            }else{
                echo "<p>Mauvais identifiants</p>";
                }
            }else{
                echo "Les champs n'ont pas été remplit";
                }

        }





        public function getGites(){
            $db = $this->getPDO();
    
            $sql = $db->query ("SELECT * FROM gitesinfo ORDER BY `id_gite`");
    ?>
    
    
        <?php 
                foreach($sql as $row){
    
                $date_formater = new DateTime($row['date_depart']); 
        ?>
    
        <div class="flex flex-col md:flex-row m-10 md:w-9/12 mx-auto ">
                <img class="rounded w-6/12 md:w-4/12 m-auto md:m-5" src="<?= $row['img_gite'] ?>" alt="">
    
                <div class="flex flex-col p-5">
                    <p class="font-bold"><?php echo $row['name_gite'] ?></p>
                    <p><?php echo $row['description_gite'] ?> </p>
                    <p><?php echo 'Prix : ' .$row['price_gite'] ?> €</p>


                    <div class="flex text-white ">

                    <form action="gestionnaire.php" method="POST">
                    
                        <button value="<?= $row['id_gite'] ?>" type="submit" name="delete" class="bg-red-500 m-3 rounded font-bold p-2 ">Supprimer <i class="fa fa-trash fa-lg p-2" aria-hidden="true"></i></button>

                        <button type="submit" class="bg-yellow-500 m-3 rounded font-bold p-2">Détails <i class="fa fa-info fa-lg p-2" aria-hidden="true"></i></button>  
                        <button type="submit" class="bg-green-500 m-3 rounded font-bold p-2">Metter à jour <i class="fa fa-pencil-square-o fa-lg p-2" aria-hidden="true"></i></button>
                    </form>
                    </div>

                </div>  
                
        </div>
    
    <?php
            }
?>
     

<?php
        }




        public function deleteGites(){
            $db = $this->getPDO();
            $id = $_POST['delete'];
            var_dump($_POST['delete']);

           
            $sql = "DELETE FROM gitesinfo WHERE id_gite = $id";

            var_dump($sql);
            $db->exec($sql);
            //$db = null;
            
            

                    }




                    
        public function addGites(){
            $db = $this->getPDO();

            $name =htmlspecialchars($_POST['']);
            $description = htmlspecialchars($_POST['']);
            $image = htmlspecialchars($_POST['img']);
            $price = htmlspecialchars($_POST['']);
            $room = htmlspecialchars($_POST['']);
            $sdb = htmlspecialchars($_POST['']);

           
            var_dump($name);


            $sql = "INSERT INTO gitesinfo (name_gite, description_gite, image_gite, price_gite, nbr_chambre, nbr_sdb )
            VALUES ('$name', '$description', '$image', '$price', '$room', '$sdb')";

            $bdd->exec($sql);
            
            header('Location: http://localhost/gites/');
                    }

}

