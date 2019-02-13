<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uname'); ?>
		<?php echo $form->textField($model,'uname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'uname'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'pword'); ?>
		<?php echo $form->textField($model,'pword',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departmentid'); ?>
		<?php echo $form->textField($model,'departmentid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'departmentid'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mname'); ?>
		<?php echo $form->textField($model,'mname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'mobileno'); ?>
		<?php echo $form->textField($model,'mobileno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobileno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailad'); ?>
		<?php echo $form->textField($model,'emailad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emailad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->textField($model,'picture',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'picture'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'updatets'); ?>
		<?php echo $form->textField($model,'updatets'); ?>
		<?php echo $form->error($model,'updatets'); ?>
	</div>
-->
<div class="row">
		<?php echo $form->labelEx($model,'isactive'); ?>
		<?php echo $form->dropDownList($model,'isactive',array('1'=>'Active','0'=>'Inactive')); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->dropDownList($model,'role',array('1'=>'Admin','2'=>'User')); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->