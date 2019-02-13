<?php
/* @var $this StockRequestPartController */
/* @var $model StockRequestPart */

$this->breadcrumbs=array(
	'Stock Request Parts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StockRequestPart', 'url'=>array('index')),
	array('label'=>'Create StockRequestPart', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stock-request-part-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stock Request Parts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-request-part-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'request_id',
		'part_number',
		'description',
		'qty',
		'reason',
		/*
		'ac_model',
		'ipc_ref',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
