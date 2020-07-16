<?php
function clock() {
    for ($heures = 00; $heures < 24; $heures++) {

        for ($minutes = 00; $minutes < 60; $minutes++) {
            echo "$heures : $minutes<br>";
    }
    echo "<br>";     
    } 
    return;

}
clock();

?>