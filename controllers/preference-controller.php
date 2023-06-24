<?php 
require_once __DIR__. '/../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // pseudo-------------------------------------------------------------------------------------
    $updatePseudo = trim(filter_input(INPUT_POST, 'updatePseudo', FILTER_SANITIZE_SPECIAL_CHARS));

    if(empty($updatePseudo)) {// si input vide -> erreur
        $error["updatePseudo"] = "Vous devez renseigner un pseudo!!";
    } else {
        $validatePseudo=filter_var($updatePseudo, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_PSEUDO . '/')));
        if ($validatePseudo==false) {// si le pseudo ne correspond pas à la regex -> erreur
            $error["updatePseudo"] = "Le pseudo n'est pas au bon format !";
        }
    }
    // email-------------------------------------------------------------------------------------
    $updateEmail = filter_input(INPUT_POST, 'updateEmail', FILTER_SANITIZE_EMAIL); //Supprimez tous les caractères sauf les lettres, les chiffres et !#$%&'*+-=?^_`{|}~@.[].

    if (empty($updateEmail)) { // si input vide -> erreur
        $error['updateEmail'] = 'Veuillez saisir votre adresse mail';
    } else {
        $updateEmail = filter_var($updateEmail, FILTER_VALIDATE_EMAIL); //Vérifie si la valeur est une adresse e-mail valide.
        if ($updateEmail == false) { // si l'adresse mail n'est pas valide -> erreur
            $error['updateEmail'] = 'Veuillez saisir une adresse mail valide';
        }
    }
    // mot de passe + verif-----------------------------------------------------------------------
    $updatePassword= filter_input(INPUT_POST, 'updatePassword');
    $updatePasswordConfirm = filter_input(INPUT_POST, 'updatePasswordConfirm');

    if(empty($updatePassword) && empty($updatePasswordConfirm)) {// si l'input du password et de la confirmation du password est vide -> erreur
        $error['updatePassword'] ="Veuillez saisir un mot de passe";
        $error['updatePasswordConfirm'] ="Veuillez saisir un mot de passe";
    } else {
        if($updatePassword != $updatePasswordConfirm) {
            $error["updatePassword"] = "Les mots de passe ne correspondent pas";
            $error["updatePasswordConfirm"] = "Les mots de passe ne correspondent pas";
        }
        $passwordHash = password_hash($updatePassword, PASSWORD_DEFAULT);

    }
}















include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/templates/preference.php';
include __DIR__. '/../views/templates/footer.php';


?>