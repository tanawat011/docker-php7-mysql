<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	#array('label'=>'List Department', 'url'=>array('index')),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>

<h3>Create Group</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>