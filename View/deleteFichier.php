<?php 
if(isset($_POST['submit'])){
    $test->deleteDoc($_GET['iduser']);
    echo"Fichier Supprimé...";
//    echo "<script>setTimeout(function(){location.reload(); },3000);</script>";
}
$bdsqll = new PDO("mysql:host=localhost;dbname=crm", 'root', '');
$test = new ManagerFichier($bdsqll);
echo"<form method='post'>";
echo"<input type='submit' name='submit' class='button' value='Delete Document'>";
echo"</form>";


?>