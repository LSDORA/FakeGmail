


   <h2 class="ted"  style=" text-align: center;">Bienvenue sur votre compte  <?php if (isset($prenom)) { echo htmlspecialchars(" , "+$prenom); } ?></h2>
        <h3 class="ted" style=" text-align: center;">Bienvenue sur votre compte</h3>
        <form class="loginaccount" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h2 class="plus2">Connectez-vous à votre compte</h2>
            <div class="formulaire">
            <div class="greenred">
            <?php
    include_once __DIR__."/logincontroller.inc.php";
    ?>
            </div>
                <label id="mail">Mail *</label>
                <input type="email" placeholder="Votre addresse Mail" required id="login" name='loginn'>
                <label id="password">Choisir votre mot de passe *</label>
                <input type="password" placeholder="Votre mot de passe" required id="password" name="passwordd">
            </div>
            <div class="buttonform">
            <button class="blue" name="valider le compte" accesskey="p" aria-label="Connexion à votre compte"  type="submit" >CONNEXION A VOTRE COMPTE</button>
        </div>
        </form>
        
    </section>
        