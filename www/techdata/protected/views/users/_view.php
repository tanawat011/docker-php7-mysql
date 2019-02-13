<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usersid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usersid), array('view', 'id'=>$data->usersid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uname')); ?>:</b>
	<?php echo CHtml::encode($data->uname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pword')); ?>:</b>
	<?php echo CHtml::encode($data->pword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentid')); ?>:</b>
	<?php echo CHtml::encode($data->departmentid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mname')); ?>:</b>
	<?php echo CHtml::encode($data->mname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mobileno')); ?>:</b>
	<?php echo CHtml::encode($data->mobileno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailad')); ?>:</b>
	<?php echo CHtml::encode($data->emailad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picture')); ?>:</b>
	<?php echo CHtml::encode($data->picture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatets')); ?>:</b>
	<?php echo CHtml::encode($data->updatets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pincode')); ?>:</b>
	<?php echo CHtml::encode($data->pincode); ?>
	<br />

	*/ ?>

</div>