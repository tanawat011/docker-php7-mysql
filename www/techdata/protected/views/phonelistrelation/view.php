<?php
/* @var $this PhonelistrelationController */
/* @var $model Phonelistrelation */

$this->breadcrumbs=array(
	'Phonelistrelations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Phonelistrelation', 'url'=>array('index')),
	array('label'=>'Create Phonelistrelation', 'url'=>array('create')),
	array('label'=>'Update Phonelistrelation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Phonelistrelation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Phonelistrelation', 'url'=>array('admin')),
);
?>

<h1>View Phonelistrelation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'departmentid',
		'userid',
		'status',
	),
)); ?>
