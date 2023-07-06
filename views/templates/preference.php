
<div class="container d-flex justify-content-center">
    <div class="col-lg-4 ">
        <section class="d-flex row align-items-center">
            <div class="form">
                <h1 class="text-white text-center">Modifier votre profil</h1>
                    <form method="post" novalidate>
                        <div class="mb-3">
                            <label for="text" class="form-label text-white">Pseudo :</label>
                            <input type="text" name="updatePseudo" class="form-control <?= isset($error['updatePseudo']) ? 'errorField' : '' ?>" id="updatePseudo" aria-describedby="updatePseudo" value="<?=$user->pseudo?>" required>                                                                                                       
                            <small id="updatePseudoError" class="form-text error"><?= $error['updatePseudo'] ?? '' ?></small> 
                        </div>
                        <div class="mb-3">
                            <a class="text-decoration-none" href="/controllers/update_password-controller.php?id=<?=$user->users_id?>">Changer de mot de passe</a>
                        </div>
                        <div class="btnValidate">
                            <button type="submit" class="btn btn-outline-light">Modifier</button>
                            <button type="" class="btn btn-outline-danger">Supprimer votre compte</button>
                        </div>
                    </form>
            </div>
        </section>
    </div>
</div>