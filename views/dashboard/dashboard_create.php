<div class="container">
    <div class="col-12">
        <section>
            <h1 class="text-white d-flex justify-content-center py-5">Ajout de film</h1>
            <form autocomplete="off" method="post" id="formUser" enctype="multipart/form-data" novalidate>
                <!-- title -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="titleMovie" class="form-label text-white">Titre du film * : </label>
                        <input type="text" name="titleMovie" class="form-control <?= isset($error['titleMovie']) ? 'errorField' : '' ?>" id="titleMovie" value="<?= $titleMovie ?? '' ?>">
                        <small id="titleMovieError" class="form-text error"><?= $error['titleMovie'] ?? '' ?></small>
                    </div>
                    <!-- actor -->
                    <div class="col-lg-6 mt-4">
                        <div class="form-floating">
                            <textarea class="form-control <?= isset($error['actor']) ? 'errorField' : '' ?>" placeholder="Leave a comment here" name="actor" id="actor" style="height: 60px"><?= $actor ?? '' ?></textarea>
                            <label for="actor">Acteurs principaux * :</label>
                            <small class="form-text error"><?= $error['actor'] ?? '' ?></small>
                        </div>
                    </div>
                    <!-- release date -->
                    <div class="col-lg-6">
                        <label for="releaseDate" class="form-label text-white">Année de sortie * :</label>
                        <input type="text" name="releaseDate" class="form-control <?= isset($error['releaseDate']) ? 'errorField' : '' ?>" id="releaseDate" value="<?= $releaseDate ?? '' ?>">
                        <small id="releaseDateError" class="form-text error"><?= $error['releaseDate'] ?? '' ?></small>
                    </div>
                    <!-- director -->
                    <div class="col-lg-6 mt-4">
                        <div class="form-floating">
                            <textarea class="form-control <?= isset($error['director']) ? 'errorField' : '' ?>" placeholder="Leave a comment here" name="director" id="director" style="height: 60px"><?= $director ?? '' ?></textarea>
                            <label for="director">Réalisateur * :</label>
                            <small class="form-text error"><?= $error['director'] ?? '' ?></small>
                        </div>
                    </div>
                </div>
                <!-- duration -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="duration" class="form-label text-white">Durée * :</label>
                        <input type="text" name="duration" class="form-control <?= isset($error['duration']) ? 'errorField' : '' ?>" id="duration" value="<?= $duration ?? '' ?>">
                        <small id="durationError" class="form-text error"><?= $error['duration'] ?? '' ?></small>
                    </div>
                    <!-- picture -->
                    <div class="col-lg-6">
                        <label for="picture" class="form-label text-white">Affiche du film * :</label>
                        <input type="file" name="picture" class="form-control <?= isset($error['picture']) ? 'errorField' : '' ?>" id="picture" accept=".png, .jpg, .jpeg">   
                        <small id="pictureError" class="form-text error"><?= $error['picture'] ?? '' ?></small>
                    </div>
                </div>
                <!-- styles -->
                <div class="row">
                    <div class="col text-white">
                        <label class="mt-3">Style/Catégorie * : </label>
                        <?php
                        foreach ($styles as $key => $value) {
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="style[]" id="style<?= $key ?>" value="<?= $value->styles_id ?? ''?>">
                                <label class="form-check-label" for="style<?= $key ?>">
                                    <?= $value->label ?>
                                </label>
                            </div>
                        <?php
                        }
                        ?>
                        <small class="form-text error"><?= $error['style'] ?? '' ?></small>
                    </div>
                    <!-- synopsis -->
                    <div class="col mt-3">
                        <div class="form-floating">
                            <textarea class="form-control <?= isset($error['synopsis']) ? 'errorField' : '' ?>" placeholder="Leave a comment here" name="synopsis" id="synopsis" style="height: 500px"><?= $synopsis ?? '' ?></textarea>
                            <label for="synopsis">Synopsis * :</label>
                            <small class="form-text error"><?= $error['synopsis'] ?? '' ?></small>
                        </div>
                    </div>
                </div>
                <!-- button -->
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Ajouter" class="btn btn-outline-light my-3" id="validForm">
                </div>
            </form>
        </section>
    </div>
</div>