<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Manage',
);

$this->menu=array(
	#array('label'=>'List Group', 'url'=>array('index')),
	array('label'=>'Create Group', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#department-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Groups</h4>
<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));style="display:none" ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'department-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;'),
		),
		#'departmentid',
		'department',
		#'isactive',
		#'entryid',
		#'entryts',
		#'updateid',
		/*
		'updatets',
		*/
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:70px;'),
		),
	),
)); ?>
