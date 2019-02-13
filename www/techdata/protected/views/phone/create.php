<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->breadcrumbs=array(
	'Phones'=>array('index'),
	'Create',
);

$this->menu=array(
	#array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>

<h4>Create Phone</h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>