<div class="container d-flex justify-content-center">
    <div class="col-lg-4 ">
        <section class="d-flex row align-items-center">
            <div class="form">
                <h1 class="text-white text-center">Modifier votre profil</h1>
                    <form method="post" novalidate>
                        <div class="mb-3">
                            <label for="text" class="form-label text-white">Pseudo :</label>
                            <input type="text" name="updatePseudo" class="form-control <?= isset($error['updatePseudo']) ? 'errorField' : '' ?>" id="updatePseudo" aria-describedby="updatePseudo" value="<?= $updatePseudo ?? '' ?>" required>                                                                                                       
                            <small id="updatePseudoError" class="form-text error"><?= $error['updatePseudo'] ?? '' ?></small> 
                        </div>
                        <div class="mb-3">
                            <label for="updateEmail" class="form-label text-white">Adresse email :</label>
                            <input type="email" name="updateEmail" class="form-control <?= isset($error['updateEmail']) ? 'errorField' : '' ?>" id="updateEmail" aria-describedby="updateEmail" value="<?= $updateEmail ?? '' ?>" required>
                            <small id="updateEmailError" class="form-text error"><?=$error['updateEmail'] ?? ''//coalescence si $error existe on l'affiche sinon ''(vide)?></small>
                        </div>
                        <div class="mb-3">
                            <label for="updatePassword" class="form-label text-white">Changer de mot de passe :</label>
                            <input type="password" name="updatePassword" class="form-control <?= isset($error['updatePassword']) ? 'errorField' : '' ?>" id="updatePassword" aria-describedby="updatePassword" value="<?= $updatePassword ?? '' ?>" required>
                            <small id="updatePasswordError" class="form-text error"><?=$error['updatePassword'] ?? ''//coalescence si $error existe on l'affiche sinon ''(vide)?></small>
                        </div>
                        <div class="mb-3">
                            <label for="updatePasswordConfirm" class="form-label text-white">Confirmer votre nouveau mot de passe :</label>
                            <input type="password" name="updatePasswordConfirm" class="form-control <?= isset($error['updatePasswordConfirm']) ? 'errorField' : '' ?>" id="updatePasswordConfirm" aria-describedby="updatePasswordConfirm" value="<?= $updatePasswordConfirm ?? '' ?>" required>
                            <small id="updatePasswordConfirmError" class="form-text error"><?=$error['updatePasswordConfirm'] ?? ''//coalescence si $error existe on l'affiche sinon ''(vide)?></small>
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