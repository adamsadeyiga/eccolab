<?php
/** @var  $model User */
/** @var  $this \app\core\View */
?>
<?php $this->title = 'Register'?>

<h1>Create an account</h1>

<?php use app\core\form\Form;
use app\models\User;

$form = Form::begin('', "post")?>
<div class="row">
    <div class="col"><?php echo $form->field($model, 'firstname') ?></div>
    <div class="col"><?php echo $form->field($model, 'lastname') ?></div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end()?>

