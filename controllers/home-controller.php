<?php
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();

require_once __DIR__.'/../models/Movie.php';
require_once __DIR__.'/../models/Style.php';

$styles=Style::getAll();
$movies=Movie::getAll();
// $movieByStyle=Movie_styles::getAll();






















include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/home.php';
include __DIR__ .'/../views/templates/footer.php';

?>