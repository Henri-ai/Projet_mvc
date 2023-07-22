<?php 
require_once __DIR__. '/../config/config.php';
require_once __DIR__. '/../models/User.php';
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
try {
    $user=User::get($id);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    if(empty($error)){
        $user=new User();
        $user->setUsersId($id);
        $user->setPassword($passwordHash);
        $user->updatePassword();
    header('location: /controllers/libraryUser-controller.php');
    SessionFlash::setMessage('Votre mot de passe a été modifié');
    }
    
}
} catch (\Throwable $th) {
    throw $th;
}





include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/users/update_password.php';
include __DIR__. '/../views/templates/footer.php';
