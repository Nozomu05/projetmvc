<h1>accueil</h1>
<h2><?= $lastarticle['nom_produit'] ?></h2>


<div>
    <img src="<?= $lastarticle['image'] ?>" alt="">
    <p>
        <?= $lastarticle['description'] ?>
    </p>

    <small>Prix : <?= $lastarticle['prix'] ?></small>
    <br>

</div>