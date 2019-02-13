<?php
/* @var $this TechdataController */
/* @var $data Techdata */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caseNo')); ?>:</b>
	<?php echo CHtml::encode($data->caseNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caseDate')); ?>:</b>
	<?php echo CHtml::encode($data->caseDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caseTitle')); ?>:</b>
	<?php echo CHtml::encode($data->caseTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentType')); ?>:</b>
	<?php echo CHtml::encode($data->documentType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACModel')); ?>:</b>
	<?php echo CHtml::encode($data->ACModel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACSerial')); ?>:</b>
	<?php echo CHtml::encode($data->ACSerial); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ATAChapter')); ?>:</b>
	<?php echo CHtml::encode($data->ATAChapter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partNumber')); ?>:</b>
	<?php echo CHtml::encode($data->partNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partDesc')); ?>:</b>
	<?php echo CHtml::encode($data->partDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateTime')); ?>:</b>
	<?php echo CHtml::encode($data->updateTime); ?>
	<br />

	*/ ?>

</div>