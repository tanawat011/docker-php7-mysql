<?php
/* @var $this DepartmentController */
/* @var $model Department */

#$this->layout = "column1";

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->department,
);

$this->menu=array(
	array('label'=>'Add phone list to Group', 'url'=>array('Phonelistrelation/create')),
	#array('label'=>'Create Department', 'url'=>array('create')),
	#array('label'=>'Update Department', 'url'=>array('update', 'id'=>$model->departmentid)),
	#array('label'=>'Delete Department', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->departmentid),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Department', 'url'=>array('admin')),
);
?>


<div class="panel panel-default">
  <div class="panel-heading">View Department #<?php echo $model->department; ?></div>
  <div class="panel-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'departmentid',
		'department',
		#'isactive',
		#'entryid',
		#'entryts',
		#'updateid',
		#'updatets',
	),
)); ?>
</div>
</div>

<br />

<div class="panel panel-default">
  <div class="panel-heading">Phone list</div>
  <div class="panel-body">

<?php 

$dataProvider=new CActiveDataProvider('Phonelistrelation', array(
    'criteria'=>array(
        'condition'=>"departmentid = $model->departmentid",
        #'order'=>'create_time DESC',
        #'with'=>array('author'),
    ),
    
    'pagination'=>array(
        'pageSize'=>30,
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'phonelistrelation-grid',
	'dataProvider'=>$dataProvider,
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

  </div>
</div>

