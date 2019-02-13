<?php
/* @var $this ACModelController */
/* @var $model ACModel */

$this->breadcrumbs=array(
	'Acmodels'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ACModel', 'url'=>array('index')),
	array('label'=>'Create ACModel', 'url'=>array('create')),
	array('label'=>'View ACModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ACModel', 'url'=>array('admin')),
);
?>

<h1>Update ACModel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>