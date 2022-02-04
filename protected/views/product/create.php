<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	'Crear',
);

$this->menu = array(
	array('label' => 'Listar Productos', 'url' => array('index')),
	array('label' => '| Administrar Productos', 'url' => array('admin'), 'visible' => Yii::app()->user->username === 'admin' ? true : false),
);
?>

<h1 class="mt-2">Crear Producto</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>