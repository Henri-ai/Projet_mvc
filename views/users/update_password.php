<div class="container d-flex justify-content-center">
    <div class="col-lg-4 ">
        <section class="d-flex row align-items-center">
            <div class="form">
                <h1 class="text-white text-center">Nouveau mot de passe</h1>
                <form method="post" novalidate>
                    <div class="mb-3">
                        <label for="updatePassword" class="form-label text-white">Nouveau mot mot de passe :</label>
                        <input type="password" name="updatePassword" class="form-control <?= isset($error['updatePassword']) ? 'errorField' : '' ?>" id="updatePassword" aria-describedby="updatePassword" value="<?= $updatePassword ?? '' ?>" required>
                        <small id="updatePasswordError" class="form-text error"><?= $error['updatePassword'] ?? '' //coalescence si $error existe on l'affiche sinon ''(vide)
                                                                                ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="updatePasswordConfirm" class="form-label text-white">Confirmer votre nouveau mot de passe :</label>
                        <input type="password" name="updatePasswordConfirm" class="form-control <?= isset($error['updatePasswordConfirm']) ? 'errorField' : '' ?>" id="updatePasswordConfirm" aria-describedby="updatePasswordConfirm" value="<?= $updatePasswordConfirm ?? '' ?>" required>
                        <small id="updatePasswordConfirmError" class="form-text error"><?= $error['updatePasswordConfirm'] ?? '' ?></small>
                    </div>
                    <div class="btnValidate">
                        <button type="submit" class="btn btn-outline-light">Modifier</button>
                        <a class="text-decoration-none btn btn-outline-light" role="button" href="/controllers/preference-controller.php?id=<?=$user->users_id?>">Retour</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>