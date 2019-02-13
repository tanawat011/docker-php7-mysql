<?php
/* @var $this UsersController */
/* @var $model Users */

#$this->layout = 'column1';

$this->menu=array(
	#array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Users</h3>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		'usersid',
		'uname',
		#'pword',
		#'departmentid',
		'fname',
		'mname',
		#'isactive',
		array(
		'name'=>'isactive',
		'value'=>'$data->isactive == "1" ? "Active" : "Inactive"'
		),
		/*
		'lname',
		'mobileno',
		'emailad',
		'picture',
		'isactive',
		'updatets',
		'pincode',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
			'htmlOptions'=>array('style'=>'width:50px;'),
		),
	),
)); ?>
