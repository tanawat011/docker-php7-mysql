<?php
/* @var $this AtachapterController */
/* @var $model Atachapter */



$this->menu=array(
	#array('label'=>'List Atachapter', 'url'=>array('index')),
	array('label'=>'Create Atachapter', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#atachapter-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage ATA Chapters</h3>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'atachapter-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		#'id',
		array(
		'header'=>'ATA Charpter',
		'name'=>'name',
		),
		'remark',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:70px;'),
		),
	),
)); ?>
