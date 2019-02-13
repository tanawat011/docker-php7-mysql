<?php
/* @var $this StockRequestPartController */
/* @var $model StockRequestPart */
/* @var $form CActiveForm */


$_SESSION['request_id'] = $_GET['request_id'];

#$max_id = StockRequest::model()->findBySql(" select max(id) as id from stock_request; ")->id;

#echo $max_id;

?>

<!-- form -->




<div class="row">
  <div class="col-md-4">
  
     <div class="panel panel-primary"  style="height:400px;">
  <div class="panel-heading">Step 1 : Create Stock Request Part</div>
  <div class="panel-body">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-request-part-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    
		<?php #echo $form->labelEx($model,'request_id'); ?>
		<?php echo $form->hiddenField($model,'request_id',array('class'=>'form-control','style'=>'width:150px;','value'=>$_GET['request_id'])); ?>
		<?php #echo $form->error($model,'request_id'); ?>
	

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'part_number'); ?>
		<?php echo $form->textField($model,'part_number',array('size'=>39,'maxlength'=>39,'class'=>'form-control','style'=>'width:150px;')); ?>
		<?php echo $form->error($model,'part_number'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>100,'class'=>'form-control','style'=>'width:150px;')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty',array('class'=>'form-control','style'=>'width:50px;')); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'reason'); ?>
		<?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>100,'class'=>'form-control','style'=>'width:150px;')); ?>
		<?php echo $form->error($model,'reason'); ?>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'ac_model'); ?>
		<?php 
		//echo $form->dropDownList($model,'ac_model', CHtml::listData(ACModel::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"border:1px solid #AD8C08;width:100px;"));
		echo $form->dropDownList($model,'ac_model',array('S92A'=>'S92A','S76D'=>'S76D','S76C++'=>'S76C++','TOOL'=>'TOOL'),array('class'=>'form-control','style'=>'width:150px;')); ?>
		<?php echo $form->error($model,'ac_model'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'ipc_ref'); ?>
		<?php echo $form->textField($model,'ipc_ref',array('size'=>20,'maxlength'=>20,'class'=>'form-control','style'=>'width:150px;')); ?>
		<?php echo $form->error($model,'ipc_ref'); ?>
	</div>
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'add part' : 'Save',array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>


  </div>
</div>

</div>
  
  </div>
  <div class="col-md-8">
  
  		


<div class="panel panel-primary" style="height:400px;">
  <div class="panel-heading">Step 2 : Check Email</div>
  <div class="panel-body">
  
 
 <?php 

$dataProvider=new CActiveDataProvider('StockRequestPart', array(
    'criteria'=>array(
        'condition'=>'request_id = '.$_GET["request_id"].'',
        #'order'=>'create_time DESC',
        #'with'=>array('author'),
    ),
    
    'pagination'=>array(
        'pageSize'=>20,
    ),
));


 ?>

<?
	$count = StockRequestPart::model()->count(" request_id = ".$_GET['request_id']." ");
	//echo $count;
	if($count>0){
?>


<? } ?>
 
  
  <?
    $data = StockRequestPart::model()->findAll(" request_id = ".$_GET['request_id']."  ");
$email_content = '';	
$str = 'Could you please stock part list below. <br><br> ';
$email_content = $str;

echo $str;	
$str = '			
<table width="100%" class="table table-bordered">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Part Number</th>
    <th scope="col">Description</th>
    <th scope="col">Recomended stock level</th>
    <th scope="col">Reason</th>
    <th scope="col">A/C Model</th>
	<th scope="col">IPC Reference</th>
  </tr>
  
  
  


    ';
	$i = 1;
	foreach($data as $p){
		//$str = $str.$i.'.'.$p->part_number.' Qty '.$p->qty.'<br>';
		$str = $str.'
		<tr>
			<th scope="row">'.$i.'</th>
			<td>'.$p->part_number.'</td>
			<td>'.$p->description.'</td>
			<td>'.$p->qty.'</td>
			<td>'.$p->reason.'</td>
			<td>'.$p->ac_model.'</td>
			<td>'.$p->ipc_ref.'</td>
  		</tr>
		';
		
		$i++;
	}
	$str = $str.'</table><br>';
	//echo $str;
	
	$email_content = $email_content.$str;
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-request-part-grid',
	'dataProvider'=>$dataProvider,
	
	'columns'=>array(
		array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;text-align: center') 
		),
		#'request_id',
		'part_number',
		'description',
		'qty',
		'reason',
		
		'ac_model',
		'ipc_ref',
		/**/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}',
		),
	),
));
	
	
	
	
	$str = 'Best Regards,<br>';
	$str = $str.$_SESSION["fname"].'  '.$_SESSION["lname"].'<br> '.date('d-m-Y H:i:s');
	$email_content = $email_content.$str;
	echo $str;
	
  ?>
  
</div>
</div>


  
  </div>
</div>



<? //=$email_content?>


<!--<a href="index.php?r=stockRequest/create" class="btn btn-lg btn-danger" ><i class="fa fa-home fa-lg"></i> Main page</a>-->
<div class="panel panel-primary">
  <div class="panel-heading">Step 3 : Submit</div>
  <div class="panel-body">
  
<?
    $n = StockRequestPart::model()->count(" request_id =  ".$_GET['request_id']." ");
	//echo '|'.$n.'|';
if($n>0){
	
	
?>
<a href="#" class="btn btn-lg btn-success" onclick="sendEmail();"><i class="fa fa-envelope-o fa-lg"></i> Submit</a>
<? }else{ ?>
		<div class="alert alert-danger">
        		Please add part at least one !!.
        </div>

        
<? } ?>  

</div>
</div>


  
<script language="javascript">
		function sendEmail(){
		
		
		$.post("http://saas.tasl.co.th/techdata/index.php?r=site/page&view=sendmailFunction", 
        {
          to: 'grant_r@tasl.co.th,witthaya_p@tasl.co.th,jutamas_p@tasl.co.th,apiwud_k@tasl.co.th', // grant_r@tasl.co.th,
          message: 'AAA',
		  subject: 'Stock request from <?=$_SESSION['fname']?> <?=$_SESSION['lname']?>',
		  email: 'witthaya_p@tasl.co.th',
		  name : 'witthaya panduang'
        },
        function(data,status){
			if(status=="success")alert('Thank you for your recommendation');
		});
		
		/*
		$.post("http://saas.tasl.co.th/techdata/index.php?r=site/page&view=saveRequestParts", 
        {
          request_id: '<?=$_GET['request_id']?>',
          message: '',
		  segment : 'All'
        },
        function(data,status){
			alert('Thank you for your recommendation');
		});  
		
		*/
		
			
			
		}
</script>  



