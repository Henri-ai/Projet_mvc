<div class="container d-flex justify-content-center">
    <div class="col-lg-4 ">
        <section class="d-flex row align-items-center">
            <div class="form">
                <h1 class="text-white text-center">Modifier votre profil</h1>
                    <form method="post" novalidate>
                        <div class="mb-3">
                            <label for="text" class="form-label text-white">Pseudo :</label>
                            <input type="text" name="uptdatePseudo" class="form-control <?= isset($error['uptdatePseudo']) ? 'errorField' : '' ?>" id="uptdatePseudo" aria-describedby="uptdatePseudo" value="<?= $uptdatePseudo ?? '' ?>" required>                                                                                                       
                            <small id="uptdatePseudoError" class="form-text error"><?= $error['uptdatePseudo'] ?? '' ?></small> 
                        </div>
                        <div class="mb-3">
                            <label for="utpdateEmail" class="form-label text-white">Adresse email :</label>
                            <input type="email" name="utpdateEmail" class="form-control <?= isset($error['utpdateEmail']) ? 'errorField' : '' ?>" id="utpdateEmail" aria-describedby="utpdateEmail" value="<?= $utpdateEmail ?? '' ?>" required>
                            <small id="utpdateEmailError" class="form-text error"><?=$error['utpdateEmail'] ?? ''//coalescence si $error existe on l'affiche sinon ''(vide)?></small>
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