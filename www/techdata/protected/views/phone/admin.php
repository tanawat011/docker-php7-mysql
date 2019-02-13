<body onLoad="$('#phone-grid').yiiGridView('update', {data: $(this).serialize()});">
<?php
/* @var $this PhoneController */
/* @var $model Phone */

$this->layout = "column1";
$this->breadcrumbs=array(
	'Phones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Phone', 'url'=>array('index')),
	array('label'=>'Create Phone List', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#phone-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Phones </h4>

<div class="alert alert-info">
	* You can manage only data in your base
</div>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<button type="button" class="btn btn-primary  btn-lg" aria-label="Left Align" onClick="location.replace('index.php?r=Phone/create');">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create New phone list
</button>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phone-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;text-align: center') 
		),
		'name',
		'ext',
		'mobile',
		'email',
		
		array(
			'name'=>'department',
			'value'=>'isset(Department::model()->find(" departmentid = \'$data->department\' ")->department) ? Department::model()->find(" departmentid = \'$data->department\' ")->department : " Not set"'
		),
		array(
			'name'=>'division',
			'value'=>'isset(Division::model()->find(" id = \'$data->division\' ")->position) ? Division::model()->find(" id = \'$data->division\' ")->position : " Not set"'
		),
		#'division',
		'base',
		array(
			'name'=>'status',
			'value'=>'$data->status=="1" ? "Active" : ($data->status=="2" ? "Inactive":"Leave") '
		),
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:70px;')
		),
	),
)); ?>
</body>