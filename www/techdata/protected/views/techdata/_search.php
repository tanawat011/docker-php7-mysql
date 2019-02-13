<?php
/* @var $this TechdataController */
/* @var $model Techdata */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



<div class="row">
    <div class="col-md-6">
		<?php echo $form->label($model,'caseNo'); ?>
		<?php echo $form->textField($model,'caseNo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

</div>

<div class="row">
<div class="alert alert-warning">
	<div class="col-md-6">
		<?php echo $form->label($model,'caseDate'); ?>
		<?php #echo $form->textField($model,'caseDate'); ?>
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
					,
					'class'=>"form-control"
				),
			));
		?>
        

	</div>
    	<div class="col-md-6">
		<?php #echo $form->label($model,'caseDate'); ?>
		<?php #echo $form->textField($model,'caseDate'); ?>
		<?php
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
				'attribute'=>'id',
				'model'=>$model,
				'options'=>array(
					'showAnim'=>'fold',
					'dateFormat'=>'yy-mm-dd',
					'changeMonth'=>true,
        			'changeYear'=>true,
				),
				'htmlOptions'=>array(
					'style'=>'width:120px;border:1px solid #AD8C08;',
					#,'value'=>date('Y-m-d'),
					'class'=>"form-control"
				),
			));
		?>
        

	</div><br />
<br />


 </div>   
	<div class="col-md-6">
		<?php echo $form->label($model,'caseTitle'); ?>
		<?php echo $form->textField($model,'caseTitle',array('size'=>60,'maxlength'=>100,"style"=>"width:250px;","style"=>"width:250px;",'class'=>"form-control")); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->label($model,'documentType'); ?>
		<?php #echo $form->textField($model,'documentType',array('size'=>2,'maxlength'=>2)); ?>
        <?php #echo $form->textField($model,'documentType',array('size'=>2,'maxlength'=>2,'class'=>'form-control')); 
		 echo $form->dropDownList($model,'documentType', CHtml::listData(DocumentType::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"width:250px;",'empty'=>'select'));
		?>
	</div>

	<div class="col-md-6">
		<?php echo $form->label($model,'ACModel'); ?>
		<?php #echo $form->textField($model,'ACModel',array('size'=>2,'maxlength'=>2)); ?>
         <?php #echo $form->textField($model,'documentType',array('size'=>2,'maxlength'=>2,'class'=>'form-control')); 
		 echo $form->dropDownList($model,'ACModel', CHtml::listData(ACModel::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"width:250px;",'empty'=>'select'));
		?>
        
	</div>

	<div class="col-md-6">
		<?php echo $form->label($model,'ACSerial'); ?>
		<?php #echo $form->textField($model,'ACSerial',array('size'=>60,'maxlength'=>100,'class'=>"form-control","style"=>"width:250px;")); ?>
        <?php 
		 echo $form->dropDownList($model,'ACSerial', CHtml::listData(Acserial::model()->findAll(''),'id','name'),array('class'=>"form-control","style"=>"width:250px;",'empty'=>'select'));
		?>
	</div>

	<div class="col-md-6">
		<?php echo $form->label($model,'ATAChapter'); ?>
		<?php 
		echo $form->dropDownList($model,'ATAChapter', CHtml::listData(Atachapter::model()->findAll(array('order'=>'CONVERT(name,UNSIGNED INTEGER) ASC')),'name','name'),array('class'=>"form-control","style"=>"width:250px;",'empty'=>'select'));
		//echo $form->textField($model,'ATAChapter',array('size'=>60,'maxlength'=>150,'class'=>"form-control","style"=>"width:250px;")); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->label($model,'partNumber'); ?>
		<?php echo $form->textField($model,'partNumber',array('size'=>50,'maxlength'=>50,'class'=>"form-control","style"=>"width:250px;")); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->label($model,'partDesc'); ?>
		<?php echo $form->textField($model,'partDesc',array('size'=>60,'maxlength'=>2000,'class'=>"form-control","style"=>"width:250px;")); ?>
	</div>
<? if(isset($_SESSION["role"]) && $_SESSION["role"]=="1" ){ ?>    
    <div class="col-md-6">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('1'=>'Active','0'=>'InActive'),array('empty'=>"all",'class'=>"form-control","style"=>"width:250px;")); ?>
	</div>
<? } ?>    

</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary btn-lg')); ?>
        <?php echo CHtml::resetButton('Clear',array('class'=>'btn btn-primary btn-lg')); ?>
<? if(isset($_SESSION["role"]) && $_SESSION["role"]=="1" ){ ?>        
        <?php echo CHtml::Button('Create new',array('class'=>'btn btn-primary btn-lg','onClick'=>"location.replace('index.php?r=Techdata/create')")); ?>
<? } ?>        
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->