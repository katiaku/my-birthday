<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayItem $birthdayItem
 * @var \Cake\Collection\CollectionInterface|string[] $birthdays
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Birthday Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdayItems form content">
            <?= $this->Form->create($birthdayItem) ?>
            <fieldset>
                <legend><?= __('Add Birthday Item') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('units');
                    echo $this->Form->control('birthday_id', ['options' => $birthdays]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
