<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BirthdayGuest> $birthdayGuests
 */
?>
<div class="birthdayGuests index content">
    <?= $this->Html->link(__('New Birthday Guest'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Birthday Guests') ?></h3>
    <div class="table-responsive">
        <table>
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
                    <th class="actions"><?= __('Actions') ?></th>
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
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
