<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Birthday> $birthdays
 */
?>
<div class="birthdays index content">
    <?= $this->Html->link(__('New Birthday'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Birthdays') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('day') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birthdays as $birthday): ?>
                <tr>
                    <td><?= $this->Number->format($birthday->id) ?></td>
                    <td><?= h($birthday->title) ?></td>
                    <td><?= $birthday->has('user') ? $this->Html->link($birthday->user->id, ['controller' => 'Users', 'action' => 'view', $birthday->user->id]) : '' ?></td>
                    <td><?= h($birthday->day) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $birthday->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $birthday->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $birthday->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthday->id)]) ?>
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
