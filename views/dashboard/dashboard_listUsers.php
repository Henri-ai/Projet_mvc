<div class="container">
    <div class="col-12">
        <section>
            <h1 class="text-white d-flex justify-content-center py-5">Liste des utilisateurs</h1>
            <table class="table bg-dark rounded">
                <thead>
                    <tr class="text-white text-center">
                        <th scope="col">Pseudo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Supprimer l'utilisateur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($users as $key => $user) { ?>
                        <tr class="text-white text-center">
                        <td><?=$user->pseudo?></td>
                        <td><?=$user->email?></td>
                        <td><button type="button" class="btn btn-outline-danger">Supprimer</button></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>