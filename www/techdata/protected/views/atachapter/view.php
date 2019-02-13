<?php
/* @var $this AtachapterController */
/* @var $model Atachapter */



$this->menu=array(
	#array('label'=>'List Atachapter', 'url'=>array('index')),
	array('label'=>'Create Atachapter', 'url'=>array('create')),
	array('label'=>'Update Atachapter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Atachapter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atachapter', 'url'=>array('admin')),
);
?>

<h1>View Atachapter #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'remark',
	),
)); ?>
