<?php
/* @var $this StockRequestPartController */
/* @var $model StockRequestPart */

$this->breadcrumbs=array(
	'Stock Request Parts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockRequestPart', 'url'=>array('index')),
	array('label'=>'Create StockRequestPart', 'url'=>array('create')),
	array('label'=>'View StockRequestPart', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockRequestPart', 'url'=>array('admin')),
);
?>

<h1>Update StockRequestPart <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>