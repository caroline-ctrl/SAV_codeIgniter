<h1><U>Les articles</U></h1>

<h5><a href="<?php echo site_url('page/view') ?>">Retour à la page d'accueil</a></h5><br>

<?php foreach($produit as $produits): ?>
<?php $this->load->helper('url'); ?>
<section class="card">
  <h5 class="card-header"><?php echo $produits['nomProduit'] ?></h5>
  <article class="card-body">
    <p class="card-text"><?php echo $produits['descriptProduit'] ?></p>
    <a href="<?php echo site_url('article/view_article_id/' . $produits['produitId']) ?>" class="btn btn-primary">Detail article</a>
  </article>
</section><br>

<?php endforeach; ?>
