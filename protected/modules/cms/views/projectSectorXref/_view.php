<?php
/* @var $this ProjectSectorXrefController */
/* @var $data ProjectSectorXref */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sectorid')); ?>:</b>
	<?php echo CHtml::encode($data->sectorid); ?>
	<br />


</div>