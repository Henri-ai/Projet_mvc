<nav class="navbar navbar-expand-lg navbar bg-dark" data-bs-theme="dark">
        <button class="navbar-toggler bg-dark mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-dark" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/controllers/home-controller.php"><img class=" mx-2 logoNav" src="/public/assets/img/popcornLogo150x150.png" alt=""></a> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/controllers/login-controller.php">Connexion</a>
                </li>
                <li>
                    <a class="nav-link active" aria-current="page" href="/controllers/libraryUser-controller.php">Ma liste</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline bg-light me-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
    </div>
</nav>