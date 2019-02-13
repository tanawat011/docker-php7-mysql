<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->breadcrumbs=array(
	'Phones'=>array('admin'),
	$model->name,
);

$this->menu=array(
	#array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Create Phone', 'url'=>array('create')),
	array('label'=>'Update Phone', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Phone', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>

<h4>View Phone #<?php echo $model->name; ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		'name',
		'ext',
		'mobile',
		'email',
		#'department',
		array(
		'header'=>'Group',
		'value'=>isset(Department::model()->find(" departmentid = '$model->department' ")->department) ? Department::model()->find(" departmentid = '$model->department' ")->department : " Not set"
		)
	),
)); ?>
