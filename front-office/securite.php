<?php
session_start();

function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

function login($pdo)
{
    try{
        if (!empty($_POST['login']) && !empty($_POST['password'])){

            $login=$_POST['login'];
            $password=$_POST['password'];

            $requete=$pdo->query("SELECT passwordd
            FROM utilisateurs
            WHERE login='$login'");
            $res=$requete->fetchAll();

            if ($res){

                if($password == $res[0]['passwordd']){
                    echo "Bonjour ".$_POST['login']. " !";
                    echo '<br>';
                    echo 'Vous êtes connecté';
                    echo '<br>';
                    echo '<a href="http://localhost:8888/ISCC%202020/ISCC-2020-MyDevBlog/back-office/back-office.html"> Espace administrateur</a>';
                }
            }
            else{
                echo "<p>Mauvais couple identifiant / mot de passe.</p>";
                echo '<p><a href="http://localhost:8888/ISCC%202020/ISCC-2020-MyDevBlog/front-office/connexion.php"> Retour </a></p>';
            }
        }
    }
    catch(PDOException $e){
        echo "Login erreur".$e->getMessage();
    }
}

$pdo = connect_to_database();
login($pdo);
?>