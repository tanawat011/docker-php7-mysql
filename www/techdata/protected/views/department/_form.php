<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->dropDownlist($model,'isactive',array('1'=>'Active','0'=>'Not active')); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'entryid'); ?>
		<?php echo $form->textField($model,'entryid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'entryid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entryts'); ?>
		<?php echo $form->textField($model,'entryts'); ?>
		<?php echo $form->error($model,'entryts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updateid'); ?>
		<?php echo $form->textField($model,'updateid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'updateid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatets'); ?>
		<?php echo $form->textField($model,'updatets'); ?>
		<?php echo $form->error($model,'updatets'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->