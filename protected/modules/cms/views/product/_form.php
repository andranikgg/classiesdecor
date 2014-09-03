<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id', $categories); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
        <div class="span-8">
            <?php echo $form->labelEx($model,'name_ru'); ?>
            <?php echo $form->textField($model,'name_ru', array('style'=>'width:300px')); ?>
            <?php echo $form->error($model,'name_ru'); ?>
	    </div>
        <div class="span-8 last">
            <?php echo $form->labelEx($model,'name_en'); ?>
            <?php echo $form->textField($model,'name_en', array('style'=>'width:300px')); ?>
            <?php echo $form->error($model,'name_en'); ?>
        </div>
	</div>

	<div class="row">
        <div class="span-8">
            <?php echo $form->labelEx($model,'name_de'); ?>
            <?php echo $form->textField($model,'name_de', array('style'=>'width:300px')); ?>
            <?php echo $form->error($model,'name_de'); ?>
        </div>
        <div class="span-8 last">
            <?php echo $form->labelEx($model,'name_it'); ?>
            <?php echo $form->textField($model,'name_it', array('style'=>'width:300px')); ?>
            <?php echo $form->error($model,'name_it'); ?>
        </div>
	</div>
    <hr />

    <?php
    $this->widget('CTabView',array(
        'activeTab'=>'tab',
        'tabs'=>array(

            'dtab1'=>array('title'=>'Description Ru',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'_ru'),true
                    )),

            'dtab2'=>array('title'=>'Description En',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'_en'),true
                    )),
            'dtab3'=>array('title'=>'Description De',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'_de'),true
                    )),
            'tab4'=>array('title'=>'Description It',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'_it'),true
                    )),
        ),
        'htmlOptions'=>array(
        )
    ));
    ?>



	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

    <hr/>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_ru'); ?>
		<?php echo $form->textField($model,'keywords_ru', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'keywords_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_en'); ?>
		<?php echo $form->textField($model,'keywords_en', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'keywords_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_de'); ?>
		<?php echo $form->textField($model,'keywords_de', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'keywords_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords_it'); ?>
		<?php echo $form->textField($model,'keywords_it', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'keywords_it'); ?>
	</div>

     <br/><hr/>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_ru'); ?>
		<?php echo $form->textField($model,'mdescription_ru', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'mdescription_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_en'); ?>
		<?php echo $form->textField($model,'mdescription_en', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'mdescription_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_de'); ?>
		<?php echo $form->textField($model,'mdescription_de', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'mdescription_de'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mdescription_it'); ?>
		<?php echo $form->textField($model,'mdescription_it', array('style'=>'width:100%')); ?>
		<?php echo $form->error($model,'mdescription_it'); ?>
	</div>

<div class="row">
    <?php echo $form->hiddenField($model,'palitra_image'); ?>
    <?php echo $form->error($model,'palitra_image'); ?>
</div>


    <?php if(!$model->isNewRecord): ?>
        <img class="image_container" src ='<?=Yii::app()->baseUrl?>/images/products/<?=$model->cat_id?>/<?=$model->palitra_image?>'  style="width:100px"/>
     <?php else: ?>
        <img class="image_container" src =''  style="width:100px"/>
    <?php endif ?>

    <br />
    <div class="clear"></div>


<?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
    array(
        'id'=>'uploadFile',
        'config'=>array(
            'action'=>Yii::app()->createUrl('/cms/product/upload'),
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
                'height'=>600,
                //'buttons'=>array('OK'=>'js:function(){$(this).dialog("close")}'),
                'autoOpen'=>false,
            ),
      ));

echo '<div id="cropImg"></div>';

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

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

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
    $(document).ready(function() {
        $( "#cropDialog" ).dialog({
            autoOpen:false,
            close: function(event, ui) {
                if(isCropped) {
                    $(".image_container").attr('src', '<?=Yii::app()->baseUrl?>/images/products/temp/'+crop_url);
                    $("#Product_palitra_image").val(crop_url);
                }

            }

        });
    });
</script>

























