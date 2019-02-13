<?php
/* @var $this UsersController */
/* @var $model Users */



$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->usersid)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usersid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->usersid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usersid',
		'uname',
		'pword',
		'departmentid',
		'fname',
		'mname',
		'lname',
		'mobileno',
		'emailad',
		'picture',
		'isactive',
		'updatets',
		'pincode',
	),
)); ?>
