
<br><br><br>
    <pre>
        <?php var_dump($_SESSION); ?>
    </pre>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
        <h2><?= __('Se connecter') ?></h2>
        <br><br>
        <span>Nom d'utilisateur</span>
        <?php
        echo $this->Form->input('username', ['class' => 'form', 'label' => false]);
        ?>
        <span>Mot de passe</span>
        <?php
        echo $this->Form->input('password', ['class' => 'form', 'label' => false]);
    ?>
    <?= $this->Form->button(__('Se connecter'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
