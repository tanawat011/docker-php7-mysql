<?php
/* @var $this ACModelController */
/* @var $model ACModel */
$this->layout = 'column1';


$this->menu=array(
	array('label'=>'List ACModel', 'url'=>array('index')),
	array('label'=>'Manage ACModel', 'url'=>array('admin')),
);
?>

<h1>Create A/C Model</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>