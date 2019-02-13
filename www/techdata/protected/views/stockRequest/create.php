<?php
/* @var $this StockRequestController */
/* @var $model StockRequest */

$this->layout = 'column1';
$this->breadcrumbs=array(
	'Stock Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockRequest', 'url'=>array('index')),
	array('label'=>'Manage StockRequest', 'url'=>array('admin')),
);
?>






<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php 
/*
$dataProvider=new CActiveDataProvider('StockRequest', array(
    'criteria'=>array(
        'condition'=>'request_by = '.$_SESSION["usersid"].'',
        #'order'=>'create_time DESC',
        #'with'=>array('author'),
    ),
    
    'pagination'=>array(
        'pageSize'=>20,
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-request-grid',
	'dataProvider'=>$dataProvider,
	
	'columns'=>array(
		
		array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;text-align: center') 
		),
		'date_time',
		
		array(
			'header'=>'part',
			'value'=>'getPartList($data->id)'
		),
		array(
			'header'=>'#',
			'type'=>'raw',
			'value'=>'getAction($data->status,$data->id)',
			'htmlOptions'=>array('style'=>'width:50px;')
		),
		/*array(
			'class'=>'CButtonColumn',
		),
	),
)); 
function getPartList($id){
	
	$data = StockRequestPart::model()->findAll(" request_id = $id  ");
	$str = '';
	$i = 1;
	foreach($data as $p){
		echo $str = $str.$i.'.'.$p->part_number.'<br>';
		$i++;
	}
	return $str;
}

function getAction($status,$id){
	
	$str = '';
	if($status=="0")$str = '<a class="btn btn-success" href="index.php?r=stockRequestPart/create&request_id='.$id.'">
                            <i class="fa fa-wrench fa-lg"></i> Add parts</a>';
	
	return $str;
}

*/
?>

