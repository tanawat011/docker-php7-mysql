<?php
/* @var $this StockRequestController */
/* @var $model StockRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php #echo $form->labelEx($model,'request_by'); ?>
		<?php echo $form->hiddenField($model,'request_by',array('class'=>'form-control','style'=>'width:250px;','value'=>$_SESSION["usersid"])); ?>
		<?php echo $form->error($model,'request_by'); ?>
	</div>

	<div class="row">
		<?php # echo $form->labelEx($model,'date_time'); ?>
		<?php #echo $form->textField($model,'date_time',array('size'=>15,'maxlength'=>15)); 
		
		?>
        <?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'attribute'=>'date_time',
				'model'=>$model,
				'options'=>array(
					'showAnim'=>'fold',
					'dateFormat'=>'yy-mm-dd',
					'changeMonth'=>true,
        			'changeYear'=>true,
				),
				'htmlOptions'=>array(
					'style'=>'width:120px;border:1px solid #AD8C08; display:none;'
					,'value'=>date('Y-m-d'),
					'class'=>"form-control"
				),
			));
		?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row buttons"  align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create Stock Request' : 'Save',array('class'=>'btn btn-success btn-lg')); ?>
        <?php #echo CHtml::Button('My previos request',array('class'=>'btn btn-success btn-lg')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->