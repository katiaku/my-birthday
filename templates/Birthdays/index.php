<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Birthday> $birthdays
 */
$this->setLayout('default');
?>

<div class="birthdays index content border border-2 border-success shadow">
    <h3 class="text-center fw-bold fs-1 text-success"><?= __('Birthdays') ?><span> </span><i class="bi bi-calendar-check-fill"></i></h3>
    <div class="table-responsive">
        <table class="table table-borderless table-hover mt-4">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('day') ?></th>
                    <th class="actions text-body-secondary"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birthdays as $birthday): ?>
                <tr>
                    <td><?= $this->Number->format($birthday->id) ?></td>
                    <td><?= h($birthday->title) ?></td>
                    <td><?= $birthday->has('user') ? $this->Html->link($birthday->user->id, ['controller' => 'Users', 'action' => 'view', $birthday->user->id]) : '' ?></td>
                    <td><?= h($birthday->day) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $birthday->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $birthday->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $birthday->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthday->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator mt-4">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="text-muted"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <?= $this->Html->link(__('New Birthday'), ['action' => 'add'], ['class' => 'btn btn-warning btn-lg w-100 mt-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
</div>

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
