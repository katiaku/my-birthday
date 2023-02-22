<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Birthday $birthday
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $birthday->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $birthday->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Birthdays'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="birthdays form content">
            <?= $this->Form->create($birthday) ?>
            <fieldset>
                <legend><?= __('Edit Birthday') ?></legend>
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
