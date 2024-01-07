<?php
       const title = "Fake Gmail"; /* constante */
       $_css = "./css/style.css";
      
       $_version = phpversion();
       
       $_signature_server = $_SERVER["SERVER_SIGNATURE"];

    class User{
        public $_lang = ["fr","en","es"];
        public $_css = "./css/style.css";

        static function Agent(){
          return $_user_agent = $_SERVER["HTTP_USER_AGENT"];
        }   
    }

    $_user = new User();

    ?>
