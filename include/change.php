<?php
function changeSection($sectionName) {
    $sections = array('acceuil', 'create', 'trlogin'); 
    foreach ($sections as $section) {
        echo "<section class='$section' style='z-index: 1; display: none;'> <?php
        include_once "./include/create.inc.php";
        ?></section>";
    }
    if ($sectionName == 'create') {
        echo "<section class='acceuil' style='z-index: 5; display: block;'>Contenu de la section d'accueil</section>";
    }
    echo "<section class='$sectionName' style='z-index: 5; display: block;'>Contenu de la section</section>";
}
?>
