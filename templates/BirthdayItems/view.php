<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayItem $birthdayItem
 */
$this->setLayout('default');
?>

<div class="btn-group w-100 my-3" role="group">
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('Edit Birthday Item'), ['action' => 'edit', $birthdayItem->id], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Form->postLink(__('Delete Birthday Item'), ['action' => 'delete', $birthdayItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayItem->id), 'class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('List Birthday Items'), ['action' => 'index'], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('New Birthday Item'), ['action' => 'add'], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
</div>
<div class="card text-secondary mb-5 border-success border-2 shadow">
    <div class="container">
        <h3 class="fw-bold text-success text-center mt-3"><?= h($birthdayItem->name) ?></h3>
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

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
