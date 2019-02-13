<?php
/* @var $this TechdataController */
/* @var $model Techdata */
$this->layout = 'column1';


$this->menu=array(
	#array('label'=>'List Techdata', 'url'=>array('index')),
	array('label'=>'Manage Techdata', 'url'=>array('admin')),
);
?>

<h3>Create Techdata</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>