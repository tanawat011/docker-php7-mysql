<?php
/* @var $this StockRequestPartController */
/* @var $data StockRequestPart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::encode($data->request_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('part_number')); ?>:</b>
	<?php echo CHtml::encode($data->part_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ac_model')); ?>:</b>
	<?php echo CHtml::encode($data->ac_model); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ipc_ref')); ?>:</b>
	<?php echo CHtml::encode($data->ipc_ref); ?>
	<br />

	*/ ?>

</div>