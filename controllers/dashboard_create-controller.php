<?php 
    require_once __DIR__. '/../config/config.php';
    require_once __DIR__. '/../models/Style.php';
    require_once __DIR__. '/../models/Movie.php';
    require_once __DIR__. '/../models/Movie_styles.php';
    
    $styles=Style::getAll();
    try {
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
                $error['releaseDate'] = "Veuillez renseigner une année de sortie valide (ex : 2022)";
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

        // picture----------------------------------------------------------------------------------------------

        $picture= filter_input(INPUT_POST,'picture');
        // if(empty($picture)){
        //     $error['picture']='Veuillez saisir une image au bon format';
        // }
        
        // style/categorie---------------------------------------------------------------------------------------
        $selectedStyle = filter_input(INPUT_POST, 'style', FILTER_SANITIZE_NUMBER_INT);
        if (empty($selectedStyle)){
            $error['style']='Veuillez cochez minimum une seul catégorie de film';
        }
        //synopsis-----------------------------------------------------------------------------------------------
        $synopsis= trim(filter_input(INPUT_POST,'synopsis',FILTER_SANITIZE_SPECIAL_CHARS));
        if(empty($synopsis)){
            $error['synopsis']='Veuillez saisir le synopsis du film';
        }
        // // Si il n'y a pas d'erreurs, on enregistre tout en une fois grâce aux transactions
        if (empty($error)) {

            $pdo = Database::getInstance();
            $pdo->beginTransaction();

             //**** HYDRATATION de l'objet Movie****/
            $movie=new Movie();
            $movie->setTitle($titleMovie);
            $movie->setNameActors($actor);
            $movie->setNameProducers($director);
            $movie->setMovieYear($releaseDate);
            $movie->setDuration($duration);
            $movie->setPicture($picture);
            $movie->setSynopsis($synopsis);
            // Enregistrement du film dans la bdd
            $infoMovieSaved = $movie->add();
            // Récupération du dernier id inséré en bdd
            $idMovies= $pdo->lastInsertId();
            //**** HYDRATATION de l'objet Movies_styles****/
            $style=new Movie_styles();
            $style->setStylesId($selectedStyle);
            $isStyleSaved=$style->add();

            if ($infoMovieSaved ===true && $isStyleSaved === true){
                $pdo->commit();// Valide la transaction et exécute toutes les requetes
            }else {
                $pdo->rollback();// Annulation de toutes les requêtes exécutées avant la levée de l'exception
            }
        }
}
    } catch (\Throwable $th) {
        throw $th;
    }




include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/dashboard/dashboard_create.php';
include __DIR__ .'/../views/templates/footer.php';
?>