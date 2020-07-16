<html>
<head>
    <meta charset="utf-8">
    <title>T-Shirt php</title>
</head>
<body>
    <?php
    $nom_produit="T-Shirt simple";
    $couleur="Blanc";
    $prix="10,50";
    $disponible="true";
    $quantité="10";
    $cout=$prix*3;
    $couttotal=$prix*$quantité;

    echo"<h3>Le nom du produit est $nom_produit</h3>";
    echo"<h3>Il reste $quantité produits en stock</h3>";
    echo"<h3>Le produit $nom_produit est de couleur $couleur</h3>";

    echo"<h4> Acheter 3 produits couterait $cout</h4>";
    echo"<h4> Acheter la totalité des produits disponibles couterait $couttotal</h4>";
    echo"<h4> Si 3 produits sont vendus<h4>";

    if($disponible=="true"){
    echo"<p>Le produit $nom_produit est disponible en magasin </p>";
}
    else {
        echo"<p> Le produit $nom_produit n'est malheuresement plus disponible </p>";
    }
    
    if($quantite>=5) {
        echo"<p> Il reste $quantite produits en magasin</p>";
    }

    elseif($quantite<5 and $quantite>1) {
        echo"<p> Il ne reste plus que $quantite produits en magasin</p>";
    }

    elseif($quantite==1) {
        echo"<p> Il ne reste qu'un produit en magasin </p>";
    }

    elseif($quantite==0) {
        echo"<p> Il ne reste plus de produits en magasin</p>";

    }   
?>


</html>