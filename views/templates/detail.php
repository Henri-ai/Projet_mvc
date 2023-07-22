<div class="container">
    <section>
        <?php if (SessionFlash::checkMessage()) { ?>
            <div class="alert alert-success mt-4" role="alert">
                <strong><?= SessionFlash::getMessage() ?></strong>
            </div>
        <?php } ?>
        <div class="row pb-5">
            <div class="d-flex col align-items-center flex-wrap">
                <div class="col text-center pt-5">
                    <img class="rounded" src="/public/uploads/movies_pictures/<?= $movie->picture ?>" alt="affiche" title="affiche du film">
                    <div class="titleAndAddList p-3">
                        <h1 class="text-white"><?= $movie->title ?></h1>
                        <a href="/controllers/libraryUser-controller.php?id=<?= $movie->movies_id ?>" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus fa-bounce" style="color: #b50013;"></i> Liste</a>
                    </div>
                </div>
                <div class="col bg-dark text-center rounded p-2">
                    <h2 class="text-white">de <?= $movie->name_producers ?></h2>
                    <?php foreach ($styles as $key => $style) { ?>
                        <p class="text-white"><?= $style->label ?></p>
                    <?php } ?>
                    <p class="text-white">avec : <?= $movie->name_actors ?></p>
                    <p class="text-white">année de sortie : <?= $movie->movie_year ?></p>
                    <p class="text-white">durée : <?= $movie->duration ?></p>
                    <?php
                    if (isset($_SESSION['user']) && ($_SESSION['user']->type == 1)) { ?>
                        <div class="col d-flex justify-content-center">
                            <a href="/controllers/dashboard_update-controller.php?id=<?= $movie->movies_id ?>" class="btn btn-outline-light">Modifier</a>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="note text-white py-5">
            <h2 class="text-center py-5 bg-dark rounded">Vous l'avez deja vu ?</h2>
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-around flex-wrap py-5">
                    <h3 class="fs-3">notez <?= $movie->title ?> /5</h3>
                    <div class="star">
                        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-star fa-2xl" style="color: #ffffff;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col bg-dark rounded p-5">
            <h2 class="text-white">Synopsis</h2>
            <p class="text-white">
                <?= $movie->synopsis ?>
            </p>
        </div>
        <h2 class="text-white my-3 text-center pt-5 rounded">Laissez nous un commentaire !</h2>
        <form class="py-5">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>
            <div class="btnAddComment d-flex justify-content-end mt-1">
                <button type="submit" class="btn btn-outline-light">Envoyer</button>
            </div>
        </form>
    </section>
</div>