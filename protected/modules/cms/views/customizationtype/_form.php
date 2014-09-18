<?php
/* @var $this CustomizationtypeController */
/* @var $model CustomizationType */
/* @var $form CActiveForm */

    $list = CHtml::listData(Customization::model()->findAll(),'id', 'name_ru');

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customization-type-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customization_id'); ?>
		<?php echo $form->dropDownList($model,'customization_id',$list ); ?>
		<?php echo $form->error($model,'customization_id'); ?>
	</div>

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
        <?php echo $form->hiddenField($model,'image'); ?>
        <?php echo $form->error($model,'image'); ?>
    </div>

    <?php if(!$model->isNewRecord): ?>
        <img class="image_container" src ='<?=Yii::app()->baseUrl?>/images/customization/<?=$model->image?>'  style="width:100px"/>
    <?php else: ?>
        <img class="image_container" src =''  style="width:100px"/>
    <?php endif ?>

    <br>
    <br>


    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
        array(
            'id'=>'uploadFile',
            'config'=>array(
                'action'=>Yii::app()->createUrl('/cms/customizationtype/upload'),
                'allowedExtensions'=>array("jpg", "jpeg", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                'sizeLimit'=>2*1024*1024,// maximum file size in bytes
                'minSizeLimit'=>0*1024*1024,// minimum file size in bytes
                'onComplete'=>"js:function(id, fileName, responseJSON){

                                                                $('#cropImg').load('". $this->createUrl('cropImg') ."?fileName='+responseJSON.filename);
                                                                $('#cropDialog').dialog('open');
                                                        }",
                'messages'=>array(
                    'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                    'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                    'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                    'emptyError'=>"{file} is empty, please select files again without it.",
                    'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                ),
                'showMessage'=>"js:function(message){ //console.log(message);
                }"
            )
        )); ?>

    <?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog',
        array(
            'id'=>'cropDialog',
            'options'=>
                array(
                    'title'=>'Crop',
                    'modal'=>true,
                    'width'=>'80%',
                    'height'=>650,
                    //'buttons'=>array('OK'=>'js:function(){$(this).dialog("close")}'),
                    'autoOpen'=>false,
                ),
        ));

    echo '<div id="cropImg"></div>';

    $this->endWidget('zii.widgets.jui.CJuiDialog');
    ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
    $(document).ready(function() {
        $( "#cropDialog" ).dialog({
            autoOpen:false,
            close: function(event, ui) {
                if(isCropped) {
                    $(".image_container").attr('src', '<?=Yii::app()->baseUrl?>/images/customization/temp/'+crop_url);
                    $("#CustomizationType_image").val(crop_url);
                }

            }

        });
    });
</script>
