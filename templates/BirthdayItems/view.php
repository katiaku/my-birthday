<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayItem $birthdayItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Birthday Item'), ['action' => 'edit', $birthdayItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Birthday Item'), ['action' => 'delete', $birthdayItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Birthday Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Birthday Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdayItems view content">
            <h3><?= h($birthdayItem->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($birthdayItem->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= $birthdayItem->has('birthday') ? $this->Html->link($birthdayItem->birthday->title, ['controller' => 'Birthdays', 'action' => 'view', $birthdayItem->birthday->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($birthdayItem->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Units') ?></th>
                    <td><?= $this->Number->format($birthdayItem->units) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($birthdayItem->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($birthdayItem->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
