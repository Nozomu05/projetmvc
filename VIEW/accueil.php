<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
</body>
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


</body>
</html>