<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array(
	'Products' => array('index'),
	$model->id_producto,
);

$this->menu = array(
	array('label' => 'Listar Productos', 'url' => array('index')),
	array('label' => '| Crear Producto', 'url' => array('create')),
	array('label' => '| Actualizar Producto', 'url' => array('update', 'id' => $model->id_producto)),
	array('label' => '| Eliminar Producto', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_producto), 'confirm' => '¿Está seguro que desea eliminar este elemento?')),
	array('label' => '| Administrar Productos', 'url' => array('admin'), 'visible' => Yii::app()->user->username === 'admin' ? true : false),
);
?>

<h1>Producto #<?php echo $model->id_producto; ?></h1>
<hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'idMarca.marca',
		'descripcion',
		'stock',
	),
	'htmlOptions' => ['class' => 'table table-bordered table-striped table-sm '],

)); ?>