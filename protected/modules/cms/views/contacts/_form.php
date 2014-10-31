<?php
/* @var $this ContactsController */
/* @var $model Contacts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_coord_x'); ?>
		<?php echo $form->textField($model,'address_coord_x',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'address_coord_x'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_coord_y'); ?>
		<?php echo $form->textField($model,'address_coord_y',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'address_coord_y'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'worktime'); ?>
		<?php echo $form->textField($model,'worktime',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'worktime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textArea($model,'phone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_email'); ?>
		<?php echo $form->textField($model,'contact_email',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'contact_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fb_link'); ?>
		<?php echo $form->textField($model,'fb_link',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'fb_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_link'); ?>
		<?php echo $form->textField($model,'in_link',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'in_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tw_link'); ?>
		<?php echo $form->textField($model,'tw_link',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tw_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feedback_email'); ?>
		<?php echo $form->textField($model,'feedback_email',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'feedback_email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->