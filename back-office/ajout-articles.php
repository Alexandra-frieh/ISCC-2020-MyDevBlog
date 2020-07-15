<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ajout articles</title>
        

    </head>
<?php
function connect_to_database(){
    $servername ="localhost";
    $username="root";
    $password ="root";
    $databasename="mydevblog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return($pdo);
        echo"connexion";
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
function login ($pdo){
    try{ 
        $Titre=$_POST['Titre'];
        $Date=$_POST['Date'];
        $Auteur=$_POST['Auteur'];
        $Contenu=$_POST['Contenu'];
        $Extrait=$_POST['Extrait'];



        if ( !empty($Titre) && !empty($Date) && !empty($Auteur) && !empty($Contenu) && !empty($Extrait)){
            $Contenu=addslashes($Contenu);
            $Extrait=addslashes($Extrait);

            $sql="INSERT INTO
          Articles (Titre, Date, Auteur, Contenu, Extrait)
            VALUES('$Titre', '$Date', '$Auteur', '$Contenu', '$Extrait')";
            $pdo->exec($sql);
            echo '<p>Article ajouté à la base de données avec succès! </p>';
            echo '<p><a href="http://localhost:8888/ISCC%202020/ISCC-2020-MyDevBlog/back-office/back-office.php?page=ajout-articles"</a></p>';
            }
        }
        catch(PDOException $e){
            echo '<p> Erreur de publication</p>' .$e->getMessage();
        }
    }
$pdo = connect_to_database();
login($pdo);
?>
</html>
