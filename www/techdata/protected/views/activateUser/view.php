<?php
/* @var $this ActivateUserController */
/* @var $model ActivateUser */

$this->breadcrumbs=array(
	'Activate Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ActivateUser', 'url'=>array('index')),
	array('label'=>'Create ActivateUser', 'url'=>array('create')),
	array('label'=>'Update ActivateUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ActivateUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActivateUser', 'url'=>array('admin')),
);
?>

<h1>View ActivateUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'dateTime',
		'status',
	),
)); ?>
