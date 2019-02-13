<?php
/* @var $this ACModelController */
/* @var $model ACModel */

$this->breadcrumbs=array(
	'Acmodels'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ACModel', 'url'=>array('index')),
	array('label'=>'Create ACModel', 'url'=>array('create')),
	array('label'=>'Update ACModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ACModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ACModel', 'url'=>array('admin')),
);
?>

<h1>View ACModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
