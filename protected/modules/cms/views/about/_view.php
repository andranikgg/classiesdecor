<?php
/* @var $this AboutController */
/* @var $data About */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vision')); ?>:</b>
	<?php echo CHtml::encode($data->vision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partnership')); ?>:</b>
	<?php echo CHtml::encode($data->partnership); ?>
	<br />


</div>