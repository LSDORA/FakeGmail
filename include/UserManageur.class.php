<?php


class UserManager {

    static function insertUser() {
        require_once('config.php'); # Inclure le fichier de configuration de la base de données

        try {
            // Connexion à la base de données avec PDO
            $connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motDePasse);
        
            // Afficher les erreurs PDO
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                // Récupérer le login et le mot de passe du formulaire
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $login = $_POST["login"];
                $password = $_POST["password"];
        
                // Vérifier si l'utilisateur existe déjà dans la base de données
                $_requete_Verif = $connexion->prepare("SELECT id FROM utilisateurs WHERE login = ?");
                $_requete_Verif->bindParam(1, $login);
                $_requete_Verif->execute();
        
                if ($_requete_Verif->rowCount() > 0) {
                    // L'utilisateur existe déjà, afficher un message d'erreur
                    print '<p class="warning msg-alert">Cette adresse e-mail est déjà enregistrée. Choisissez une autre adresse e-mail.</p>';
                } 
                else 
                {
                    // L'utilisateur n'existe pas, procéder à l'insertion
                    if (!empty($login) && !empty($password) && filter_var($login, FILTER_VALIDATE_EMAIL)) {
                        $motDePasseHash = password_hash($password, PASSWORD_DEFAULT);
            
                        // Préparer la requête SQL pour insérer les données dans la base de données
                        $requete = $connexion->prepare("INSERT INTO utilisateurs (login, password, prenom, nom) VALUES (?, ?, ?, ?)");
                
                        // Binder les paramètres
                        $requete->bindParam(1, $login);
                        $requete->bindParam(2, $motDePasseHash);
                        $requete->bindParam(3, $prenom);
                        $requete->bindParam(4, $nom);
                       
                      
                
                        // Exécuter la requête
                        $requete->execute();
                    
                        header("Location: connexion.php");
                        exit();
        
                    } else {
                        print '<p class="warning msg-alert">Tous les champs sont obligatoires ou mail invalide</p>';
                    }
                }
        
                // Fermer la connexion
                $connexion = null;
            }
        } catch (PDOException $e) {
            echo '<p class="warning msg-alert">Erreur de connexion à la base de données : </p>' . $e->getMessage();
        }
    }
}

// Utilisation
UserManager::insertUser();
?>
