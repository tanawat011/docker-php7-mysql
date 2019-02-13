<?php
/* @var $this UsersController */
/* @var $model Users */



$this->menu=array(
	#array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	#array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->usersid)),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>

<h3>Update Users <?php echo $model->fname; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>