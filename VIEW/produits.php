<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Nos articles</h1>

    <?php foreach ($Allarticle as $article) { ?>
        <div>
            <h2><a href="?page=article&id=<?= $article['id_produit'] ?>"><?= $article['nom_produit'] ?></a></h2>
            <img src="<?= $article['image'] ?>" alt="">
            <a href="?page=commander">Commander</a>
            <a href="?page=article&id=<?= $article['id_produit'] ?>">Plus d'infos</a>
        </div>

    <?php } ?>
</body>
</html>