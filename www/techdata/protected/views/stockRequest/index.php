<?php
/* @var $this StockRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Requests',
);

$this->menu=array(
	array('label'=>'Create StockRequest', 'url'=>array('create')),
	array('label'=>'Manage StockRequest', 'url'=>array('admin')),
);
?>

<h1>Stock Requests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
