<?
if(isset($_SESSION["type"]) && $_SESSION["type"] == 'stockrequest'){
?>
	<script language="javascript">
		location.replace('index.php?r=StockRequest/create');
	</script>
<? } ?>
<?php
/* @var $this TechdataController */
/* @var $model Techdata */

$this->layout = 'column1';


$this->menu=array(
	array('label'=>'List Techdata', 'url'=>array('index')),
	array('label'=>'Create Techdata', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#techdata-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Tech Database</h3>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'techdata-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;text-align: center') 
		),
		'caseNo',
		'caseDate',
		'caseTitle',
		#'documentType',
		#'ACModel',
		array(
			'name'=>'documentType',
			'value'=>'getName("doc",$data->documentType)'
		),
		array(
			'name'=>'ACModel',
			'value'=>'getName("ac",$data->ACModel)'
		),
		array(
			'name'=>'ACSerial',
			'value'=>'getName("as",$data->ACSerial)'
		),
		#'ACSerial',
		'ATAChapter',
		'partNumber',
		'partDesc',
		#'updateTime',
		array(
			'name'=>'files',
			'type'=>'raw',
			'value'=>'getFilesLink($data->files)',
		)
		,
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
			'visible'=>isset($_SESSION['role']) &&  $_SESSION['role'] == "1" ,
			'htmlOptions'=>array('style'=>'width:50px;'),
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			'visible'=>isset($_SESSION['role']) &&  $_SESSION['role'] == "2" ,
			'htmlOptions'=>array('style'=>'width:50px;'),
		),
	),
)); 

/*function getFilesLink($files){

$fileArray = explode(',',$files);
$str = "";
for($i=0;$i<count($fileArray);$i++){


#if($i==0) $str = '<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">'.$fileArray[$i].'</a><br>';
#else  $str = $str.''. '<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">'.$fileArray[$i].'</a><br>';
if($i==0) $str = '<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">File '.($i+1).'</a><br>';
else  $str = $str.''. '<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">File '.($i+1).'</a><br>';

//return $fileArray[0];
}

return $str;
	
} */

function getFilesLink($files){

$fileArray = explode(',',$files);
$str = "";
for($i=0;$i<count($fileArray);$i++){


if($i==0) $str = '- <a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">'.$fileArray[$i].'</a><br>';
else  $str = $str.''. '- <a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">'.$fileArray[$i].'</a><br>';
//return $fileArray[0];
}

return $str;
	
} 

function getName($type,$id){
		
		if($type=="ac") {
				return  isset(ACModel::model()->find(" id = '$id'  ")->name) ?   ACModel::model()->find(" id = '$id'  ")->name : "";
		}
		
		if($type=="doc") {
				return  isset(DocumentType::model()->find(" id = '$id'  ")->name) ?   DocumentType::model()->find(" id = '$id' ")->name : "";
		}
		if($type=="as") {
				return  isset(ACSerial::model()->find(" id = '$id'  ")->name) ?   ACSerial::model()->find(" id = '$id' ")->name : "";
		}
}


?>
