<br>
<br>
<br>
<div class="produits view large-9 medium-8 columns content">
    <h1 style="text-align: center">
    <img src="<?= $produit->img; ?>" alt=""><br/>
    <?= h($produit->name) ?></h1>

    <div class="center" style="text-align: center;">
            <h2>Prix</h2><br/>
            <span style="color: red;"><?= h($produit->prix) ?></span>
            <br>
            <h2>Avantage</h2><br/>
            <span style="color: red;"><?= h($produit->avantage) ?></span>

</div>
