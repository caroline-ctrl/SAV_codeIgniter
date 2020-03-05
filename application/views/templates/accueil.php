<h1><U>ESPACE ADMINISTRATION</U></h1>
<h2>Bienvenue <?php echo $title; ?></h2>

<ul>
    <li><a href="<?php echo site_url('article') ?>">Tous les articles</a></li>
    <li><a href="<?php echo site_url('clients/viewActif') ?>">Tous les clients ACTIFS</a></li>
    <li><a href="<?php echo site_url('clients/viewInactif') ?>">Tous les clients INACTIF</a></li>
    <li><a href="<?php echo site_url('commande') ?>">Toutes les commandes</a></li>
</ul>


<h3><a href="<?php echo site_url('admin/deconnection') ?>">Deconnection</a></h3>



