<?php
/* @var $this StockRequestPartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Request Parts',
);

$this->menu=array(
	array('label'=>'Create StockRequestPart', 'url'=>array('create')),
	array('label'=>'Manage StockRequestPart', 'url'=>array('admin')),
);
?>

<h1>Stock Request Parts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
