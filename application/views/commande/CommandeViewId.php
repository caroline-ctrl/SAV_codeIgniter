<h1>Détail de la commande</h1>

<h5><a href="<?php echo site_url('commande/view_commande') ?>">Retour à la liste des commandes</a></h5><br>

<?php $this->load->helper('url'); ?>

<section class="card">
    <h5 class="card-header"><?php echo $single_commande['nomCommande'] ?></h5>
    <article class="card-body">
        <p class="card-text"><?php echo $single_commande['dateCommande'] ?></p>
        <p class="card-text">Commande livrée <?php echo $single_commande['isDelivred'] ?>  (1 = oui, 0 = non)</p>
        <p class="card-text">Detail produit : <?php echo $single_commande['fk_clientId'] ?></p>
    </article>
</section><br>