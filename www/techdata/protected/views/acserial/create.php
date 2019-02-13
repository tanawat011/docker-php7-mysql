<?php
/* @var $this AcserialController */
/* @var $model Acserial */

$this->layout = 'column1';

$this->menu=array(
	array('label'=>'List Acserial', 'url'=>array('index')),
	array('label'=>'Manage Acserial', 'url'=>array('admin')),
);
?>

<h1>Create A/C Serial</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>