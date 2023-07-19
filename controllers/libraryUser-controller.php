<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Movie_users.php';
SessionFlash::start();

if (isset($_GET['id'])) {
        $movie_id = intval(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
}
$user = $_SESSION['user'];
$users_id = $user->users_id;
if(!isset($_SESSION['user'])){
        SessionFlash::setMessage('Veuillez vous connecter pour pouvoir ajouter à votre liste personnalisée.');
                header('location: /controllers/login-controller.php');
}else{
        if (isset($movie_id)) {
                        $addMovie = new Movie_users();
                        $addMovie->setMoviesId($movie_id);
                        $addMovie->setUsersId($users_id);
                        $addMovie->delete($movie_id, $users_id);
                        $movieSaved = $addMovie->add();
                } 
}

$addUserMovies = Movie_users::getAll($users_id);




include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/users/libraryUser.php';
include __DIR__ . '/../views/templates/footer.php';
