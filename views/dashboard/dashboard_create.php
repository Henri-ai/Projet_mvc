<div class="container">
    <div class="col-12">
        <section>
            <h1 class="text-white d-flex justify-content-center py-5">Ajout de film</h1>
            <form autocomplete="off" method="post" id="formUser" enctype="multipart/form-data"  novalidate >
                <!-- title -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="titleMovie" class="form-label text-white">Titre du film : </label>
                        <input type="text" name="titleMovie" class="form-control" id="titleMovie" value="">
                        <small></small>
                    </div>
                    <!-- actor -->
                    <div class="col-lg-6">
                        <div class="autocomplete text-white">
                            <label for="actor" class="form-label text-white">Acteurs :</label>
                            <input type="text" name="actor" class="form-control" id="actor" value="">
                        </div> 
                    </div>   
                </div>
                <!-- director -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="autocomplete text-white">
                            <label for="director" class="form-label text-white">Réalisateur :</label>
                            <input type="text" name="director" class="form-control" id="director" value="">
                        </div>
                    </div>
                <!-- release date -->
                    <div class="col-lg-6">
                            <label for="releaseDate" class="form-label text-white">Année de sortie :</label>
                            <input type="text" name="releaseDate" class="form-control" id="releaseDate" value="">
                    </div>
                </div>
                <!-- duration -->
                <div class="row">
                    <div class="col-lg-6">
                        <label for="duration" class="form-label text-white">Durée :</label>
                        <input type="text" name="duration" class="form-control" id="duration" value="">
                    </div>
                <!-- picture -->
                    <div class="col-lg-6">
                        <label for="picture" class="form-label text-white">Affiche du film :</label>
                        <input type="file" name="picture" class="form-control" id="picture" value="">
                    </div>
                </div>
                <!-- styles -->
                <div class="row">
                    <div class="col text-white">
                        <label class="mt-3">Style/Catégorie : </label>
                        <?php
                        foreach (STYLES as $key=>$value) {
                            ?>
                            <div class="form-check">
                                <input class="form-check-input"
                                    type="checkbox"
                                    name="style[]"
                                    id="style<?=$key?>"
                                    value="<?=$key?>"
                                    <?= (isset($selectedStyle) && in_array($key, $selectedStyle)) ? 'checked' : '' ?>
                                >
                                <label class="form-check-label" for="style<?=$key?>">
                                    <?=$value?>
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
                            <textarea class="form-control" placeholder="Leave a comment here" id="synopsis" style="height: 500px"></textarea>
                            <label for="synopsis">Synopsis :</label>
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