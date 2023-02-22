<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BirthdayItem> $birthdayItems
 */
?>
<div class="birthdayItems index content">
    <?= $this->Html->link(__('New Birthday Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Birthday Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('units') ?></th>
                    <th><?= $this->Paginator->sort('birthday_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birthdayItems as $birthdayItem): ?>
                <tr>
                    <td><?= $this->Number->format($birthdayItem->id) ?></td>
                    <td><?= h($birthdayItem->name) ?></td>
                    <td><?= $this->Number->format($birthdayItem->units) ?></td>
                    <td><?= $birthdayItem->has('birthday') ? $this->Html->link($birthdayItem->birthday->title, ['controller' => 'Birthdays', 'action' => 'view', $birthdayItem->birthday->id]) : '' ?></td>
                    <td><?= h($birthdayItem->created) ?></td>
                    <td><?= h($birthdayItem->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $birthdayItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $birthdayItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $birthdayItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayItem->id)]) ?>
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
