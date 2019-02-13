<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->departmentid), array('view', 'id'=>$data->departmentid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryid')); ?>:</b>
	<?php echo CHtml::encode($data->entryid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryts')); ?>:</b>
	<?php echo CHtml::encode($data->entryts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updateid')); ?>:</b>
	<?php echo CHtml::encode($data->updateid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatets')); ?>:</b>
	<?php echo CHtml::encode($data->updatets); ?>
	<br />


</div>