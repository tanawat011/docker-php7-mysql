<?php
/* @var $this ACModelController */
/* @var $model ACModel */



$this->menu=array(
	//array('label'=>'List ACModel', 'url'=>array('index')),
	array('label'=>'Create ACModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#acmodel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage A/C models</h3>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'acmodel-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		#'id',
		'name',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:70px;'),
		),
	),
)); ?>
