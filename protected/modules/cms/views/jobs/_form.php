<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/style/datepicker.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/style/bootstrap-select.css.map');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/style/bootstrap-select.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css');

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/jquery-1.11.1.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap-datepicker.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap-select.js');
?>

<?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>
<script>
    tinymce.init({selector:'textarea', width: 700,
        height: 300,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "textcolor"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true
    });
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'work_experience'); ?>
		<?php echo $form->textField($model,'work_experience'); ?>
		<?php echo $form->error($model,'work_experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdate'); ?>
		<?php echo $form->textField($model,'createdate'); ?>
		<?php echo $form->error($model,'createdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posted'); ?>
		<?php echo $form->textField($model,'posted'); ?>
		<?php echo $form->error($model,'posted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deadline'); ?>
		<?php echo $form->textField($model,'deadline', array('class'=>'datepicker')); ?>
		<?php echo $form->error($model,'deadline'); ?>
	</div>

<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	*/ ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->