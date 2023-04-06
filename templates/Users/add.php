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
            <div class="card mb-5">
                <div class="card-header bg-success py-3 text-white text-center fs-3 fw-semibold"><?= __('Add User') ?></div>
                <div class="card-body border rounded-bottom border-2 border-success">
                    <?= $this->Form->create($user) ?>
                    <fieldset class="mt-3 mb-2 text-secondary">
                        <?php
                            echo $this->Form->control('firstName', ['class' => 'form-control fs-4', 'label' => __('First Name')]);
                            echo $this->Form->control('lastName', ['class' => 'form-control fs-4 mt-3', 'label' => __('Last Name')]);
                            echo $this->Form->control('userName', ['class' => 'form-control fs-4', 'label' => __('Username')]);
                            echo $this->Form->control('email', ['class' => 'form-control fs-4', 'label' => __('Email')]);
                            echo $this->Form->control('password', ['class' => 'form-control fs-4', 'label' => __('Password')]);
                            echo $this->Form->control('birthDate', ['class' => 'form-control fs-4', 'label' => __('Birth Date')]);
                            echo $this->Form->control('color', ['class' => 'form-control fs-4', 'label' => __('Favorite Color')]);
                            //echo $this->Form->control('is_active');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-warning btn-lg w-100 mt-2 fw-semibold fs-4 text-body-secondary']) ?>
                    <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-warning btn-lg w-100 mt-2 mb-4 fw-semibold fs-4 text-body-secondary text-uppercase']) ?>
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
