
<?php
session_start();

include_once "./include/head.inc.php";
include_once __DIR__."/connexion.php";
?>
<body>
<header>
           <?php
           include_once "./include/fleche.inc.php";
           ?>
</header>

           <?php
           include_once "./include/nav.inc.php";
           ?>

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
</html>
