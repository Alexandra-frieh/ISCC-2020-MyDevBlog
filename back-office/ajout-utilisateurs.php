<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ajout utilisateurs</title>

    </head>
<?php
session_start();
function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion réussie";
        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
function login ($pdo){
    echo "<p> 1</p>";
    try{


            if (!empty($_POST['login']) && !empty($_POST['passwordd'])){
                echo "<p> 2</p>";
                $login=$_POST['login'];
                $password=$_POST['passwordd'];

                $requete=$pdo->query("SELECT login
                FROM utilisateurs");
                $res=$requete->fetchAll();
                $found = false;

                if ($res){
                    foreach($res as $user){
                        if ($user['login'] == $login) {
                            $found = true;
                        }
                    }

                    if(!$found){
                        echo "<p> 4</p>";
                        $sql="INSERT INTO utilisateurs (login, passwordd) VALUES('$login', '$password')";
                        $pdo->exec($sql);
                        echo '<p> Compte ajouté à la base de données.</p>';
                        echo '<p><a href="back-office.php?page=utilisateurs">Utilisateurs</a></p>';
                    } else{
                        echo "<p>Ce compte existe déjà.</p>";
                    }
                } else{
                    echo "<p>Ce compte n'a pas pu être enregistré dans la base de données. </p>";
                }
            }
        }
    catch(PDOException $e){
        echo "Login erreur" .$e->getMessage();

    }
}

$pdo= connect_to_database();
login($pdo);
?>
</html>
