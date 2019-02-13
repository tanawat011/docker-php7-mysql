<?php
/* @var $this StockRequestController */
/* @var $model StockRequest */

$this->layout = 'column1';
$this->breadcrumbs=array(
	'Stock Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockRequest', 'url'=>array('index')),
	array('label'=>'Create StockRequest', 'url'=>array('create')),
	array('label'=>'Update StockRequest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockRequest', 'url'=>array('admin')),
);
?>

<h4>View StockRequest #<?php echo $model->id; ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'request_by',
		'date_time',
	),
)); ?>
