<?php
/* @var $this CategoriesController */
/* @var $model Categories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_ru'); ?>
		<?php echo $form->textField($model,'name_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_en'); ?>
		<?php echo $form->textField($model,'name_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_de'); ?>
		<?php echo $form->textField($model,'name_de',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_it'); ?>
		<?php echo $form->textField($model,'name_it',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_it'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_ru'); ?>
		<?php echo $form->textField($model,'text_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_en'); ?>
		<?php echo $form->textField($model,'text_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_de'); ?>
		<?php echo $form->textField($model,'text_de',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_it'); ?>
		<?php echo $form->textField($model,'text_it',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text_it'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_ru'); ?>
		<?php echo $form->textField($model,'keywords_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_en'); ?>
		<?php echo $form->textField($model,'keywords_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_de'); ?>
		<?php echo $form->textField($model,'keywords_de',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_it'); ?>
		<?php echo $form->textField($model,'keywords_it',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords_it'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_ru'); ?>
		<?php echo $form->textField($model,'mdescription_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mdescription_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_en'); ?>
		<?php echo $form->textField($model,'mdescription_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mdescription_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_de'); ?>
		<?php echo $form->textField($model,'mdescription_de',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mdescription_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_it'); ?>
		<?php echo $form->textField($model,'mdescription_it',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mdescription_it'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->