<?php
/* @var $this TechdataController */
/* @var $model Techdata 

$this->breadcrumbs=array(
	'Techdatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	#array('label'=>'List Techdata', 'url'=>array('index')),
	array('label'=>'Create', 'url'=>array('create')),
	#array('label'=>'View Techdata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Search', 'url'=>array('admin')),
);

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

<h3>Update  # <?php echo $model->caseNo; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

