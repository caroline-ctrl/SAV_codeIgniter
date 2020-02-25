<h1>Les clients</h1>

<h5><a href="<?php echo site_url('page/view') ?>">Retour a la page d'accueil</a></h5><br>

<?php foreach ($clients as $client) : ?>
    <section class="card">
        <h5 class="card-header"><?php echo $client['nomClient'] ?>
            <p>N° client : <?php echo $client['numClient'] ?></p>
        </h5>
        <article class="card-body">
            <p class="card-text"><?php echo $client['adresse'] ?></p>
            <p class="card-text"><?php echo $client['numTel'] ?></p>
            <p class="card-text"><?php echo $client['mail'] ?></p>
            <!-- <a href="#" class="btn btn-primary">Detail article</a> -->
        </article>
    </section><br>

<?php endforeach ?>