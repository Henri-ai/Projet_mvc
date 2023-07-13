<?php 

require_once __DIR__.'/../models/Movie.php';
require_once __DIR__.'/../models/Style.php';
require_once __DIR__.'/../models/Movie_styles.php';
require_once __DIR__. '/../helpers/SessionFlash.php';
SessionFlash::start();

$id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)); // je recupére l'id du film 

$movie=Movie::get($id);
$styles=Movie_styles::getByMovie($id);














include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/templates/detail.php';
include __DIR__ .'/../views/templates/footer.php';
?>