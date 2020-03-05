<h1>Formulaire d'inscritption</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('admin/create'); ?>


  <div class="form-group">
    <label for="nomAdmin">Nom</label>
    <input type="text" class="form-control" name="nomAdmin">
  </div>
  <div class="form-group">
    <label for="psswdAdmin">Mot de passe</label>
    <input type="text" class="form-control" name="psswdAdmin">
  </div>
  <div class="form-group">
    <label for="psswdAdmin1">Confirmation du mot de passe</label>
    <input type="text" class="form-control" name="psswdAdmin1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>