<?php
/* @var $this AcserialController */
/* @var $model Acserial */



$this->menu=array(
	#array('label'=>'List Acserial', 'url'=>array('index')),
	array('label'=>'Create Acserial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#acserial-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage A/C serials</h3>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'acserial-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		
		'name',
		'detail',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:70px;'),
		),
	),
)); ?>
