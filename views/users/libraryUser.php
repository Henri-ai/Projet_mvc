<div class="container">
    <section>
        <div class="row">
            <div class="col d-flex align-items-center py-5">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="text-white">Vos films</h1>
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
        <section>
            <div class="row">
                <div class="col d-flex align-items-center py-5">
                    <div class="col d-flex justify-content-center">
                        <a href="" class="btn btn-outline-light"> Déjà vu</a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="" class="btn btn-outline-light"> à regarder</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>