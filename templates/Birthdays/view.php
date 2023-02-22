<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Birthday $birthday
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Birthday'), ['action' => 'edit', $birthday->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Birthday'), ['action' => 'delete', $birthday->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthday->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Birthdays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Birthday'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdays view content">
            <h3><?= h($birthday->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($birthday->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $birthday->has('user') ? $this->Html->link($birthday->user->id, ['controller' => 'Users', 'action' => 'view', $birthday->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($birthday->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Day') ?></th>
                    <td><?= h($birthday->day) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
