<head>
    <h1>SILVER BLOG</h1>


<link rel="stylesheet" href="./front-office.css">
</head>

 <header>
            <nav>
            <?php if ($_GET['page'] == 'accueil') : ?>
                <a href="page-accueil.php">Accueil</a>
                <?php else : ?>
                    <a href="./front.php?page=accueil">Accueil</a>
                <?php endif; ?>

        <?php if ($_GET['page'] == 'articles') : ?>
            <a href="page-articles.php">Articles</a>
<?php else : ?>
    <a href="./front.php?page=articles">Articles</a>
<?php endif; ?>

<?php if ($_GET['page'] == 'contact') : ?>
    <a href="page-contact.php">Contact</a>
    <?php else : ?>
        <a href="./front.php?page=contact">Contact</a>
    <?php endif; ?>

    <?php if ($_GET['page'] == 'connexion') : ?>
    <a href="connexion.php">Connexion</a>
    <?php else : ?>
        <a href="./front.php?page=connexion">Connexion</a>
    <?php endif; ?>

    </nav>
    </header>
    <body>
    <?php
    if ($_GET['page'] == 'accueil') {
        include('page-accueil.php');
    }
    elseif ($_GET['page'] == 'articles') {
        include('page-articles.php');
    }
    elseif ($_GET['page'] == 'article'){
        include('page-article-produits.php');
    }
    elseif ($_GET['page'] == 'contact') {
        include('page-contact.php');
    }
    elseif ($_GET['page'] == 'connexion')  {
        include('connexion.php');
    }
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
    <a href="https://www.linkedin.com/in/alexandra-frieh-419546195/"> Mon profil Linkedin</a>
   <br> <a href="https://github.com/Alexandra-frieh">Mon profil github
    <br><a href="./Jour8/EX_01/mini-site-routing.php">Mon mini-site</a>
   <br> <a href="./Jour4/vitrine-accueil.html">Mon site dédié au Summer Code Camp</a>
   <br> <a href="./Jour2/J-02/ex-02.html">Mon tout premier site</a>
   <br> <a href="./Jour3/mon-cv.html">Mon CV</a>
   <br> <a href="./Jour5/EX_03/t-shirt.php">T-Shirt</a>
   <br> <a href="./Jour6/EX_03/boucles-imbriquees.php">Boucles imbriquées</a>
   <br> <a href="./Jour6/EX_03/boucles-simples.php">Boucles simples</a>
   <br> <a href="./Jour6/EX_03/boucles-suites.php">Boucles suites</a>
   <br> <a href="./Jour6/EX_02/chaine.php">Chaines</a>
   <br> <a href="./Jour7/EX_01/commandes.php">Commandes</a>
   <br> <a href="./Jour7/EX_02/double-tableaux.php">Doubles tableaux</a>
   <br> <a href="./Jour7/EX_02/utiliser-objets.php">Utiliser des objets</a>
   <br> <a href="./Jour10/EX_02/afficher-produit.php">Afficher des produits</a>
   <br> <a href="./back-office.php">Espace admnistrateur </a>
</footer>
    </body>

