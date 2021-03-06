<h1><U>LES CLIENTS ACTIFS</U></h1>

<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5>
<h5><a href="<?php echo site_url('client/create') ?>">Créer un nouveau client</a></h5><br>

<?php foreach ($clients as $client) : ?>
    <section class="card">
        <h5 class="card-header"><?php echo $client['nomClient'] ?>
            <p>N° client : <?php echo $client['numClient'] ?></p>
        </h5>
        <article class="card-body">
            <p class="card-text"><?php echo $client['adresse'] ?></p>
            <p class="card-text"><?php echo $client['numTel'] ?></p>
            <p class="card-text"><?php echo $client['mail'] ?></p>
            <a href="<?php echo site_url('client/edit/' . $client['clientId']) ?>" class="btn btn-primary">Modifier</a>
            <!--<a href="<?php echo site_url('client/delete/' . $client['clientId']) ?>" class="btn btn-danger">Supprimer</a>-->
            <a href="<?php echo site_url('client/get_commande_client/' . $client['clientId']) ?>" class="btn btn-success">Voir ses commandes</a>


        </article>
    </section><br>

<?php endforeach ?>