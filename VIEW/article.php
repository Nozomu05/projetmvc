<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $article['nom_produit'] ?></h1>


    <div>
        <img src="<?= $article['image'] ?>" alt="">
        <p>
            <?= $article['description'] ?>
        </p>

        <small>Date : <?= $article['prix'] ?></small>
        <a href="?page=commander">Commander</a>
        <br>

    </div>
</body>
</html>