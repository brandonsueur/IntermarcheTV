
<br><br><br>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <h2><?= __('Éditer l\'utilisateur') ?></h2>
        <br><br>
        <span>Nom d'utilisateur</span>
        <?php
        echo $this->Form->input('username', ['class' => 'form', 'label' => false]);
        ?>
        <span>Role</span>
        <?php
        echo $this->Form->input('role', ['class' => 'form', 'label' => false]);
        ?>

        <span>Mot de passe</span>
        <?php
        echo $this->Form->input('password', ['class' => 'form', 'label' => false]);
    ?>
    <?= $this->Form->button(__('Ajouté'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
