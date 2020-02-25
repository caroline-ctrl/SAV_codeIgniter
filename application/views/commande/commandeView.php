<h1>Les commandes</h1>

<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5><br>

<?php foreach ($commandes as $commande) : ?>
    <section class="card">
        <h5 class="card-header"><?php echo $commande['nomCommande'] ?></h5>
        <article class="card-body">
            <p class="card-text"><?php echo $commande['dateCommande'] ?></p>
            <a href="#" class="btn btn-primary">Detail article</a>
        </article>
    </section><br>


<?php endforeach ?>