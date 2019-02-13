<?php
/* @var $this SystemController */
/* @var $model System */

$this->layout = "column1";

$this->breadcrumbs=array(
	'Systems'=>array('index'),
	$model->system_id=>array('view','id'=>$model->system_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Create System', 'url'=>array('create')),
	array('label'=>'View System', 'url'=>array('view', 'id'=>$model->system_id)),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>

<h4>Update #  <?php echo $model->hostname; ?></h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>