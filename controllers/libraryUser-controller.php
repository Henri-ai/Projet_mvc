<?php 
require_once __DIR__ . '/../models/User.php';
SessionFlash::start();


    $user=$_SESSION['user'];








include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/users/libraryUser.php';
include __DIR__. '/../views/templates/footer.php';





?>