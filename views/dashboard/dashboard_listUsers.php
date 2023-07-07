<div class="container">
    <div class="col-12">
        <section>
            <h1 class="text-white d-flex justify-content-center py-5">Liste des utilisateurs</h1>
            <?php if (SessionFlash::checkMessage()) { ?>
                <div class="alert alert-success" role="alert">
                    <strong><?= SessionFlash::getMessage() ?></strong>
                </div>
            <?php } ?>
            <table class="table bg-dark rounded">
                <thead>
                    <tr class="text-white text-center">
                        <th class="fw-light" scope="col">Pseudo</th>
                        <th class="fw-light" scope="col">Email</th>
                        <th class="fw-light" scope="col">Supprimer l'utilisateur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $key => $user) { ?>
                        <tr class="text-white text-center">
                            <td><?= $user->pseudo ?></td>
                            <td><?= $user->email ?></td>
                            <td><a href="/controllers/dashboard_listUsers-controller.php?id=<?= $user->users_id ?>" class="btn btn-outline-danger" role="button">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>