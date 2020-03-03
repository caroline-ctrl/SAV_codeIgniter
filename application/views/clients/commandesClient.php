
<h1>LES COMMANDES</h1>
<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5>
<h5><a href="<?php echo site_url('clients/viewActif') ?>">Voir les clients</a></h5><br>

<?php foreach ($content_commandes as $content_commande): ?>



<section class="card">
    <h5 class="card-header"><?php echo $content_commande['nomCommande'] ?></h5>
    <article class="card-body">
        <p class="card-text"><?php echo $content_commande['dateCommande'] ?></p>
        <p class="card-text">Commande livrée <?php echo $content_commande['isDelivred'] ?>  (1 = oui, 0 = non)</p>
        <a href="<?php echo site_url('client/get_product_client/' . $content_commande['commandeId']) ?>" class="btn btn-primary">Le contenu</a>

    </article>
</section><br> 

<?php endforeach ?>