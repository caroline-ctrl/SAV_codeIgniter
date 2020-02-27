<h1>CREER UN NOUVEL ARTICLE</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('article/create'); ?>


  <div class="form-group">
    <label for="nomProduit">Nom</label>
    <input type="nomProduit" class="form-control" name="nomProduit">
  </div>
  <div class="form-group">
    <label for="descriptProduit">Description du produit</label>
    <input type="descriptProduit" class="form-control" name="descriptProduit">
  </div>
  <div class="form-group">
    <label for="qttProduit">Quantité</label>
    <input type="qttProduit" class="form-control" name="qttProduit">
  </div>
  <div class="form-group">
    <label for="isAvailable">Disponible</label>
    <input type="isAvailable" class="form-control" name="isAvailable">
  </div>
  <div class="form-group">
    <label for="prixProduit">Prix</label>
    <input type="prixProduit" class="form-control" name="prixProduit">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Valider</button>

</form>