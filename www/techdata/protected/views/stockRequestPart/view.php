<?php
/* @var $this StockRequestPartController */
/* @var $model StockRequestPart */

$this->breadcrumbs=array(
	'Stock Request Parts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockRequestPart', 'url'=>array('index')),
	array('label'=>'Create StockRequestPart', 'url'=>array('create')),
	array('label'=>'Update StockRequestPart', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockRequestPart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockRequestPart', 'url'=>array('admin')),
);
?>

<h1>View StockRequestPart #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'request_id',
		'part_number',
		'description',
		'qty',
		'reason',
		'ac_model',
		'ipc_ref',
	),
)); ?>
