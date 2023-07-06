<?php 
require_once __DIR__. '/../config/config.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__. '/../helpers/SessionFlash.php';
    SessionFlash::start();
$users=User::getAll();








include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_listUsers.php';
include __DIR__ .'/../views/templates/footer.php';