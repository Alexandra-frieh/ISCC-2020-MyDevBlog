<?php
function connect_to_database()
{
    $servername = "localhost";
    $username = "root";
    $pass = "root";
    $databasename = "mydevblog";

    try
    {
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';

        return($pdo);
    }
    catch(PDOException $e)
    {
        echo "Erreur :". $e->getMessage();
    }

}


function afficher_utilisateur($pdo)
{
$query=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

echo '<ul>';
foreach($query as $user)
{
    echo '<li><strong>Login : </strong>'.$user['login'].'</li><br/><strong>Mot de passe : </strong>'.$user['passwordd'].'';
    echo '<br/>';

?>
<br/>
<form method="post" action="supprimer-utilisateur.php?id=<?php echo $user['id']?>">
<button type="submit" name="bouton_suppr">Supprimer l'utilisateur</button>
</form>


<?php
echo '<ul>';
}
}

$pdo = connect_to_database();
afficher_utilisateur($pdo);

?>