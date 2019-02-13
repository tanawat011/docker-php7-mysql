<?php
/* @var $this PhonelistrelationController */
/* @var $model Phonelistrelation */

$this->breadcrumbs=array(
	'Phonelistrelations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Phonelistrelation', 'url'=>array('index')),
	array('label'=>'Create Phonelistrelation', 'url'=>array('create')),
	array('label'=>'View Phonelistrelation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Phonelistrelation', 'url'=>array('admin')),
);
?>

<h1>Update Phonelistrelation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>