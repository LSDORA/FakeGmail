<?php
       session_start();
       const title = "Fake Gmail"; 
       $_css = "./css/style.css";
      
       $_version = phpversion();
       
       $_signature_server = $_SERVER["SERVER_SIGNATURE"];

    class User{
        public $_lang = ["fr","en","es"];
        public $_css = "./css/style.css";
        public $_tittle = "Fake Gmail";
        static function Agent(){
          return $_user_agent = $_SERVER["HTTP_USER_AGENT"];
        }   
        $prenom = valid_donnees($_POST["prenom"]);
        $nom = valid_donnees($_POST["nom"]);
        $mail = valid_donnees($_POST["mail"]);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        function valid_donnees($donnees){
          $donnees = trim($donnees);
          $donnees = stripslashes($donnees);
          $donnees = htmlspecialchars($donnees);
          return $donnees;

  }
    }

    $_user = new User();

    ?>
