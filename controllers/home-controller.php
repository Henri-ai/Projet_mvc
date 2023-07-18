<?php
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();

require_once __DIR__.'/../models/Movie.php';
require_once __DIR__.'/../models/Style.php';
require_once __DIR__.'/../models/Movie_styles.php';

$styles=Style::getAll();
$movies=Movie::getAll();

$selectStyle=filter_input(INPUT_GET,'selectStyle',FILTER_SANITIZE_NUMBER_INT);
$searchs=Movie_styles::getByStyle($selectStyle);















include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/home.php';
include __DIR__ .'/../views/templates/footer.php';

?>