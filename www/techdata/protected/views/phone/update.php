<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->breadcrumbs=array(
	'Phones'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	#array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Create Phone', 'url'=>array('create')),
	#array('label'=>'View Phone', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>

<h4>Update Phone # <?php echo $model->name; ?></h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>