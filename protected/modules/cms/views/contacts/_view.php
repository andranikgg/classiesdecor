<?php
/* @var $this ContactsController */
/* @var $data Contacts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_coord_x')); ?>:</b>
	<?php echo CHtml::encode($data->address_coord_x); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_coord_y')); ?>:</b>
	<?php echo CHtml::encode($data->address_coord_y); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('worktime')); ?>:</b>
	<?php echo CHtml::encode($data->worktime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_email')); ?>:</b>
	<?php echo CHtml::encode($data->contact_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fb_link')); ?>:</b>
	<?php echo CHtml::encode($data->fb_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_link')); ?>:</b>
	<?php echo CHtml::encode($data->in_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tw_link')); ?>:</b>
	<?php echo CHtml::encode($data->tw_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feedback_email')); ?>:</b>
	<?php echo CHtml::encode($data->feedback_email); ?>
	<br />

	*/ ?>

</div>