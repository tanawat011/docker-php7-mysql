<?php
/* @var $this AtachapterController */
/* @var $model Atachapter */

$this->breadcrumbs=array(
	'Atachapters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Atachapter', 'url'=>array('index')),
	array('label'=>'Create Atachapter', 'url'=>array('create')),
	array('label'=>'View Atachapter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Atachapter', 'url'=>array('admin')),
);
?>

<h1>Update Atachapter <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>