<?php
/* @var $this TechdataController */
/* @var $model Techdata 

$this->breadcrumbs=array(
	'Techdatas'=>array('index'),
	$model->id,
);*/

$this->menu=array(
	#array('label'=>'List Techdata', 'url'=>array('index')),
	#array('label'=>'Create Techdata', 'url'=>array('create')),
	#array('label'=>'Update Techdata', 'url'=>array('update', 'id'=>$model->id)),
	#array('label'=>'Delete Techdata', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Search', 'url'=>array('admin')),
);
?>

<h3>View Techdata # <?php echo $model->caseNo; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		'caseNo',
		'caseDate',
		'caseTitle',
		#'documentType',
		array(
			'name'=>'documentType',
			'value'=>DocumentType::model()->find(" id = '".$model->documentType."'  ")->name
		),
		array(
			'name'=>'ACModel',
			'value'=>ACModel::model()->find(" id = '".$model->ACModel."'  ")->name
		),
		#'ACModel',
		'ACSerial',
		'ATAChapter',
		'partNumber',
		'partDesc',
		array(
			'name'=>'files',
			'type'=>'raw',
			'value'=>getFilesLink($model->files),
			//'value'=>'<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$model->files.'">Download file</a>'
		),
		'updateTime',
	),
));

function getFilesLink($files){

$fileArray = explode(',',$files);
$str = "";
for($i=0;$i<count($fileArray);$i++){


if($i==0) $str = '<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">'.$fileArray[$i].'</a><br>';
else  $str = $str.''. '<a target="_blank" href="http://saas.tasl.co.th/techdata/Files/files/'.$fileArray[$i].'">'.$fileArray[$i].'</a><br>';
//return $fileArray[0];
}

return $str;
	
} 
?>
