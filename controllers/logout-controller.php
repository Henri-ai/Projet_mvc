<?php 
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();

session_destroy();
header('location: /controllers/home-controller.php');
die;



?>