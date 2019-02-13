<?php
/* @var $this TechdataController */
/* @var $model Techdata */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'techdata-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    
<div class="row">





	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'caseNo'); ?>
		<?php echo $form->textField($model,'caseNo',array('size'=>20,'maxlength'=>20,'class'=>'form-control',"style"=>"border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'caseNo'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'caseDate'); ?>
		<?php #echo $form->textField($model,'caseDate',array('class'=>'form-control')); ?>
         <?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'attribute'=>'caseDate',
				'model'=>$model,
				'options'=>array(
					'showAnim'=>'fold',
					'dateFormat'=>'yy-mm-dd',
					'changeMonth'=>true,
        			'changeYear'=>true,
				),
				'htmlOptions'=>array(
					'style'=>'width:120px;border:1px solid #AD8C08;'
					,'value'=>date('Y-m-d'),
					'class'=>"form-control"
				),
			));
		?>
		<?php echo $form->error($model,'caseDate'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'caseTitle'); ?>
		<?php echo $form->textField($model,'caseTitle',array('size'=>60,'maxlength'=>100,'class'=>'form-control',"style"=>"border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'caseTitle'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'documentType'); ?>
		<?php #echo $form->textField($model,'documentType',array('size'=>2,'maxlength'=>2,'class'=>'form-control')); 
		 echo $form->dropDownList($model,'documentType', CHtml::listData(DocumentType::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"border:1px solid #AD8C08;"));
		?>
		<?php echo $form->error($model,'documentType'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'ACModel'); ?>
		<?php #echo $form->textField($model,'ACModel',array('size'=>2,'maxlength'=>2,'class'=>'form-control')); 
		 echo $form->dropDownList($model,'ACModel', CHtml::listData(ACModel::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"border:1px solid #AD8C08;"));
		?>
        
		<?php echo $form->error($model,'ACModel'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'ACSerial'); ?>
		<?php 
		echo $form->dropDownList($model,'ACSerial', CHtml::listData(Acserial::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"border:1px solid #AD8C08;"));
		//echo $form->textField($model,'ACSerial',array('size'=>60,'maxlength'=>100,'class'=>'form-control',"style"=>"border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'ACSerial'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'ATAChapter'); ?>
		<?php 
		echo $form->dropDownList($model,'ATAChapter', CHtml::listData(Atachapter::model()->findAll(array('order'=>'CONVERT(name,UNSIGNED INTEGER) ASC')),'name','name'),array('class'=>"form-control","style"=>"border:1px solid #AD8C08;"));
		
		#echo $form->textField($model,'ATAChapter',array('size'=>60,'maxlength'=>150,'class'=>'form-control',"style"=>"border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'ATAChapter'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'partNumber'); ?>
		<?php echo $form->textField($model,'partNumber',array('size'=>50,'maxlength'=>50,'class'=>'form-control',"style"=>"border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'partNumber'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'partDesc'); ?>
		<?php echo $form->textArea($model,'partDesc',array('size'=>60,'maxlength'=>2000,'class'=>'form-control',"style"=>"border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'partDesc'); ?>
	</div>

	 <div class="col-md-6">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('1'=>'Active','0'=>'InActive')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div> <!---->
 </div>
 
<div class="col-md-12">
 <div class="panel panel-primary">
  <div class="panel-heading">Document</div>
  <div class="panel-body">
    
    
         <script language="javascript">
      function hello(string){
       var name=string;
	   
       		if(Techdata_files.value.length==0) Techdata_files.value = name;
			else Techdata_files.value = Techdata_files.value+','+name;
	   //alert(name);
	   }

      </script>

	

	<iframe namne="iframe" frameborder="0" id="iframe_id" src="<?php echo Yii::app()->request->baseUrl; ?>/UPLOAD/basic.php" height="190" width="100%" ></iframe>
 <?php echo $form->hiddenField($model,'files',array('class'=>'form-control')); ?>   
 <?=$model->isNewRecord ?   "" : getFilesLink($model->files) ?>
    
    
    
  </div>
</div>
</div>
 
 
	<div class="row">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary btn-lg')); ?>
	</div>
    
   

<?php $this->endWidget(); ?>

</div><!-- form -->