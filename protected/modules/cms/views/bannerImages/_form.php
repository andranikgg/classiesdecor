<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-images-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'image'); ?>
<!--		--><?php //echo $form->textField($model,'image',array('size'=>60,'maxlength'=>250)); ?>
<!--		--><?php //echo $form->error($model,'image'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'link'); ?>
<!--		--><?php //echo $form->textField($model,'link',array('size'=>60,'maxlength'=>250)); ?>
<!--		--><?php //echo $form->error($model,'link'); ?>
<!--	</div>-->


    <div class="row">
        <?php echo $form->hiddenField($model,'image'); ?>
        <?php echo $form->error($model,'image'); ?>
    </div>

    <?php if(!$model->isNewRecord): ?>
        <img class="image_container" src ='<?=Yii::app()->baseUrl?>/images/gallery/<?=$model->image?>'  style="width:100px"/>
    <?php else: ?>
        <img class="image_container" src =''  style="width:100px"/>
    <?php endif ?>

    <br>
    <br>

    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
        array(
            'id'=>'uploadFile',
            'config'=>array(
                'action'=>Yii::app()->createUrl('/cms/bannerimages/upload'),
                'allowedExtensions'=>array("jpg", "jpeg", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                'sizeLimit'=>50*1024*1024,// maximum file size in bytes
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
                    'height'=>600,
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
maximum upload file size 2 Mb
</div><!-- form -->


<script>
    $(document).ready(function() {
        $( "#cropDialog" ).dialog({
            autoOpen:false,
            close: function(event, ui) {
                if(isCropped) {
                    console.log(crop_url);
                    $(".image_container").attr('src', '<?=Yii::app()->baseUrl?>/images/gallery/temp/'+crop_url);
                    $("#BannerImages_image").val(crop_url);
                }
            }
        });
    });
</script>