<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BirthdayGuest> $birthdayGuests
 */
$this->setLayout('default');
?>

<div class="birthdayGuests index content border border-2 border-success shadow">
    <h3 class="text-center fw-bold fs-1 text-success"><?= __('Birthday Guests') ?></h3>
    <div class="table-responsive">
        <table class="table table-borderless table-hover mt-4">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('surname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('birthday_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions text-body-secondary"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birthdayGuests as $birthdayGuest): ?>
                <tr>
                    <td><?= $this->Number->format($birthdayGuest->id) ?></td>
                    <td><?= h($birthdayGuest->name) ?></td>
                    <td><?= h($birthdayGuest->surname) ?></td>
                    <td><?= h($birthdayGuest->email) ?></td>
                    <td><?= $birthdayGuest->has('birthday') ? $this->Html->link($birthdayGuest->birthday->title, ['controller' => 'Birthdays', 'action' => 'view', $birthdayGuest->birthday->id]) : '' ?></td>
                    <td><?= $birthdayGuest->has('user') ? $this->Html->link($birthdayGuest->user->id, ['controller' => 'Users', 'action' => 'view', $birthdayGuest->user->id]) : '' ?></td>
                    <td><?= h($birthdayGuest->created) ?></td>
                    <td><?= h($birthdayGuest->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $birthdayGuest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $birthdayGuest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $birthdayGuest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayGuest->id)]) ?>
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
    <?= $this->Html->link(__('New Birthday Guest'), ['action' => 'add'], ['class' => 'btn btn-warning btn-lg w-100 mt-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
</div>

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
