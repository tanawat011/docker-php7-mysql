<?php
/* @var $this StockRequestController */
/* @var $model StockRequest */

$this->breadcrumbs=array(
	'Stock Requests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockRequest', 'url'=>array('index')),
	array('label'=>'Create StockRequest', 'url'=>array('create')),
	array('label'=>'View StockRequest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockRequest', 'url'=>array('admin')),
);
?>

<h1>Update StockRequest <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>