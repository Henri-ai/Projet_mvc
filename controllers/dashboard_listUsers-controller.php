<?php 
require_once __DIR__. '/../config/config.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();
$users_id=intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
$users=User::getAll();

if($users_id!=0){
    $userDelete=User::delete($users_id);
    SessionFlash::setMessage('Utilisateur supprimé ainsi que ses commentaires');
}








include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_listUsers.php';
include __DIR__ .'/../views/templates/footer.php';