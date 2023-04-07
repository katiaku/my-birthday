<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->setLayout('default');
?>

<div class="btn-group w-100 my-3" role="group">
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
</div>
<div class="card text-secondary mb-5 border-success border-2 shadow">
    <div class="container">
        <table>
            <tr>
                <th><?= __('FirstName') ?></th>
                <td><?= h($user->firstName) ?></td>
            </tr>
            <tr>
                <th><?= __('LastName') ?></th>
                <td><?= h($user->lastName) ?></td>
            </tr>
            <tr>
                <th><?= __('UserName') ?></th>
                <td><?= h($user->userName) ?></td>
            </tr>
            <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th><?= __('Color') ?></th>
                <td><?= h($user->color) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th><?= __('BirthDate') ?></th>
                <td><?= h($user->birthDate) ?></td>
            </tr>
            <tr>
                <th><?= __('Is Active') ?></th>
                <td><?= $user->is_active ? __('Yes') : __('No'); ?></td>
            </tr>
        </table>
        <div class="related">
            <h4 class="text-center fw-semibold text-success"><?= __('Related Birthday Guests') ?></h4>
            <?php if (!empty($user->birthday_guests)) : ?>
            <div class="table-responsive">
                <table>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Name') ?></th>
                        <th><?= __('Surname') ?></th>
                        <th><?= __('Email') ?></th>
                        <th><?= __('Birthday Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($user->birthday_guests as $birthdayGuests) : ?>
                    <tr>
                        <td><?= h($birthdayGuests->id) ?></td>
                        <td><?= h($birthdayGuests->name) ?></td>
                        <td><?= h($birthdayGuests->surname) ?></td>
                        <td><?= h($birthdayGuests->email) ?></td>
                        <td><?= h($birthdayGuests->birthday_id) ?></td>
                        <td><?= h($birthdayGuests->user_id) ?></td>
                        <td><?= h($birthdayGuests->created) ?></td>
                        <td><?= h($birthdayGuests->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'BirthdayGuests', 'action' => 'view', $birthdayGuests->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'BirthdayGuests', 'action' => 'edit', $birthdayGuests->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'BirthdayGuests', 'action' => 'delete', $birthdayGuests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayGuests->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4 class="text-center fw-semibold text-success"><?= __('Related Birthdays') ?></h4>
            <?php if (!empty($user->birthdays)) : ?>
            <div class="table-responsive">
                <table>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Title') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Day') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($user->birthdays as $birthdays) : ?>
                    <tr>
                        <td><?= h($birthdays->id) ?></td>
                        <td><?= h($birthdays->title) ?></td>
                        <td><?= h($birthdays->user_id) ?></td>
                        <td><?= h($birthdays->day) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Birthdays', 'action' => 'view', $birthdays->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Birthdays', 'action' => 'edit', $birthdays->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Birthdays', 'action' => 'delete', $birthdays->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdays->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
