<h1>Commander</h1>

<form action="POST" id="commande-form">
    <label for="velo-select">Selectionner un velo</label>
    <select name="select-velo-commande" id="velo-select">
    <option value="">--Choisir une option--</option>

    <?php foreach ($Allarticle as $article) { ?>

    <option value="<?= $article['id_produit'] ?>"><?= $article['nom_produit'] ?></option>

    <?php } ?>

    </select>
    <input name="nom-commande" type="text" placeholder="Nom">
    <input name="prenom-commande" type="text" placeholder="Prénom">
    <input name="email-commande" type="text" placeholder="Email">
    <textarea name="message-commande" placeholder="Message"></textarea>
    <input name="sendbutton-commande" type="submit">
</form>