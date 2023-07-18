<div class="screenImg"></div>
<div class="container">
    <section>
        <form>
            <div class="row d-flex align-items-center">
                <div class="col-lg-7 select px-2 d-flex justify-content-end">
                    <select class="form-select" aria-label="selectStyle" name="selectStyle" style="width: 25rem;">
                        <option selected disabled>--Sélectionner une catégorie</option>
                        <?php foreach ($styles as $key => $style) { ?>
                            <option value="<?= $style->styles_id ?>"><?= $style->label ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col">
                    <input type="submit" value="Rechercher" class="btn btn-outline-light my-3" id="validFormHome">
                </div>
            </div>
        </form>
        <?php if (SessionFlash::checkMessage()) { ?>
            <div class="alert alert-success mt-4" role="alert">
                <strong><?= SessionFlash::getMessage() ?></strong>
            </div>
        <?php } ?>
        <?php
        if (isset($selectStyle)) { 
            ?>
            <div class=" cardList row flex wrap: wrap justify-content-around ">
                <!-- card -->
                <?php foreach ($searchs as $search) { 
                    ?>
                    <div class="card bg-dark m-3" style="width: 15rem;">
                        <img src="/public/uploads/movies_pictures/<?= $search->picture ?>" class="card-img" alt="affiche du film">
                        <div class="card-body text-center">
                            <h5 class="card-title text-white"><?= $search->title ?></h5>
                            <div class="twoBtn d-flex justify-content-around align-items-center">
                                <a href="/controllers/detail-controller.php?id=<?= $search->movies_id ?>" class="btn btn-outline-light ">Détails</a>
                                <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #b50013;"></i> Liste</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- ---- -->
        <?php } else { ?>
            <div class="cardList row flex wrap: wrap justify-content-around">
                <!-- card -->
                <?php foreach ($movies as $key => $movie) { ?>
                    <div class="card bg-dark m-3" style="width: 15rem;">
                        <img src="/public/uploads/movies_pictures/<?= $movie->picture ?>" class="card-img" alt="affiche du film">
                        <div class="card-body text-center">
                            <h5 class="card-title text-white"><?= $movie->title ?></h5>
                            <div class="twoBtn d-flex justify-content-around align-items-center">
                                <a href="/controllers/detail-controller.php?id=<?= $movie->movies_id ?>" class="btn btn-outline-light ">Détails</a>
                                <a href="/controllers/libraryUser-controller.php?id=<?=$movie->movies_id?>" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #b50013;"></i> Liste</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- ---- -->
        <?php } ?>
    </section>
</div>