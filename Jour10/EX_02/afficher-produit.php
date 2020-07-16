<?php

function connect_to_database() {
    $severname="localhost";
    $username="root";
    $password="root";
    $databasename="BaseTest01";


try{
    $pdo= new PDO("mysql:host=$severname;dbname=$databasename",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Vous êtes connecté";
    return  $pdo;
}
catch(PDOException $e) {
    echo "Vous n'êtes pas connecté".$e->getMessage();
}
}


$pdo=connect_to_database();
$query=$pdo->query("SELECT * FROM Produit");
$user=$query->fetch();

$users=$pdo->query("SELECT * FROM Produit")->fetchAll();

echo'<ul>';
foreach($users as $user){
   echo'
    <li>'.$user['Nom'].'</li>';
    

}
echo'</ul>';

?>