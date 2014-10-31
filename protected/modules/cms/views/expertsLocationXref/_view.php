<?php
/* @var $this ExpertsLocationXrefController */
/* @var $data ExpertsLocationXref */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expertid')); ?>:</b>
	<?php echo CHtml::encode($data->expertid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locationid')); ?>:</b>
	<?php echo CHtml::encode($data->locationid); ?>
	<br />


</div>