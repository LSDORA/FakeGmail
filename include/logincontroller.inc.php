<?php
session_start();


$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur de la base de données
$motDePasse = ""; // Mot de passe de la base de données
$nomBaseDeDonnees = "secretbdd_user"; // Nom de la base de données


if ((isset($_POST["loginn"]) )){
$mail = $_POST['loginn'] ?? '';


}
if ((isset($_POST["passwordd"]) )){
$mdp = $_POST['passwordd'] ?? '';


}

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$mail = $_POST['loginn'] ?? '';
$mdp = $_POST['passwordd'] ?? '';



// Connexion  à la bdd
try {

$connexion = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motDePasse);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = $connexion->prepare("SELECT password FROM utilisateurs WHERE login = ?");
$requete->execute([$mail]);
$user = $requete->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($mdp, $user['password'])) {

  header("Location: home.php");
  exit();

} else {
echo "Email ou mot de passe incorrect.";


}
} catch (PDOException $e) {
echo "Erreur de connexion à la base de données"; 
}
}
else{
echo "première conditioj non satisfaite.";

}
?>


