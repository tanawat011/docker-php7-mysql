<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>60,'maxlength'=>100)); ?>
	</div>
<!--	<div class="row">
		<?php echo $form->label($model,'departmentid'); ?>
		<?php echo $form->textField($model,'departmentid',array('size'=>10,'maxlength'=>10)); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'isactive'); ?>
		<?php echo $form->textField($model,'isactive',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entryid'); ?>
		<?php echo $form->textField($model,'entryid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entryts'); ?>
		<?php echo $form->textField($model,'entryts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updateid'); ?>
		<?php echo $form->textField($model,'updateid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatets'); ?>
		<?php echo $form->textField($model,'updatets'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->