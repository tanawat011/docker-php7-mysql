<?php
/* @var $this StockRequestPartController */
/* @var $model StockRequestPart */

$this->layout = 'column1';

$this->breadcrumbs=array(
	'Stock Request Parts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockRequestPart', 'url'=>array('index')),
	array('label'=>'Manage StockRequestPart', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>



