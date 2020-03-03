<h1>LES PRODUITS </h1>
<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5>
<h5><a href="<?php echo site_url('clients/viewActif') ?>">Voir les clients</a></h5><br>

<?php foreach($products as $product): ?>
<section class="card">
    <h5 class="card-header">Produit</h5>
    <article class="card-body">
        <p class="card-text"><?php echo $product['nomProduit'] ?></p>
        <p class="card-text">Description : <?php echo $product['descriptProduit'] ?></p>
        <p class="card-text">Quantité commandée : <?php echo $product['quantite_commande'] ?></p>
        <p class="card-text">Prix : <?php echo $product['prixProduit'] ?></p>
    </article>
</section><br> 
<?php endforeach ?>