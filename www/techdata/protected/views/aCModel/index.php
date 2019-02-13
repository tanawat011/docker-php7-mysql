<?php
/* @var $this ACModelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Acmodels',
);

$this->menu=array(
	array('label'=>'Create ACModel', 'url'=>array('create')),
	array('label'=>'Manage ACModel', 'url'=>array('admin')),
);
?>

<h1>Acmodels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
