
<br><br><br>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <h2><?= __('Ajouter un utilisateur') ?></h2>
        <br><br>
        <span>Votre nom d'utilisateur</span>
        <?php
        echo $this->Form->input('username', ['class' => 'form', 'label' => false]);
        ?>
        <span>Role</span>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'equipe' => 'Équipe'], 'class' => 'form', 'label' => false
        ]) ?>
        <span>Votre mot de passe</span>
        <?php
        echo $this->Form->input('password', ['class' => 'form', 'label' => false]);
    ?>
    <?= $this->Form->button(__('Ajouté'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
