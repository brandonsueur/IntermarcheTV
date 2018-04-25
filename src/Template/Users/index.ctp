<br>
<br>
<br>
<br>
<a class="btn-success" href="http://127.0.0.1/cakephp/users/login"> Se connecter</a>
<a class="btn-danger" href="http://127.0.0.1/cakephp/users/logout"> Se déconnecter</a>
<div class="produits index large-9 medium-8 columns content">
    <h3><?= __('Utilisateurs') ?></h3>

    <table cellpadding="0" cellspacing="0">

        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('role') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->role ?></td>
                <td class="actions">
                        <div class="container">
                            <div class="grid-4">

                                <?= $this->Html->link(__('Regardé'), ['action' => 'view', $user->id], ['class' => 'btn-info']) ?>
                            </div>

                            <div class="grid-4">
                                <?= $this->Html->link(__('Édité'), ['action' => 'edit', $user->id], ['class' => 'btn-warning']) ?>
                            </div>

                            <div class="grid-4">
                                <?= $this->Form->postLink(__('Supprimé'), ['action' => 'delete', $user->id], [
                                'style' => 'margin-left: -21px;', 'class' => 'btn-danger', 'confirm' => __('Voulez vous vraiment supprimer ce user # {0}?', $user->id)]) ?>
                            </div>
                        </div>
                    </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev(__('Avant')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Après')) ?>
        </ul>
    </div>
</div>
