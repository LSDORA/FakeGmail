
<h2 class="ted"  style=" text-align: center;">Bienvenue sur votre compte <span>

<?php
if(isset($nom) && isset($prenom)){ # vérification des champs
                
    # vérification si le format du mail est correcte 
    if($nom && $prenom){
        echo strip_tags($nom)." ".strip_tags($prenom);
        
    }
    
    return false;
    
}


?>

</form></h2>
        <h3 class="ted" style=" text-align: center;">Bienvenue sur votre compte</h2>
    
        <form class="loginaccount" action="" method="post">
            <h2 class="plus2">Connectez-vous à votre compte</h2>
            <div class="formulaire">
            <div class="greenred">
                <p></p>
            </div>
                <label for="mail">Mail *</label>
                <input type="email" placeholder="Votre addresse Mail" required name="" id="mail1">
                <label for="password">Choisir votre mot de passe *</label>
                <input type="password" placeholder="Votre mot de passe" required name="" id="mdp2">
            </div>
            <div class="buttonform">
                <button class="blue" aria-label="Connexion à votre compte" name="connexion a son compte"   onclick="" style=" text-align: center;" type="button">CONNEXION A VOTRE COMPTE</button>
            </div>
        </form>
        