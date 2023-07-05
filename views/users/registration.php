<div class="container">
        <section class="d-flex row align-items-center">
            <div class="d-lg-flex flex-lg-row ">
                <div class="avantages px-5">
                    <h1 class=" text-white">Vos avantages quand vous etes inscrit</h1>
                        <ul class="text-white list-unstyled">
                            <li>- Ajouter des films dans votre liste " à regarder ".</li>
                            <li>- Noter des films que vous avez déjà vu.</li>
                            <li>- Donner votre avis en commentaire</li>
                        </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="text-center text-white">Inscription</h2>
                    <form method="post" id=userForm>
                        <div class="mb-3 ">
                                <label for="pseudo" class="form-label text-white">Pseudo :</label>
                                <input type="text" name="pseudo" class="form-control <?= isset($error['pseudo']) ? 'errorField' : '' ?>" id="pseudo" value="<?= $pseudo ?? ''?>" minlength="2" maxlength="36" pattern="<?= REGEX_PSEUDO ?>" required>
                                <small id="pseudoError" class="form-text error"><?= $error['pseudo'] ?? '' ?></small>
                        </div>  
                        <div class="mb-3 ">
                            <label for="email" class="form-label text-white">Adresse mail :</label>
                            <input type="email" name="email" class="form-control <?= isset($error['email']) ? 'errorField' : '' ?>" id="email" value="<?= $email ?? ''?>" required>
                            <small id="emailError" class="form-text error"><?= $error['email'] ?? '' ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white">Mot de passe :</label>
                            <input type="password" name="password" class="form-control <?= isset($error['password']) ? 'errorField' : '' ?>" id="password" value="<?= $password ?? ''?>" required>
                            <small id="passwordError" class="form-text error"><?= $error['password'] ?? '' ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label text-white">Confirmation du Mot de passe :</label>
                            <input type="password"name="confirmPassword" class="form-control <?= isset($error['confirmPassword']) ? 'errorField' : '' ?>" id="confirmPassword" value="<?= $confirmPassword ?? ''?>" required>
                            <small id="confirmPasswordError" class="form-text error"><?= $error['confirmPassword'] ?? '' ?></small>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-light">Inscription</button>
                        </div>
                    </form>
                </div>
            </div>           
        </section>
</div>