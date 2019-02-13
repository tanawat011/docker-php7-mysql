<?php
/* @var $this AtachapterController */
/* @var $model Atachapter */

$this->breadcrumbs=array(
	'Atachapters'=>array('index'),
	'Create',
);

$this->menu=array(
	#array('label'=>'List Atachapter', 'url'=>array('index')),
	array('label'=>'Manage Atachapter', 'url'=>array('admin')),
);
?>

<h3>Create ATA Chapter</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>