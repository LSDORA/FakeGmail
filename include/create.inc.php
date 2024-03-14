
    <div class="down">
    <h2 style=" text-align: center;">Une boîte de réception <br> entièrement repensée</h2>
    <h3 style=" text-align: center;">Avec les nouveaux onglets personnalisables, repérez imméditement les nouveaux messages et choissiez ceux que vous souhaittez lire en priorité</h3>
    <ul class="response-server">
            
        
    <form class="createaccount" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <h2 class="plus">Créer un compte</h2>
        <div class="formulaire">
        <?php
    include_once __DIR__."/UserManageur.class.php";
    ?>
            <label id="name">Nom *</label>
            <input type="text" placeholder="Votre nom" required name="nom" id="nom">
            <label id="prenomlb">Prénom *</label>
            <input type="text" placeholder="Votre prénom" required name="prenom" id="prenom">
            <label id="maillb">Mail * </label>
            <input type="email" placeholder="Votre adresse Mail" required name="login" id="login">
            <label id="passwordlb">Choisir votre mot de passe *</label>
            <input type="password" placeholder="Votre mot de passe" required name="password" id="password">
            <span id="passwordError" class="error-message"></span>
            
        </div>
        <div class="buttonform">
            <button class="blue" name="valider le compte" accesskey="d" aria-label="Valider votre compte"  type="submit" >Creer VOTRE COMPTE</button>
        </div>
    </form>
 
  </div>
       