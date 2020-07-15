<!DOCTYPE html>
<html>
<head>
<title>SILVER BLOG</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style/front-office.css">
<?php include("navigation.php"); ?>

</head>
<body>
    <h2>Contact</h2>
    <div class="formulaire">
        <form action="/mon formulaire" methode="post">
        <div>
            <input type="text" id="name" name="user_name" value="Nom prénom"/>
</div>
<div>
    <input type="e-mail" id="mail" name="user_mail" value="E-mail"/>
</div>
<div>
    <textarea id="msg" name="user_message" rows="10" cols="33">Message</textarea>
</div>
<div class="button">
    <button type="submit">Envoyer</button>
</div>
</form>
</div>




</body>
</html>