<div class="container d-flex justify-content-center">
    <div class="col-lg-4 ">
        <section class="d-flex row align-items-center">
            <div class="form">
                <h1 class="text-white text-center">Connexion</h1>
                <form method="post" novalidate>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Adresse mail :</label>
                        <input type="email" name="email" class="form-control <?= isset($error['email']) ? 'errorField' : '' ?>" id="email" aria-describedby="email" value="<?= $email ?? '' ?>" required>                                                                                                       
                        <small id="emailError" class="form-text error"><?= $error['email'] ?? '' ?></small> 
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Mot de passe :</label>
                        <input type="password" name="password" class="form-control <?= isset($error['email']) ? 'errorField' : '' ?>" id="password" aria-describedby="password" value="<?= $password ?? '' ?>" required>
                        <small id="passwordError" class="form-text error"><?=$error['password'] ?? ''//coalescence si $error existe on l'affiche sinon ''(vide)?></small>
                    </div>
                    <div class="btnLogin">
                        <button type="submit" class="btn btn-outline-light">Connexion</button>
                    </div>
                </form>
                <div class="mt-3 text-white">
                    <p>Vous n'avez pas encore de compte <a class="text-decoration-none" href="/controllers/registration-controller.php">inscrivez vous</a> !</p>
                </div>
            </div>
        </section>
    </div>
</div>