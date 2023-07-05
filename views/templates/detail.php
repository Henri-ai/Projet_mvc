<div class="container">
    <section>
        <div class="row pb-5">
            <div class="d-flex col align-items-center flex-wrap">
                <div class="col text-center pt-5">
                    <img class="rounded" src="/public/assets/img/img_vide.jpg" alt="" title="">
                    <h1 class="text-white">Titre du film</h1>
                    <a href="" class="btn btn-outline-light"><i class="fa-solid fa-plus-minus fa-bounce" style="color: #d0001a;"></i> Liste</a>
                </div>
                <div class="col movieInformation text-center rounded p-2">
                    <h2 class="text-white">Nom du réalisateur</h2>
                    <p class="text-white">Le style du film</p>
                    <p class="text-white">Les acteurs principaux</p>
                    <p class="text-white">L'année de sortie</p>
                    <p class="text-white">La durée du film</p>
                    <div class="col d-flex justify-content-center">
                        <a href="/controllers/dashboard_update-controller.php" class="btn btn-outline-light">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="note text-white py-5">
            <h2 class="text-center py-5 bg-dark rounded">Vous l'avez deja vu ?</h2>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center justify-content-around flex-wrap py-5">
                        <h3 class="fs-3">notez +NOM DU FILM+ /5</h3>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed dictum tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere cubilia curae; Nunc placerat malesuada dui, et porta eros dapibus at. Mauris luctus, lectus eget bibendum elementum, nisi arcu feugiat erat,
                consectetur volutpat erat ipsum eu turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum rhoncus 
                magna vitae euismod semper. Quisque pellentesque lorem ut diam ornare placerat. Nunc urna quam, egestas non vulputate non, aliquam ut eros. Pellentesque 
                consectetur erat ut leo finibus sodales. Vivamus purus massa, eleifend et sapien non,
                interdum accumsan quam. Suspendisse vitae risus eget orci faucibus auctor nec in tellus.
                Donec arcu tellus, semper vel neque vel, porta condimentum ante.
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
        <div class="divBtnTop d-flex justify-content-end my-4">
            <button class="btnTopPage" type="button"><a href="/controllers/detail-controller.php"><img class="logoNav" src="/public/assets/img/popcornLogo150x150.png" alt="" title=""></a></button> 
        </div> 
    </section>
</div>