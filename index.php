<?php
	include_once "./include/controllers.inc.php";
?>
<!DOCTYPE html>
<html lang="<?= $_lang[0] ?>">
<?php
	require_once "./include/head.inc.php";
?>
<body>
    <header>
        <div class="change">
            <button onclick="" class="arrow"><img src="./asset/arrow.png" alt="" srcset=""></button>
        </div>
    </header>
<nav>
    <div class="logo">
        <img src="./asset/mail.png" height="40px" width="45px" alt="" srcset="">
        <h1 class="logog">Gmail</h1>
    </div>
    <div>
        <button type="button">POUR LES PROS</button>
        <button type="button" onclick="changeSection('login')">CONNEXION</button>
        <button type="button" onclick="changeSection('create')"  class="red">CREER UN COMPTE</button>
    </div>
</nav>
<section class="acceuil">
    <h1 class="white">Retrouvez la fluidité et la <br> simplicité de Gmail sur <br>tous vos appareil</h1>
    <button type="button" onclick="changeSection('create')" class="mainbutton red">CREER UN COMPTE</button>
  
</section>
<section class="create">
    <h2 style=" text-align: center;">Une boîte de réception <br> entièrement repensée</h2>
    <h3 style=" text-align: center;">Avec les nouveaux onglets personnalisables, repérez imméditement les nouveaux messages et choissiez ceux que vous souhaittez lire en priorité</h3>

    <form class="createaccount" action="" method="post">
        <h2 class="plus">Créer un compte</h2>
        <div class="formulaire">
            <label for="name">Nom *</label>
            <input type="text" placeholder="Votre nom" name="" id="">
            <label for="prenom">Prénom *</label>
            <input type="text" placeholder="Votre prenom" name="" id="">
            <label for="mail">Mail *</label>
            <input type="email" placeholder="Votre addresse Mail" name="" id="">
            <label for="password">Choisir votre mot de passe *</label>
            <input type="password" placeholder="Votre mot de passe" name="" id="">
        </div>
        <div class="buttonform">
            <button class="blue" onclick="" style=" text-align: center;" type="submit">VALIDER VOTRE COMPTE</button>
        </div>
    </form>
</section>
<section class="login">
    <h2 class="ted" style=" text-align: center;">Bienvenue dans votre espace Null</h2>
  

    <form class="loginaccount" action="" method="post">
        <h2 class="plus2">Connectez-vous à votre compte</h2>
        <div class="formulaire">
     
            <label for="mail">Mail *</label>
            <input type="email" placeholder="Votre addresse Mail" name="" id="">
            <label for="password">Choisir votre mot de passe *</label>
            <input type="password" placeholder="Votre mot de passe" name="" id="">
        </div>
        <div class="buttonform">
            <button class="blue" onclick="" style=" text-align: center;" type="button">CONNEXION A VOTRE COMPTE</button>
        </div>
    </form>
</section>
<script src="./js/app.js"></script>
</body>
</html>