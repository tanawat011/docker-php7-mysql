<?php
/* @var $this ActivateUserController */
/* @var $model ActivateUser */

$this->breadcrumbs=array(
	'Activate Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActivateUser', 'url'=>array('index')),
	array('label'=>'Create ActivateUser', 'url'=>array('create')),
	array('label'=>'View ActivateUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ActivateUser', 'url'=>array('admin')),
);
?>

<h1>Update ActivateUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>