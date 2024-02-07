<?php
session_start();
    
# retenir l'email de la personne connectée pendant 1 an
# retenir l'email de la personne connectée pendant 1 an
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Récupérer l'adresse e-mail du formulaire
    $email = $_POST["mail"];
    $nom = $_POST["mail"];
    $prenom = $_POST["mail"];
    $password = $_POST["mail"];

    # Définir le cookie avec une durée de vie de 30 jours (en secondes)
    setcookie("user_email", $email, time() + 30 * 24 * 60 * 60, "/");

    /*
    Rediriger l'utilisateur vers une autre page ou afficher un message de confirmation
    header("Location: index.php");
    exit();
    */
}


?>
<?php
include_once "./include/head.inc.php";
?>
<body>
<header>
           <?php
           include_once "./include/fleche.inc.php";
           ?>
</header>
<nav>
           <?php
           include_once "./include/nav.inc.php";
           ?>
</nav>
<section class="acceuil">
           <?php
           include_once "./include/acceuil.inc.php";
           ?>
</section>
<section class="create" id="create">
           <?php
           include_once "./include/create.inc.php";
           ?>
</section>
<script src="./js/app.js"></script>
</body>
<body>
    <section class="login">
            <?php
           include_once "./include/login.inc.php";
           ?>       
    </section>
    <section class="trlogin">
            <?php
           include_once "./include/trlogin.inc.php";
           ?>       
    </section>
</body>
<script src="./js/app.js"></script>
</html>
