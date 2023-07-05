<?php 
require_once __DIR__. '/../config/config.php';
require_once __DIR__. '/../models/Style.php';
require_once __DIR__. '/../models/Movie.php';
$styles=Style::getAll();








include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_update.php';
include __DIR__ .'/../views/templates/footer.php';