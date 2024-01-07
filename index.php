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
<div  class="logo">
    <img onclick="changeSection('acceuil')"  src="./asset/mail.png" height="40px" width="45px" alt="" srcset="">
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
        <input type="text" placeholder="Votre nom" required name="name" id="name">
        <label for="prenom">Prénom *</label>
        <input type="text" placeholder="Votre prénom" required name="prenom" id="prenom">
        <label for="mail">Mail * <span class="gmail">@gmail.com</span></label>
        <input type="email" placeholder="Votre adresse Mail" required name="mail" id="mail">
        <label for="password">Choisir votre mot de passe *</label>
        <input type="password" placeholder="Votre mot de passe" required name="password" id="password">
        <span id="passwordError" class="error-message"></span>
        
    </div>
    <div class="buttonform">
        <button class="blue" type="button" onclick="validerCompte()">VALIDER VOTRE COMPTE</button>
    </div>
</form>
<script>
    function validerCompte() {
        var inputs = document.querySelectorAll('.createaccount input[required]');
        var isValid = true;

        inputs.forEach(function(input) {
            if (input.value.trim() === '') {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        });

        // Validation du mot de passe
        var passwordInput = document.getElementById('password');
        var password = passwordInput.value.trim();

        // Vérification des caractères spéciaux
  
        var passwordErrorSpan = document.getElementById('passwordError');
        
        if (password.length < 8 ) {
            isValid = false;
            passwordInput.classList.add('error');
            passwordErrorSpan.textContent = "Utilisez 8 caractères ou plus pour votre mot de passe.";
        } else {
            passwordInput.classList.remove('error');
            passwordErrorSpan.textContent = ""; // Efface le message d'erreur s'il n'y a pas d'erreur.
        }

        if (isValid) {
            // Tous les champs sont remplis et le mot de passe respecte les règles de sécurité
            changeSection('trlogin');
        }
    }
</script>

</section>
<section class="login">
<h2 class="ted" style=" text-align: center;">Bienvenue dans votre espace</h2>


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
<section class="trlogin">
<h2 class="ted" style=" text-align: center;">Bienvenue dans votre espace Aymerick</h2>


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