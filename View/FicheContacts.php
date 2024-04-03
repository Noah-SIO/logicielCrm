<?php
$idFicheContact = $_GET['id']; // a modifier 
$contactManager = new Contact();
$utilisateur = new ManagerUtilisateur();
$listeContacts = $contactManager->getContactByID($idFicheContact);
foreach ($listeContacts as $contact) {
    echo "<ul>";
    echo "<li><strong>Conseiller :</strong> " . $utilisateur->GetUserById($contact->getIdCompte())[0]['nom'].", ". $utilisateur->GetUserById($contact->getIdCompte())[0]['prenom'] . "</li>";
    echo "<li><strong>Identifiant Entreprise:</strong> " . $contact->getIdEntreprise() . "</li>";
    echo "<li><strong>Date:</strong> " . $contact->getDate() . "</li>";
    echo "<li><strong>Moyen de Contact:</strong> " . $contact->getMoyenDeContact() . "</li>";
    echo "<li><strong>Demande:</strong> " . $contact->getDemande() . "</li>";
    echo "<li><strong>Réponse:</strong> " . $contact->getReponse() . "</li>";
    echo "</ul>";
    if ($_SESSION['droit'] == 2){
        echo "<a href='?action=modifFicheContact&id=".$idFicheContact."'><button>Modifier la fiche</button></a>";
    }
    
}
?>
