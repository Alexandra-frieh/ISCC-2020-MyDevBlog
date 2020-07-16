<!DOCTYPE html>
<html>
<head>
<title>SILVER BLOG</title>
<meta charset="utf-8">
<h1> SILVER BLOG </h1>
<link rel="stylesheet" href="./front-office.css">
</head>

<header>
    

    <nav>
        <?php if($_GET['page'] == 'ajout utilisateurs') : ?>
            <a href="ajout-utilisateurs.php"> Ajout utilisateurs</a>
            <?php else : ?>
            <a href="back-office.php?page=ajout-utilisateurs">Ajout Utilisateurs</a>
            <?php endif; ?>
            <?php if($_GET['page'] == 'utilisateurs') : ?>
                <a href="utilisateurs.php">Utilisateurs</a>
                <?php else : ?>
                    <a href="back-office.php?page=utilisateurs">Utilisateurs</a>
                <?php endif; ?>

             <?php if($_GET['page'] == 'ajout articles') : ?>
                <a href="ajout-articles.php">Ajout articles</a>
              <?php else : ?>
          <a href="back-office.php?page=ajout-articles">Ajout articles</a>
              <?php endif; ?>
             
                </header>

    <?php 

    if($_GET)
    {
    if($_GET['page'] == 'utilisateurs'){
        echo '<h1>'.$title = 'Membres du site</h1>';
        include('utilisateurs.php');
    }
   if($_GET['page'] == 'ajout-utilisateurs'){
        echo '<h1>'.$title = 'Ajouter un utilisateur</h1>';
    ?>
        <form enctype="multipart/form-data" action="ajout-utilisateurs.php" method="POST">
                <input type="text" name="login" placeholder="Login"/><br/>
                <input type="password" name="passwordd" placeholder="Password"/><br/>
                <input type="submit" name="submit" value="Envoyer"/><br/>
        </form>
        <?php
        include('ajout-utilisateurs.php');
    }
        
        if($_GET['page'] == 'ajout-articles'){
    echo '<h1> Ecrivez votre article ! </h1>';
    ?>
    
    <form enctype="multipart/form-data" action="ajout-articles.php" method="POST">
    <p>Titre de l'article : <input type="text" name="Titre" placeholder="Ex : Mes nouvelles créations."/></p><br/>
    <p>Date de publication : <input type="datetime-local" name="Date" placeholder="Ex : 15/07/2020"/></p><br/>
    <p>Auteur : <input type="text" name="Auteur" placeholder="Ex : Alex Frieh"/></p><br/>
    <textarea id="Contenu" name="Contenu" rows="30" cols="100">Contenu de l'article</textarea><br/>
    <textarea id="Extrait" name="Extrait" rows="20" cols="100">Extrait de l'article</textarea><br/>
    <input type="submit" name="submit" value="Envoyer"/><br/>

</form>

<?php

    include('ajout-articles.php');
}

}
?>
