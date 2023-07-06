<div class="screenImg"></div>
<div class="container">
    <section>
        <!-- select catégories -->
    <div class="select row justify-content-center my-5 px-2">
        <select class="form-select" aria-label="selectMovie" style="width: 25rem;">
            <option selected>--Sélectionner une catégorie</option>
            <?php foreach ($styles as $key => $style) { ?>
                <option value="<?=$style->styles_id?>"><?=$style->label?></option>
            <?php }?>
        </select>
    </div>
        <!-- fin select -->
        <!-- card Film -->
    <div class=" cardList row flex wrap: wrap justify-content-around ">
        <!-- card 1 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light ">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #b50013;"></i> Liste</a>
                </div>
            </div>
        </div>
        <!-- ---- -->
        <!-- card 2 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
        <!-- ---- -->
        <!-- card 3 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
        <!-- ---- -->
        <!-- card 4 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
    
        <!-- ---- -->
        <!-- card 5 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
        <!-- ---- -->
        <!-- card 6 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
        <!-- ---- -->
        <!-- card 7 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
        <!-- ---- -->
        <!-- card 8 -->
        <div class="card bg-dark m-3" style="width: 15rem;">
            <img src="/public/assets/img/img_vide.jpg" class="card-img-One" alt="affiche du film">
            <div class="card-body text-center">
                <h5 class="card-title text-white">Nom du film</h5>
                <div class="twoBtn d-flex justify-content-around align-items-center">
                    <a href="/controllers/detail-controller.php" class="btn btn-outline-light">Détails</a>
                    <a href="/controllers/libraryUser-controller.php" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus" style="color: #D0001A;"></i> Liste</a>
                </div>
            </div>
        </div>
    </div>
        <!-- ---- -->
        <!-- fin card film -->
    </section>
</div>
