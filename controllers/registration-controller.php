<?php 
require_once __DIR__. '/../config/config.php';
require_once __DIR__. '/../models/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// pseudo-------------------------------------------------------------------------------------
$pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS));

if(empty($pseudo)){// si input vide -> erreur
    $error["pseudo"] = "Vous devez renseigner un pseudo!!";
}else { 
    $validatePseudo=filter_var($pseudo,FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_PSEUDO . '/')));
    if ($validatePseudo==false){// si le pseudo ne correspond pas à la regex -> erreur
        $error["pseudo"] = "Le pseudo n'est pas au bon format !";
    }
}
// email-------------------------------------------------------------------------------------
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //Supprimez tous les caractères sauf les lettres, les chiffres et !#$%&'*+-=?^_`{|}~@.[].

if (empty($email)) { // si input vide -> erreur
    $error['email'] = 'Veuillez saisir votre adresse mail';
} else {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL); //Vérifie si la valeur est une adresse e-mail valide.
    if ($email == false) { // si l'adresse mail n'est pas valide -> erreur
        $error['email'] = 'Veuillez saisir une adresse mail valide';
    }
}
// mot de passe + verif-----------------------------------------------------------------------
$password = filter_input(INPUT_POST, 'password');
$confirmPassword = filter_input(INPUT_POST, 'confirmPassword');

if(empty($password) && empty($confirmPassword)){// si l'input du password et de la confirmation du password est vide -> erreur
    $error['password'] ="Veuillez saisir un mot de passe";
    $error['confirmPassword'] ="Veuillez saisir un mot de passe";
}else{
    if($password != $confirmPassword){
    $error["password"] = "Les mots de passe ne correspondent pas";
    $error["confirmPassword"] = "Les mots de passe ne correspondent pas";
}
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
}
if (empty($error)) {
    $user= new User ();
    $user->setPseudo($pseudo);
    $user->setEmail($email);
    $user->setPassword($passwordHash);
    $verifEmail=$user->isExist();
    if ($verifEmail==false){
        $userSaved=$user->add();
        header('location: /controllers/login-controller.php');
        SessionFlash::setMessage('Inscription réussi !! Veuillez vous connecter.');
    }
    else {
        $error['email']='l\'adresse mail existe déja';
    }
    

}





}











include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/users/registration.php';
include __DIR__. '/../views/templates/footer.php';



?>