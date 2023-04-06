<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BirthdayGuest $birthdayGuest
 * @var string[]|\Cake\Collection\CollectionInterface $birthdays
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
$this->setLayout('default');
?>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card mb-5 shadow">
                <div class="card-header bg-success py-3">
                    <h5 class="card-title text-white text-center fs-3 fw-semibold">Edit Birthday Guest</h5>
                </div>
                <div class="card-body border rounded-bottom border-2 border-success">
                    <?= $this->Form->create($birthdayGuest) ?>
                    <fieldset class="mt-3 mb-2 text-secondary">
                        <div class="form-group mt-3">
                            <?php echo $this->Form->control('name', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('surname', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('email', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('birthday_id', ['class' => 'form-control fs-4', 'options' => $birthdays]); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('user_id', ['class' => 'form-control fs-4', 'options' => $users, 'empty' => true]); ?>
                        </div>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-warning btn-lg w-100 mt-2 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
                    <?= $this->Html->link(__('List Birthday Guests'), ['action' => 'index'], ['class' => 'btn btn-warning btn-lg w-100 mt-2 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
                    <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $birthdayGuest->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $birthdayGuest->id), 'class' => 'btn btn-danger btn-lg w-100 mt-4 fw-semibold fs-4 text-white text-uppercase']
                    ) ?>
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
