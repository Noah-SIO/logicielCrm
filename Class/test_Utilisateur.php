<?php 
require_once('utilisateur.php');
$bdsqll = new PDO("mysql:host=localhost;dbname=mediatheque", 'root', '');
$test = new ManagerUtilisateur($bdsqll);
$test->SearchUserByType("nonoa");
///Romaric
$test = new Utilisateur("Martin", "Robert", "Rmartin", 1, "martin71", "martin@test.fr", 0606060606);
//$nom = $test -> getNom();
//echo $nom;
?>
<html>
    <form method="post">
            <label for="login">identifiant</label></br>
            <input type="text" name="login" id="login"></br>
            <label for="password"> Mot de passe</label></br>
            <input type="password" name="password"></br>
            <input type="submit" name="connection" id='connection'>  </br></br>
    </form>
</html>
<?php

$testManager = new ManagerUtilisateur();
if (isset($_POST['login'])){
    $testManager -> verifIdentifiant($_POST['login']);
}

?>