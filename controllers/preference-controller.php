<?php 
require_once __DIR__. '/../config/config.php';
require_once __DIR__. '/../models/User.php';

SessionFlash::start();
$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
try {
    $user=User::get($id);
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
        
        if(empty($error)){
            $user=new User();
            $user->setUsersId($id);
            $user->setPseudo($updatePseudo);
            $user->updateProfil();
        }
        header('location: /controllers/libraryUser-controller.php');
        SessionFlash::setMessage('Votre profil à bien été mis à jour');
    }
    
} catch (\Throwable $th) {
    throw $th;
}
$user=User::get($id);
















include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/templates/preference.php';
include __DIR__. '/../views/templates/footer.php';


?>