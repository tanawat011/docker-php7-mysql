<?php
/* @var $this AcserialController */
/* @var $model Acserial */

$this->breadcrumbs=array(
	'Acserials'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Acserial', 'url'=>array('index')),
	array('label'=>'Create Acserial', 'url'=>array('create')),
	array('label'=>'Update Acserial', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Acserial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Acserial', 'url'=>array('admin')),
);
?>

<h1>View Acserial #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'detail',
	),
)); ?>
