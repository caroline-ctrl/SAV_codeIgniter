<h1><U>Les commandes</U></h1>

<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5><br>

<?php foreach ($commandes as $commande) : ?>
    <section class="card">
        <h5 class="card-header"><?php echo $commande['nomCommande'] ?></h5>
        <article class="card-body">
            <p class="card-text"><?php echo $commande['dateCommande'] ?></p>
            <a href="<?php echo site_url('commande/view_commande_id/' . $commande['commandeId']) ?>" class="btn btn-primary">Detail commande</a>
        </article>
    </section><br>


<?php endforeach ?>