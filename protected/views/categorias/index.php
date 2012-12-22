<?php
/* @var $this CategoriasController */

$this->pageTitle=Yii::app()->name . ' - Categorías';
$this->breadcrumbs=array(
	'Categorías',
);
$this->menu=array(
	array('label'=>'Agregar Categoría', 'url'=>array('create')),
);

?>

<h1>Categorías</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'categoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'NumProductos',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>