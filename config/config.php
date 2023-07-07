<?php 
require_once __DIR__.'/../helpers/connect.php';
require_once(__DIR__ . '/../helpers/SessionFlash.php');
SessionFlash::start();

define('DSN', 'mysql:host=localhost;dbname=biblio_flix');
define('USER', 'admin');
define('PASSWORD', 'HyA1]01K.Qpofu)G');



// regex formulaires
define('REGEX_PSEUDO',"^([a-zA-Z0-9-_]{2,36})$");
define('REGEX_DATE',"^(19|20)\d{2}$");
define('REGEX_DURATION',"^(([0-1]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?)$");// à modifier

//messages d'erreur
define('ERRORS', [
    0=>'Une erreur inconnue s\'est produite',
    1=>'Problème de connexion à la BDD',
    2=>'Erreur lors de la récupération de l\'utilisateur',
    3=>'Utilisateur non trouvé',
    4=>'Aucune mise à jour n\'a été effectuée',
    5=>'Utilisateur non mis à jour',

    
]);

//messages
define('MESSAGES', [
    1=>'Le profil a bien été mis à jour',
]);

//image
define('AUTHORIZED_IMAGE_FORMAT', ['image/jpeg', 'image/png']);

?>