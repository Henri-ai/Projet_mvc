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

// tableau


?>