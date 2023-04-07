<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BirthdayItem> $birthdayItems
 */
$this->setLayout('default');
?>

<div class="birthdayItems index content border border-2 border-success shadow">
    <h3 class="text-center fw-bold fs-1 text-success"><?= __('Birthday Items') ?><span> </span><i class="bi bi-cart-check-fill"></i></h3>
    <div class="table-responsive">
        <table class="table table-borderless table-hover mt-4">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('units') ?></th>
                    <th><?= $this->Paginator->sort('birthday_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions text-body-secondary"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($birthdayItems as $birthdayItem): ?>
                <tr>
                    <td><?= $this->Number->format($birthdayItem->id) ?></td>
                    <td><?= h($birthdayItem->name) ?></td>
                    <td><?= $this->Number->format($birthdayItem->units) ?></td>
                    <td><?= $birthdayItem->has('birthday') ? $this->Html->link($birthdayItem->birthday->title, ['controller' => 'Birthdays', 'action' => 'view', $birthdayItem->birthday->id]) : '' ?></td>
                    <td><?= h($birthdayItem->created) ?></td>
                    <td><?= h($birthdayItem->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $birthdayItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $birthdayItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $birthdayItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayItem->id)]) ?>
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
    <?= $this->Html->link(__('New Birthday Item'), ['action' => 'add'], ['class' => 'btn btn-warning btn-lg w-100 mt-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
</div>

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
