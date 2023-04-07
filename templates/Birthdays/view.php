<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Birthday $birthday
 */
$this->setLayout('default');
?>

<div class="btn-group w-100 my-3" role="group">
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('Edit Birthday'), ['action' => 'edit', $birthday->id], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Form->postLink(__('Delete Birthday'), ['action' => 'delete', $birthday->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthday->id), 'class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('List Birthdays'), ['action' => 'index'], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
    <button type="button" class="btn btn-lg btn-success"><?= $this->Html->link(__('New Birthday'), ['action' => 'add'], ['class' => 'side-nav-item text-white fw-bold']) ?></button>
</div>
<div class="card text-secondary mb-5 border-success border-2 shadow">
    <div class="container">
        <h3 class="fw-bold text-success text-center mt-3"><?= h($birthday->title) ?></h3>
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

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
