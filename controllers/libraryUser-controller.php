<?php 
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Movie_users.php';
SessionFlash::start();

$movie_id=intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
$user=$_SESSION['user'];
$users_id=$user->users_id;

if(isset($_SESSION['user'])){
        $addMovie = new Movie_users();
        $addMovie->setMoviesId($movie_id);
        $addMovie->setUsersId($users_id);
        $verifAdd=$addMovie->isExist();
        if ($addMovie==false){
                $movieSaved=$addMovie->add();
                header('location: /controllers/home-controller.php');
        }
}else{
        header('location: /controllers/login-controller.php');
        SessionFlash::setMessage('Veuillez vous connecter pour pouvoir ajouter à votre liste personnalisée.');
}

$addUserMovies = Movie_users::getAll();




include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/users/libraryUser.php';
include __DIR__. '/../views/templates/footer.php';

?>