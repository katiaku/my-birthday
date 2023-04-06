<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->setLayout('default');
?>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card mb-5 shadow">
                <div class="card-header bg-success py-3">
                    <h5 class="card-title text-white text-center fs-3 fw-semibold">Edit User</h5>
                </div>
                <div class="card-body border rounded-bottom border-2 border-success">
                    <?= $this->Form->create($user) ?>
                    <fieldset class="mt-3 mb-2 text-secondary">
                        <div class="form-group mt-3">
                            <?php echo $this->Form->control('firstName', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('lastName', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('userName', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('email', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('password', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('birthDate', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('color', ['class' => 'form-control fs-4']); ?>
                        </div>
                        <div class="form-group mt-3">
                            <?php echo $this->Form->control('is_active'); ?>
                        </div>
                    </fieldset>
                    <?= $this->Form->end() ?>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-warning btn-lg w-100 mt-2 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-warning btn-lg w-100 mt-2 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
                    <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $user->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-lg w-100 mt-4 fw-semibold fs-4 text-white text-uppercase']
                        ) ?>
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
