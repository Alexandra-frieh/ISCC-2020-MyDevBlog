<?php
$historique_commandes  = array(5.49, 9.99, 5.49, 15.99, 25);

function afficher_commandes($historique_commandes) {
    foreach($historique_commandes as $value) {
        echo "<p> Une commande de $value euros à été reçue. </p>";
     
    }
    $array_sum= array_sum($historique_commandes);
    echo "Le total des commandes est de $array_sum euros.";
}


?>
<?php
afficher_commandes($historique_commandes);
?>