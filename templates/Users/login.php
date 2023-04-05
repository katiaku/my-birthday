<?php
/**
 * @var \App\View\AppView $this
 * @var @var \App\Model\Entity\User $user
 */
$this->setLayout('default');
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title text-center"><?= __('Please enter your email and password') ?></h3>
                </div>
                <div class="card-body border border-2 border-success rounded-bottom">
                    <?= $this->Form->create() ?>
                    <div class="form-group">
                        <?= $this->Form->control('email', ['class' => 'form-control fs-3', 'label' => ['text' => 'Email', 'class' => 'text-body-secondary']]) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('password', ['class' => 'form-control fs-3', 'label' => ['text' => 'Password', 'class' => 'text-body-secondary']]) ?>
                    </div>
                    <?= $this->Form->button(__('Login'), ['class' => 'btn btn-warning btn-lg w-100 mt-3 fw-semibold fs-4 text-body-secondary']) ?>
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
