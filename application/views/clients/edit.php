<h1><?php echo $title ?></h1>

<?php echo validation_errors(); ?>
<?php echo form_open('client/edit/' . $single_client['clientId']); ?>


  <div class="form-group">
    <label for="nomClient">Nom</label>
    <input type="text" class="form-control" name="nomClient" value="<?php echo $single_client['nomClient']; ?>">
  </div>
  <div class="form-group">
    <label for="numClient">Numéro de client</label>
    <input type="number" class="form-control" name="numClient" value="<?php echo $single_client['numClient']; ?>">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" name="adresse" value="<?php echo $single_client['adresse']; ?>">
  </div>
  <div class="form-group">
    <label for="numTel">Numéro de téléphone</label>
    <input type="text" class="form-control" name="numTel" value="<?php echo $single_client['numTel']; ?>">
  </div>
  <div class="form-group">
    <label for="mail">Mail</label>
    <input type="email" class="form-control" name="mail" value="<?php echo $single_client['mail']; ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Valider</button>

</form>