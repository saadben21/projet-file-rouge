<?php
require_once "./database/database.php";
$connected = new PDO($dsn, $user_db, $pass_db);
$sql = "CREATE TABLE IF NOT EXISTS compteAdmin (
  id int(22)not null auto_increment,
  nom varchar(255) not null,
  prenom varchar(255) not null,
  adresse varchar(255) not null,
  email varchar(255) not null,
  password varchar(255) not null,
    PRIMARY KEY (`id`)
    );" ;
  $connected->exec($sql);
  echo "<p>vous ete connecter</p>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
  <h1>creé votre compte</h1>
    <form class="formulaire" action="#"method="post">
        <input type="text" name="nom"placeholder="saisir votre nom"require>
        <input type="text" name="prenom"placeholder="saisir votre prenom"require>
        <input type="text" name="adresse"placeholder="saisir votre adresse postale"require>
        <input type="email" name="email"placeholder="saisir votre email"require>
        <input type="password" name="password"placeholder="saisir votre password"require>
        <button type="submit" name="envoyer">envoyer</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['envoyer'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql ="INSERT INTO compteAdmin (nom, prenom, adresse, email, password) VALUES ('$nom', '$prenom', '$adresse', '$email', '$password');";
    $connected->exec($sql);
}
?>

<?php
// si les champs sont remplie alors on affiche le message "New record created successfully"
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && !empty($_POST['email']) && !empty($_POST['password'])){
  echo "<script>alert('votre compte à etais bien enregister');</script>"; 
}else{
  echo "<h3>veuiller remplire tous les champs vide</h3>";
  }

?>
<?php
?>