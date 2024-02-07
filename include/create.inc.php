    <div class="down">
    <h2 style=" text-align: center;">Une boîte de réception <br> entièrement repensée</h2>
    <h3 style=" text-align: center;">Avec les nouveaux onglets personnalisables, repérez imméditement les nouveaux messages et choissiez ceux que vous souhaittez lire en priorité</h3>
    <ul class="response-server">
            
            <?php
              # test de vérification
    
                if(isset($_POST['nom']) && isset($_POST['prenom'])){
                        if($_POST['nom'] && $_POST['prenom']){
                            echo "<li>".strip_tags($_POST['nom'])."</li>
                            <li>".strip_tags($_POST['prenom'])."</li>
                            <li>".strip_tags($_POST['mail'])."</li>
                            <li>".password_hash($_POST['password'], PASSWORD_DEFAULT)."</li>
                            ";
                            header("Location: connexion.php");
                         
                            
                        
                        }
                        
                       
                        else{
                            print("<h1> Tous les champs sont obligatoires!!!</h1>");
                        }
                    }
                ?>
            </ul>
           
    <form class="createaccount" action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2 class="plus">Créer un compte</h2>
        <div class="formulaire">
            <label for="name">Nom *</label>
            <input type="text" placeholder="Votre nom" required name="nom" id="nom">
            <label for="prenom">Prénom *</label>
            <input type="text" placeholder="Votre prénom" required name="prenom" id="prenom">
            <label for="mail">Mail * </label>
            <input type="email" placeholder="Votre adresse Mail" required name="mail" id="mail2">
            <label for="password">Choisir votre mot de passe *</label>
            <input type="password" placeholder="Votre mot de passe" required name="password" id="password">
            <span id="passwordError" class="error-message"></span>
            
        </div>
        <div class="buttonform">
        <input class="blue" type="submit" class="btn btn-primary" value="Envoyer">        </div>
    </form>
  </div>
       