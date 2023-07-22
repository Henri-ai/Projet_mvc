<div class="container">
    <section>
        <div class="row">
            <div class="col d-flex align-items-center py-5">
                <div class="col d-flex justify-content-center">
                    <h2 class="text-white fs-1 d-flex justify-content-center offset-3">Mes films</h2>
                </div>
                <div class="col-2">
                    <a href="../controllers/preference-controller.php?id=<?= $user->users_id ?>" class="btn btn border-none"><i class="fa-solid fa-gear" style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
        <?php if (SessionFlash::checkMessage()) { ?>
            <div class="alert alert-success" role="alert">
                <strong><?= SessionFlash::getMessage() ?></strong>
            </div>
        <?php } ?>
        <div class="row my-5">
            <div class="col-lg-5 bg-dark py-5 rounded mx-auto mb-2">
                <h2 class="text-center text-white">à regarder</h2>
                <div class="row">
                    <div class="col d-flex align-items-center py-5">
                        <div class="col d-flex flex-wrap justify-content-center">
                            <?php foreach ($addUserMovies as $addUserMovie) { ?>
                                <a href="../controllers/detail-controller.php?id=<?= $addUserMovie->movies_id ?>" class="cardLink">
                                    <div class="cardLibrary m-2 rounded" style="width: 15rem;">
                                        <img src="/public/uploads/movies_pictures/<?= $addUserMovie->picture ?>" class="card-img p-2" alt="affiche du film">
                                        <div class="card-body text-center d-flex justify-content-center">
                                            <h5 class="card-title text-white"><?= $addUserMovie->title ?></h5>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 bg-dark py-5 rounded">
                <h2 class="text-center text-white">Déjà vu</h2>
            </div>
        </div>
    </section>
</div>