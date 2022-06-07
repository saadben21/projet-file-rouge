<?php
require_once "database.php";
$connection = new PDO($dsn, $user_db, $pass_db);
$sql = "CREATE TABLE IF NOT EXISTS personne (
  id int(11) NOT NULL AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
  );" ;
  $connection->exec($sql);
echo 'vous etes connecter';
?>
<?php
if(isset($_POST['envoyer'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO personne (email, password) VALUES ('$email', '$password')";
    $connection->exec($sql);
    echo 'vous etes connecter';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#"method="post">
        <label for="email">entrée ici votre email</label>
        <input type="email" name="email">
        <label for="password">entrée ici votre password</label>
        <input type="password" name="password">
        <button type="submit" name="envoyer">envoyer</button>
    </form>
</body>
</html>
<?php
// verifier si le formulaire est rempli
if(isset($_POST['formulaire'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM personne WHERE email = '$email' AND password = '$password'";
    $result = $connection->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($row){
        echo 'vous etes connecter';
    }else{
        echo 'vous n\'etes pas connecter';
    }
}
?>
<?php



