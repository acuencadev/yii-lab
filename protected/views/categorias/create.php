<?php
/* @var $this CategoriasController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Listado', 'url'=>array('index')),
);
?>

<h1>Agregar nueva categoría</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>