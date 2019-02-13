<?php
/* @var $this AcserialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Acserials',
);

$this->menu=array(
	array('label'=>'Create Acserial', 'url'=>array('create')),
	array('label'=>'Manage Acserial', 'url'=>array('admin')),
);
?>

<h1>Acserials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
