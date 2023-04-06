<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayItem $birthdayItem
 * @var \Cake\Collection\CollectionInterface|string[] $birthdays
 */
$this->setLayout('default');
?>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card mb-5 shadow">
                <div class="card-header bg-success py-3 text-white text-center fs-3 fw-semibold"><?= __('Add Birthday Item') ?></div>
                <div class="card-body border rounded-bottom border-2 border-success">
                    <?= $this->Form->create($birthdayItem) ?>
                    <fieldset class="mt-3 mb-2 text-secondary">
                        <?php
                            echo $this->Form->control('name', ['class' => 'form-control fs-4']);
                            echo $this->Form->control('units', ['class' => 'form-control fs-4 mt-3']);
                            echo $this->Form->control('birthday_id', ['class' => 'form-control fs-4', 'options' => $birthdays]);
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-warning btn-lg w-100 mt-2 fw-semibold fs-4 text-body-secondary']) ?>
                    <?= $this->Html->link(__('List Birthday Items'), ['action' => 'index'], ['class' => 'btn btn-warning btn-lg w-100 mt-2 mb-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->Html->css('/bootstrap/css/bootstrap.min') ?>
<?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>
<?= $this->Html->script('/bootstrap/css/bootstrap.bundle.min') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
