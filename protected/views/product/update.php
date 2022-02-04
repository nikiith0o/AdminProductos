<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	$model->id_producto => array('view', 'id' => $model->id_producto),
	'Actualizar',
);

$this->menu = array(
	array('label' => 'Listar Productos |', 'url' => array('index')),
	array('label' => 'Crear Producto |', 'url' => array('create')),
	array('label' => 'Ver Producto |', 'url' => array('view', 'id' => $model->id_producto)),
	array('label' => 'Administrar Productos', 'url' => array('admin')),
);
?>

<h1>Actualizar Producto <?php echo $model->id_producto; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>