<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	'Administrar',
);

$this->menu = array(
	array('label' => 'Listar Productos |', 'url' => array('index')),
	array('label' => 'Crear Producto', 'url' => array('create')),
);

?>

<h1>Administrar Productos</h1>

<hr>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'product-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'id_marca',
		'descripcion',
		array(
			'name' => 'codigo',
			'htmlOptions' => array('width' => '40px'),
		),
		array(
			'class' => 'CButtonColumn',
			'buttons' => array(
				'view' => array(
					'options' => array(
						'style' => 'width:20px;text:white'
					),
				),
			),
			'htmlOptions' => array('width' => '70px'),
		)
	),
	'itemsCssClass' => 'table table-bordered table-striped table-sm'
)); ?>