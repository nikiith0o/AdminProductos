<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'product-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
		'htmlOptions' => ['class' => 'border border-light p-5 rounded needs-validation']
	)); ?>

	<p class="note">Todos los campos con <span class="required">*</span> son requeridos.</p>

	<?php #echo $form->errorSummary($model); 
	?>

	<div class="form-row mb-4">

		<div class="col">
			<?php echo $form->labelEx($model, '*Código:'); ?>
			<?php echo $form->textField($model, 'codigo', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'codigo', array('class' => 'text-danger')); ?>
		</div>

		<div class="col">
			<?php echo $form->labelEx($model, '*Sku:'); ?>
			<?php echo $form->textField($model, 'sku', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'sku', array('class' => 'text-danger')); ?>
		</div>

	</div>

	<div class="form-row mb-4">

		<div class="col">

			<?php echo $form->labelEx($model, '*Nombre:'); ?>
			<?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'nombre', array('class' => 'text-danger')); ?>
		</div>

		<div class="col">
			<?php echo $form->labelEx($model, '*ID_marca:'); ?>
			<?php echo $form->textField($model, 'id_marca', array('class' => 'form-control')); ?>
			<?php echo $form->error($model, 'id_marca', array('class' => 'text-danger')); ?>
		</div>

	</div>

	<div class="form-row mb-4">

		<div class="col">
			<?php echo $form->labelEx($model, '*Descripción:'); ?>
			<?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
			<?php echo $form->error($model, 'descripcion', array('class' => 'text-danger')); ?>
		</div>

		<div class="col">
			<?php echo $form->labelEx($model, '*Stock:'); ?>
			<?php echo $form->textField($model, 'stock', array('class' => 'form-control')); ?>
			<?php echo $form->error($model, 'stock', array('class' => 'text-danger')); ?>
		</div>
	</div>

	<div class="form-row mb-4">
		<div class="col">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save', ['class' => 'btn btn-default rounded']); ?>
		</div>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->