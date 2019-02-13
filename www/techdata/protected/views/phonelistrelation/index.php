<?php
/* @var $this PhonelistrelationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Phonelistrelations',
);

$this->menu=array(
	array('label'=>'Create Phonelistrelation', 'url'=>array('create')),
	array('label'=>'Manage Phonelistrelation', 'url'=>array('admin')),
);
?>

<h1>Phonelistrelations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
