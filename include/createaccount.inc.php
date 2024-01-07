<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];

    echo "Nom: " . $name . "<br>";
    echo "Prénom: " . $prenom . "<br>";
    echo "Mail: " . $mail . "<br>";
}
?>
