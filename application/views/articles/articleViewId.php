<h1><U><?php echo $single_produit['nomProduit'] ?></U></h1>

<h5><a href="<?php echo site_url('article/view_article') ?>">Retour à la liste d'article</a></h5><br>

<?php $this->load->helper('url'); ?>

<section class="card">
    <h5 class="card-header"><?php echo $single_produit['nomProduit'] ?></h5>
    <article class="card-body">
        <p class="card-text"><?php echo $single_produit['descriptProduit'] ?></p>
        <p class="card-text">Quantité restante : <?php echo $single_produit['qttProduit'] ?></p>
        <p class="card-text">Disponible <?php echo $single_produit['isAvailable'] ?> (1 = oui, 0 = non)</p>
        <p class="card-text">Prix : <?php echo $single_produit['prixProduit'] ?> €</p>
    </article>
</section><br>