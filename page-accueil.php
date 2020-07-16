<!DOCTYPE html>
<html>
<head>
<title>SILVER BLOG</title>
<meta charset="utf-8">
<link rel="stylesheet" href="./front-office.css">
</head>


<h2>MON PROJET</h2>

    <body>
<p>Bonjour ! Je m'appelle Alex, et je suis créatrice de bijoux à mon temps perdu.
<br>Mon projet est de vous partager les différents bijoux que j'ai crée. Ces bijoux sont bien évidemment fait main avec des matériaux de qualité.
    <br>Je posterai régulièrement mes nouvelles créations, et vous aurez bien évidemment la possibilité de commenter et partager les publications.
    <br>
    <br>
    <br>
  
<?php
        function connect_to_database(){
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $databasename = "mydevblog";

            try {
                $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return($pdo);

            }
            catch(PDOException $e) {
                echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();

            }
        }
        function recup_5_articles($pdo){
            $articles=$pdo->query("SELECT * FROM Articles")->fetchAll();

            foreach($articles as $article){
                echo '<h3>' .$article['Titre'].'</h3>';
                echo '<p>' .$article['Extrait'].'</p>';
                $number_article=$article['Numéro'];
                ?>
            
                <a href="front.php?page=article&Numéro=<?php echo $number_article?>">Lire l'article en entier.</a>
        
        
<?php

    }
}
$pdo=connect_to_database();
recup_5_articles($pdo);
?>

</body>
</html>