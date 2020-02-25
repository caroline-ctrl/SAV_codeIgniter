<h1>Les articles</h1>

<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5>

<?php foreach($produit as $produits): ?>
<?php $this->load->helper('url'); ?>
<section class="card">
  <h5 class="card-header"><?php echo $produits['nomProduit'] ?></h5>
  <article class="card-body">
    <p class="card-text"><?php echo $produits['descriptProduit'] ?></p>
    <a href="#" class="btn btn-primary">Detail article</a>
  </article>
</section><br>

<?php endforeach; ?>
