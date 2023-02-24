<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayGuest $birthdayGuest
 * @var string[]|\Cake\Collection\CollectionInterface $birthdays
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $birthdayGuest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayGuest->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Birthday Guests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdayGuests form content">
            <?= $this->Form->create($birthdayGuest) ?>
            <fieldset>
                <legend><?= __('Edit Birthday Guest') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('surname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('birthday_id', ['options' => $birthdays]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
