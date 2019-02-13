<?php
/* @var $this ActivateUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Activate Users',
);

$this->menu=array(
	array('label'=>'Create ActivateUser', 'url'=>array('create')),
	array('label'=>'Manage ActivateUser', 'url'=>array('admin')),
);
?>

<h1>Activate Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
