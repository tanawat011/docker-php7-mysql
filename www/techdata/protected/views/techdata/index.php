<?php
/* @var $this TechdataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Techdatas',
);

$this->menu=array(
	array('label'=>'Create Techdata', 'url'=>array('create')),
	array('label'=>'Manage Techdata', 'url'=>array('admin')),
);
?>

<h1>Techdatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
