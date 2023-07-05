<nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse bg-dark mt-3" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/controllers/home-controller.php"><img class="  logoNav" src="/public/assets/img/popcornLogo150x150.png" alt=""></a> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <?php if( isset($_SESSION['user']) && $_SESSION['user'] !== null ) { 
                    ?>
                <a class="nav-link active" aria-current="page" href="/controllers/logout-controller.php">Deconnexion</a>
            <?php } else { ?>
                <a class="nav-link active" aria-current="page" href="/controllers/login-controller.php">Connexion</a>
                <?php } ?>
            </li>
            <li>
                <a class="nav-link active" aria-current="page" href="/controllers/libraryUser-controller.php">Ma liste</a>
            </li>
            <li>
                <a class="nav-link active" aria-current="page" href="/controllers/dashboard_create-controller.php">Ajouter un film</a>
            </li>
            <li>
                <a class="nav-link active" aria-current="page" href="/controllers/dashboard_listUsers-controller.php">Liste des utilisateurs</a>
            </li>
        </ul>
        <h1 class="m-3">Biblio-Flix</h1>
        <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
            <button class="btn btn-outline bg-light me-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form> -->
    </div>
</nav>