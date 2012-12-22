<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
	array('label'=>'Agregar', 'url'=>array('create')),
	array('label'=>'Detalle', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1><?php echo $model->descripcion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>