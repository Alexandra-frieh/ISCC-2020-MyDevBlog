<?php
function compter($maximum) {
    $compteur=0;
    while ($compteur<10) {
        $compteur++;
        echo"<p>compteur : $compteur </p>";
        
    } 
    return;

}
compter(10);

?>

<?php
function compter_for($maximum) 
 {
    for ($compteur=1; $compteur<=$maximum; $compteur++) {
        echo "+1 tour";
        echo "<p>compteur : $compteur</p>";
    }
    return;
}

compter_for(10);
?>