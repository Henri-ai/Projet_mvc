<div class="container">
    <div class="col-12">
        <section>
            <h1 class="text-white d-flex justify-content-center py-5">Modifier le film</h1>
            <form autocomplete="off" method="post" id="formUser" enctype="multipart/form-data" novalidate>
                <!-- title -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="titleMovie" class="form-label text-white">Titre du film * : </label>
                        <input type="text" name="titleMovie" class="form-control <?= isset($error['titleMovie']) ? 'errorField' : '' ?>" id="titleMovie" value="<?= $movie->title ?>">
                        <small id="titleMovieError" class="form-text error"><?= $error['titleMovie'] ?? '' ?></small>
                    </div>
                    <!-- actor -->
                    <div class="col-lg-6 mt-4">
                        <div class="form-floating">
                            <textarea class="form-control <?= isset($error['actor']) ? 'errorField' : '' ?>" placeholder="Leave a comment here" name="actor" id="actor" style="height: 60px"><?= $movie->name_actors ?></textarea>
                            <label for="actor">Acteurs principaux * :</label>
                            <small class="form-text error"><?= $error['actor'] ?? '' ?></small>
                        </div>
                    </div>
                    <!-- release date -->
                    <div class="col-lg-6">
                        <label for="releaseDate" class="form-label text-white">Année de sortie * :</label>
                        <input type="text" name="releaseDate" class="form-control <?= isset($error['releaseDate']) ? 'errorField' : '' ?>" id="releaseDate" value="<?= $movie->movie_year ?>">
                        <small id="releaseDateError" class="form-text error"><?= $error['releaseDate'] ?? '' ?></small>
                    </div>
                    <!-- director -->
                    <div class="col-lg-6 mt-4">
                        <div class="form-floating">
                            <textarea class="form-control <?= isset($error['director']) ? 'errorField' : '' ?>" placeholder="Leave a comment here" name="director" id="director" style="height: 60px"><?= $movie->name_producers ?></textarea>
                            <label for="director">Réalisateur * :</label>
                            <small class="form-text error"><?= $error['director'] ?? '' ?></small>
                        </div>
                    </div>
                </div>
                <!-- duration -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="duration" class="form-label text-white">Durée * :</label>
                        <input type="text" name="duration" class="form-control <?= isset($error['duration']) ? 'errorField' : '' ?>" id="duration" value="<?= $movie->duration ?>">
                        <small id="durationError" class="form-text error"><?= $error['duration'] ?? '' ?></small>
                        <!-- styles -->
                        <div class="text-white">
                            <label class="mt-3">Style/Catégorie * : </label>
                            <?php
                            foreach ($styles as $key => $value) {
                            ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="style[]" id="style<?= $key ?>" value="<?= $value->styles_id ?? '' ?>">
                                    <label class="form-check-label" for="style<?= $key ?>">
                                        <?= $value->label ?>
                                    </label>
                                </div>
                            <?php
                            }
                            ?>
                            <small class="form-text error"><?= $error['style'] ?? '' ?></small>
                        </div>
                    </div>
                    <!-- synopsis -->
                    <div class="col mt-4">
                        <div class="form-floating">
                            <textarea class="form-control <?= isset($error['actor']) ? 'errorField' : '' ?>" placeholder="Leave a comment here" name="synopsis" id="synopsis" style="height: 500px"><?= $movie->synopsis ?></textarea>
                            <label for="synopsis">Synopsis * :</label>
                            <small class="form-text error"><?= $error['synopsis'] ?? '' ?></small>
                        </div>
                    </div>
                </div>
                <!-- button -->
                <div class="d-flex justify-content-center p-3">
                    <input type="submit" value="Modifier" class="btn btn-outline-light m-2" id="validForm">
                    <a href="/controllers/dashboard_update-controller.php?id=<?= $movie->movies_id ?>&action=delete" class="btn btn-outline-danger m-2" role="button">Supprimer le film</a>
                </div>
            </form>
        </section>
    </div>
</div>