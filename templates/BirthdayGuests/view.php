<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayGuest $birthdayGuest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Birthday Guest'), ['action' => 'edit', $birthdayGuest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Birthday Guest'), ['action' => 'delete', $birthdayGuest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayGuest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Birthday Guests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Birthday Guest'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdayGuests view content">
            <h3><?= h($birthdayGuest->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($birthdayGuest->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Surname') ?></th>
                    <td><?= h($birthdayGuest->surname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($birthdayGuest->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Birthday') ?></th>
                    <td><?= $birthdayGuest->has('birthday') ? $this->Html->link($birthdayGuest->birthday->title, ['controller' => 'Birthdays', 'action' => 'view', $birthdayGuest->birthday->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $birthdayGuest->has('user') ? $this->Html->link($birthdayGuest->user->id, ['controller' => 'Users', 'action' => 'view', $birthdayGuest->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($birthdayGuest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($birthdayGuest->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($birthdayGuest->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
