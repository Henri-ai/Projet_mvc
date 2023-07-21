<?php 
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();
include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_home.php';
include __DIR__ .'/../views/templates/footer.php';
?>