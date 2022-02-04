<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';

?>

<h2 class="text-center mt-5 mb-4">Login</h2>

<div class="d-flex justify-content-center ">
	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'login-form',
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
		),
		'htmlOptions' => ['class' => 'border border-light p-5 rounded ']
	)); ?>

	<div class="form-row mb-4">
		<?php echo $form->labelEx($model, 'Usuario:'); ?>
		<?php echo $form->textField($model, 'username', array('class' => 'form-control', 'value' => '')); ?>
		<?php echo $form->error($model, 'username'); ?>
	</div>

	<div class="form-row mb-4">
		<?php echo $form->labelEx($model, 'Password:'); ?>
		<?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
		<?php echo $form->error($model, 'password'); ?>

	</div>

	<div class="form-row d-flex justify-content-center ">
		<?php echo CHtml::submitButton('Acceder', ['class' => 'btn btn-elegant btn-block my-4']); ?>
	</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->