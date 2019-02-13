<?php
/* @var $this PhoneController */
/* @var $model Phone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phone-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>135,'class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ext'); ?>
		<?php echo $form->textField($model,'ext',array('size'=>9,'maxlength'=>9,'class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>36,'maxlength'=>36,'class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>36,'maxlength'=>36,'class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'division'); ?>
		<?php #echo $form->dropDownList($model,'division',array('BKK'=>'BKK','NST'=>'NST','UTP'=>'UTP'),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"));
		
		#$command = $connection->createCommand('SELECT id,concat(concat(id," : "),name) as name FROM m_pioritycode');
		echo $form->dropDownList($model,'division', CHtml::listData(Division::model()->findAll(),'id','position'),array('empty'=>'Choose one','class'=>"form-control","style"=>"border:1px solid #AD8C08; width:450px;"));
				
		
		 ?>
		<?php echo $form->error($model,'division'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'base'); ?>
		<?php echo $form->dropDownList($model,'base',array('BKK'=>'BKK','NST'=>'NST','UTP'=>'UTP'),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'base'); ?>
	</div>
    

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>67,'class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;")); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php #echo $form->textField($model,'department',array('size'=>60,'maxlength'=>100)); ?>
        <?php #echo $form->dropDownList($model,'department',array('size'=>60,'maxlength'=>100)); 
		echo $form->dropDownList($model,'department', CHtml::listData(Department::model()->findAll(" isactive = 1"), 'departmentid', 'department'),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"));
		?>
		<?php echo $form->error($model,'department'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'status'); 
		echo $form->dropDownList($model,'department', array('1'=>'Active','2'=>'Inactive','3'=>'Leave'),array('class'=>"form-control","style"=>"width:450px;border:1px solid #AD8C08;"));
		?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->