<h1>Les articles</h1>

<?php foreach($produit as $produits): ?>
<?php $this->load->helper('url'); ?>
<div class="card">
  <h5 class="card-header"><?php echo $produits['nomProduit'] ?></h5>
  <div class="card-body">
    <p class="card-text"><?php echo $produits['descriptProduit'] ?></p>
    <a href="#" class="btn btn-primary">Detail article</a>
  </div>
</div>

<?php endforeach; ?>
