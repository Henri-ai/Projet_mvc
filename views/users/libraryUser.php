<div class="container">
    <section>
        <div class="row">
            <div class="col d-flex align-items-center py-5">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="text-white fs-1">Mes films</h2>
                </div>
                <div class="col">
                    <a href="../controllers/preference-controller.php?id=<?= $user->users_id ?>" class="btn btn-outline-dark border-white"><i class="fa-solid fa-gear" style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
        <?php if (SessionFlash::checkMessage()) { ?>
            <div class="alert alert-success" role="alert">
                <strong><?= SessionFlash::getMessage() ?></strong>
            </div>
        <?php } ?>
            <div class="row my-5">
                <div class="col-lg-5 bg-success mx-auto">
                    <h2 class="text-center">à regarder</h2>
                    <div class="row">
                        <div class="col d-flex align-items-center py-5">
                            <div class="col d-flex flex-wrap justify-content-center">
                                <?php foreach ($addUserMovies as $addUserMovie) { ?>
                                    <div class="card bg-dark m-3" style="width: 15rem;">
                                        <img src="/public/uploads/movies_pictures/<?= $addUserMovie->picture ?>" class="card-img" alt="affiche du film">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-white"><?= $addUserMovie->title ?></h5>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 bg-warning ">
                    <h3 class="text-center text-white">Déjà vu</h3>
                </div>
            </div>
</div>
</section>

</div>