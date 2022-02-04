<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Productos',
);

$this->menu = array(
	array('label' => 'Nuevo producto', 'url' => array('create')),
	array('label' => '| Administrar productos', 'url' => array('admin'), 'visible' => Yii::app()->user->username === 'admin' ? true : false),
);
?>

<h1>Productos</h1>
<hr>

<div class="row">

	<div class="col-lg-12 mt-2">

		<?php
		$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider' => $dataProvider,
			'columns' => array(
				'id_producto',
				'codigo',
				'sku',
				'nombre',
				'idMarca.marca',
				'descripcion',
				'stock'
			),
			'cssFile' => true,

			'itemsCssClass' => 'table table-bordered table-striped table-sm '
		));
		?>

	</div>

</div>