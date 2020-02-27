<h1><?php echo $title ?></h1>

<?php echo validation_errors(); ?>
<?php echo form_open('client/create'); ?>


  <div class="form-group">
    <label for="nomClient">Nom</label>
    <input type="nomClient" class="form-control" name="nomClient">
  </div>
  <div class="form-group">
    <label for="numClient">Numéro de client</label>
    <input type="numClient" class="form-control" name="numClient">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="adresse" class="form-control" name="adresse">
  </div>
  <div class="form-group">
    <label for="numTel">Numéro de téléphone</label>
    <input type="numTel" class="form-control" name="numTel">
  </div>
  <div class="form-group">
    <label for="mail">Mail</label>
    <input type="mail" class="form-control" name="mail">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>
