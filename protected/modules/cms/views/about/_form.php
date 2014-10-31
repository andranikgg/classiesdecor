<?php
/* @var $this AboutController */
/* @var $model About */
/* @var $form CActiveForm */
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
	'id'=>'about-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'company'); ?>
        <?php echo $form->textArea($model,'company',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'company'); ?>
    </div><br/>

	<div class="row">
		<?php echo $form->labelEx($model,'vision'); ?>
		<?php echo $form->textArea($model,'vision',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'vision'); ?>
	</div><br/>

	<div class="row">
		<?php echo $form->labelEx($model,'partnership'); ?>
		<?php echo $form->textArea($model,'partnership',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'partnership'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->