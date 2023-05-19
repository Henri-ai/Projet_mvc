<?php 
    
    define('STYLES', ['Action', 'Animation', 'Aventure', 'Comédie','Epouvante/Horreur','Drame','Documentaire','Espionnage','Famille','Fantastique','Guerre','Histoire','Musical','Policier','Romance','Science Fiction','Thriller','Western']);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedStyle = filter_input(INPUT_POST, 'style', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

    
}
























include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_create.php';
include __DIR__ .'/../views/templates/footer.php';
?>