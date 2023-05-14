<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

//===================== email : Nettoyage et validation =======================

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //Supprimez tous les caractères sauf les lettres, les chiffres et !#$%&'*+-=?^_`{|}~@.[].
if (empty($email)) { //determine si la variable est vide
    $error['email'] = 'Veuillez saisir votre adresse mail';
} else {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL); //Vérifie si la valeur est une adresse e-mail valide.
    if ($email == false) {
        $error['email'] = 'Veuillez saisir une adresse mail valide';
    }
}

//==================== password ================================================
$password = filter_input(INPUT_POST,'password');
if(empty($password)){//SI LA VARIABLE est vide message d'erreur
    $error['password']='Veuillez saisir un mot de passe';
}
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

}


include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/users/login.php';
include __DIR__ .'/../views/templates/footer.php';
?>