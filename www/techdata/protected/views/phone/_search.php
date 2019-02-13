<?php
/* @var $this PhoneController */
/* @var $model Phone */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>135)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ext'); ?>
		<?php echo $form->textField($model,'ext',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>36,'maxlength'=>36)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>67)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>60,'maxlength'=>100)); ?>
	</div>
   <? #if(Yii::app()->user->name=="admin"){ ?>
    <div class="row">
		<?php echo $form->label($model,'base'); ?>
		<?php echo $form->dropDownList($model,'base',array('BKK'=>'BKK','NST'=>'NST','UTP'=>'UTP'),array('empty'=>'All')); ?>
	</div>
	<? #} ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary btn-lg')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->