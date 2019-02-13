<?php
/* @var $this AtachapterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Atachapters',
);

$this->menu=array(
	array('label'=>'Create Atachapter', 'url'=>array('create')),
	array('label'=>'Manage Atachapter', 'url'=>array('admin')),
);
?>

<h1>Atachapters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
