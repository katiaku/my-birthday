<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
$this->setLayout('default');
?>

<div class="users index content border border-2 border-success shadow">
    <h3 class="text-center fw-bold fs-1 text-success"><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table class="table table-borderless table-hover mt-4">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstName') ?></th>
                    <th><?= $this->Paginator->sort('lastName') ?></th>
                    <th><?= $this->Paginator->sort('userName') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('birthDate') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th class="actions text-body-secondary"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->firstName) ?></td>
                    <td><?= h($user->lastName) ?></td>
                    <td><?= h($user->userName) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->birthDate) ?></td>
                    <td><?= h($user->color) ?></td>
                    <td><?= $this->IsActive->isActiveBadge($user->is_active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator mt-4">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="text-muted"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-warning btn-lg w-100 mt-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
    <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'btn btn-warning btn-lg w-100 mt-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
</div>

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
