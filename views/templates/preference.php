<div class="container d-flex justify-content-center">
    <div class="col-12 col-lg-4">
        <section class="d-flex row align-items-center">
            <div class="form">
                <h1 class="text-white text-center">Modifier votre profil</h1>
                <form method="post" novalidate>
                    <div class="mb-3">
                        <label for="updatePseudo" class="form-label text-white">Pseudo :</label>
                        <input type="text" name="updatePseudo" class="form-control <?= isset($error['updatePseudo']) ? 'errorField' : '' ?>" id="updatePseudo" aria-describedby="updatePseudo" value="<?= $user->pseudo ?>" required>
                        <small id="updatePseudoError" class="form-text error"><?= $error['updatePseudo'] ?? '' ?></small>
                    </div>
                    <div class="mb-3">
                        <a class="text-decoration-none" href="/controllers/update_password-controller.php?id=<?= $user->users_id ?>">Changer de mot de passe</a>
                    </div>
                    <div class="btnValidate">
                        <button type="submit" class="btn btn-outline-light">Modifier</button>
                        <a href="/controllers/preference-controller.php?id=<?= $user->users_id ?>&action=delete" class="btn btn-outline-danger" role="button">Supprimer votre compte</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>