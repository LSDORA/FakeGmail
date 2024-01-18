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
                            ";
                        }
                        
                       
                        else{
                            print("<h1> Tous les champs sont obligatoires!!!</h1>");
                        }
                    }
                    
                    
                  
                
                ?>
            </ul>
    <form class="createaccount" action="index.php" method="post">
        <h2 class="plus">Créer un compte</h2>
        <div class="formulaire">
            <label for="name">Nom *</label>
            <input type="text" placeholder="Votre nom" required name="nom" id="nom" >

            <label for="prenom">Prénom *</label>
            <input type="text" placeholder="Votre prénom" required name="prenom" id="prenom">

            <label for="mail">Mail * </label>
            <input type="email" placeholder="Votre adresse Mail" required name="mail" id="mail">

            <label for="password">Choisir votre mot de passe *</label>
            <input type="password" placeholder="Votre mot de passe" required name="password" id="password">
            <span id="passwordError" class="error-message"></span>
            
        </div>
        <div class="buttonform">
            <button class="blue" type="submit" value="Envoyer" onclick="validerCompte()">VALIDER VOTRE COMPTE</button>
        </div>
    </form>
  </div>
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

            var passwordInput = document.getElementById('password');
            var password = passwordInput.value.trim();

            var passwordErrorSpan = document.getElementById('passwordError');
            
            if (password.length < 8 ) {
                isValid = false;
                passwordInput.classList.add('error');
                passwordErrorSpan.textContent = "Utilisez 8 caractères ou plus pour votre mot de passe.";
            } else {
                passwordInput.classList.remove('error');
                passwordErrorSpan.textContent = "";
            }
    
            if (isValid) {
             changeSection('trlogin');
            }
        }
    </script>
    