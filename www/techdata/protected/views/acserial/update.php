<?php
/* @var $this AcserialController */
/* @var $model Acserial */

$this->breadcrumbs=array(
	'Acserials'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Acserial', 'url'=>array('index')),
	array('label'=>'Create Acserial', 'url'=>array('create')),
	array('label'=>'View Acserial', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Acserial', 'url'=>array('admin')),
);
?>

<h1>Update Acserial <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>