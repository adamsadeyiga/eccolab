<?php
/** @var  $model User */
/** @var  $this \app\core\View */
?>
<?php $this->title = 'Login'?>

<h1>Sign in</h1>

<?php use app\core\form\Form;
use app\models\User;

$form = Form::begin('', "post")?>

<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end()?>
