<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Birthday $birthday
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Birthdays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdays form content">
            <?= $this->Form->create($birthday) ?>
            <fieldset>
                <legend><?= __('Add Birthday') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('day');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
