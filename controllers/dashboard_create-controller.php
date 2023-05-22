<?php 
    require_once __DIR__. '/../config/config.php';
    define('STYLES', ['Action', 'Animation', 'Aventure', 'Comédie','Epouvante/Horreur','Drame','Documentaire','Espionnage','Famille','Fantastique','Guerre','Histoire','Musical','Policier','Romance','Science Fiction','Thriller','Western']);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // title------------------------------------------------------------------------------------------------
        $titleMovie = trim(filter_input(INPUT_POST, 'titleMovie', FILTER_SANITIZE_SPECIAL_CHARS));
        if (empty($titleMovie)){
            $error['titleMovie']='Veuillez saisir un titre de film';
        }
        //acteur------------------------------------------------------------------------------------------------
        $actor = filter_input(INPUT_POST,'actor',FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($actor)){
            $error['actor']='Veuillez saisir un acteur';
        }
        //réalisateur ------------------------------------------------------------------------------------------
        $director = filter_input(INPUT_POST,'director',FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($director)){
            $error['director']='Veuillez saisir un Réalisateur';
        }
        //annee de sortie----------------------------------------------------------------------------------------
        $releaseDate = filter_input(INPUT_POST,'releaseDate',FILTER_SANITIZE_NUMBER_INT);
        if (empty($releaseDate)){
            $error['releaseDate']='Veuillez saisir l\'année de sortie du film';
        }else { 
            $releaseDate=filter_var($releaseDate,FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/' . REGEX_DATE . '/')));
            if ($releaseDate==false){// si le pseudo ne correspond pas à la regex -> erreur
                $error['releaseDate'] = "Veuillez renseigner une année valide (ex : 2022)";
            }
        }
        // durée---------------------------------------------------------------------------------------------
        $duration = filter_input(INPUT_POST,'duration',FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($duration)){
            $error['duration']='Veuillez saisir la durée du film';
        }else {
            $duration=filter_var($duration,FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=> '/' . REGEX_DURATION . '/')));
            if ($duration==false){
                $error['duration']='Veuillez saisir une durée correct (ex : 2:30)';
            }
        }
        // style/categorie
        $selectedStyle = filter_input(INPUT_POST, 'style', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
        //synopsis
        $synopsis= trim(filter_input(INPUT_POST,'synopsis',FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($synopsis)){
            $error['synopsis']='Veuillez saisir le synopsis du film';
        }
        var_dump($synopsis);
    
}
























include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_create.php';
include __DIR__ .'/../views/templates/footer.php';
?>