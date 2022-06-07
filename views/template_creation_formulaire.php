<?php
require_once ($_SERVER ['DOCUMENT_ROOT'].'/filerouge/database/database.php');
require_once($_SERVER ['DOCUMENT_ROOT'].'/filerouge/models/utilisateur.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/filerouge/views/utilisateur.css">
    <title>Document</title>
</head>
<body>
<!-- creation compte -->
<div class="creationCompte">
        <h1>Création de compte</h1>
        <form action="" method="post">
            <div class="formulaire">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="formulaire">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div class="formulaire">
                <label for="adressePostale">Adresse postale</label>
                <input type="text" name="adressePostale" id="adressePostale" required>
            </div>
            <div class="formulaire">
                <label for="adresseEmail">Adresse email</label>
                <input type="email" name="adresseEmail" id="adresseEmail" required>
            </div>
            <div class="formulaire">
                <label for="motDePasse">Mot de passe</label>
                <input type="password" name="motDePasse" id="motDePasse" required>
            </div>
            <div class="formulaire">
                <label for="dateNaissance">Date de naissance</label>
                <input type="date" name="dateNaissance" id="dateNaissance" required>
            </div>
            <div class="formulaire">
                <label for="identifiant">Identifiant</label>
                <input type="text" name="identifiant" id="identifiant" required>
            </div>
            <div class="formulaire">
                <button type="submit" name="save">crée votre compte</button>
            </div>
        </form>
</body>
</html>
<?php
//on verifie si le formulaire a ete envoyé
if(isset($_POST['save'])){
    //on verifie si les champs sont vides
    if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['adressePostale']) || empty($_POST['adresseEmail']) || empty($_POST['motDePasse']) || empty($_POST['dateNaissance']) || empty($_POST['identifiant'])){
        echo '<script>alert("Veuillez remplir tous les champs")</script>';
    }else{
        //on verifie si les champs sont valides
        if(!preg_match("/^[a-zA-Z ]*$/",$_POST['nom']) || !preg_match("/^[a-zA-Z ]*$/",$_POST['prenom'])){
            echo '<script>alert("Veuillez entrer un nom et un prénom valide")</script>';
        }else{
            //on verifie si l'adresse email est valide
            if(!filter_var($_POST['adresseEmail'], FILTER_VALIDATE_EMAIL)){
                echo '<script>alert("Veuillez entrer une adresse email valide")</script>';
            }else{
                //on verifie si le mot de passe est valide
                if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/",$_POST['motDePasse'])){
                    echo '<script>alert("Veuillez entrer un mot de passe valide")</script>';
                }else{
                    //on verifie si l'identifiant est valide
                    if(!preg_match("/^[a-zA-Z0-9]*$/",$_POST['identifiant'])){
                        echo '<script>alert("Veuillez entrer un identifiant valide")</script>'; 
                    }else{
                        echo '<script>alert("Votre compte a bien été crée")</script>';
                    }
                }
            }
        }   
    }
}
function create($nom, $prenom, $adressePostale, $adresseEmail, $motDePasse, $dateNaissance, $identifiant){
    $pdo = pdo_connect();
    $query = $pdo->prepare("INSERT INTO utilisateur(nom, prenom, adressePostale, adresseEmail, motDePasse, dateNaissance, identifiant) VALUES(:nom, :prenom, :adressePostale, :adresseEmail, :motDePasse, :dateNaissance, :identifiant)");
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':adressePostale', $adressePostale);
    $query->bindParam(':adresseEmail', $adresseEmail);
    $query->bindParam(':motDePasse', $motDePasse);
    $query->bindParam(':dateNaissance', $dateNaissance);
    $query->bindParam(':identifiant', $identifiant);
    $query->execute();
}
?>