<br>
<br>
<br>
<?= $this->Form->create($produit) ?>
<h1>Ajout d'un produit</h1>
    <?php
        echo $this->Form->input('name', ['class' => 'form']);
        echo $this->Form->input('img', ['class' => 'form']);
        echo $this->Form->input('prix_base', ['class' => 'form']);
        echo $this->Form->input('prix_fin', ['class' => 'form']);
        echo $this->Form->input('avantage', ['class' => 'form']);
    ?>
<?= $this->Form->button(__('Validé'), ['class' => 'btn-success']) ?>
<?= $this->Form->end() ?>