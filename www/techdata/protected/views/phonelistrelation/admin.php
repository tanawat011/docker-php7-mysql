<?php
/* @var $this PhonelistrelationController */
/* @var $model Phonelistrelation */

$this->breadcrumbs=array(
	'Phonelistrelations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Phonelistrelation', 'url'=>array('index')),
	array('label'=>'Create Phonelistrelation', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#phonelistrelation-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Phonelistrelations</h4>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phonelistrelation-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;'),
		),
		#'departmentid',
		#'userid',
		array(
		 'name' => 'userid',
		 'value' => '\'
				 \'.getUser($data->userid).\'
		 \'',
		 'type' => 'raw',
		'htmlOptions'=>array('style'=>'text-align: left') 
		),
		array(
		 'name' => 'departmentid',
		 'value' => '\'
				 \'.getGroup($data->departmentid).\'
		 \'',
		 'type' => 'raw',
		'htmlOptions'=>array('style'=>'text-align: left') 
		),
		
		array(
		 'name' => 'status',
		 'value' => '$data->status=="1" ? "Active":"InActive"',
		
		'htmlOptions'=>array('style'=>'text-align: left') 
		),
		
		#'status',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}',
			'htmlOptions'=>array('style'=>'width:70px;'),
			
		),
	),
)); 
function getGroup($id){
		return isset(Department::model()->find(" departmentid =  '".$id."' ")->department) ? Department::model()->find(" departmentid =  '".$id."' ")->department : "-";
}
function getUser($id){
	return isset(Phone::model()->find(" id =  '".$id."' ")->name) ? Phone::model()->find(" id =  '".$id."' ")->name : "-";
}

?>