<h1>Formulaire de connection</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('admin/connect'); ?>


  <div class="form-group">
    <label for="nomAdmin">Nom</label>
    <input type="text" class="form-control" name="nomAdmin">
  </div>
  <div class="form-group">
    <label for="psswdAdmin">Mot de passe</label>
    <input type="text" class="form-control" name="psswdAdmin">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Valider</button>
</form>