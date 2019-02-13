<?php
/* @var $this ActivateUserController */
/* @var $model ActivateUser */

$this->breadcrumbs=array(
	'Activate Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActivateUser', 'url'=>array('index')),
	array('label'=>'Manage ActivateUser', 'url'=>array('admin')),
);
?>

<h1>Create ActivateUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>