<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subproduct_id'); ?>
        <?php
        $ld=CHtml::listData($subproducts,'id','name');
        echo CHtml::activeDropDownList($model,'subproduct_id',$ld);
        ?>
		<?php echo $form->error($model,'subproduct_id'); ?>
	</div>

    <div class="row">
        <div class="span-6">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>250)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

        <div class="span-6">
            <?php echo $form->labelEx($model,'name_ru'); ?>
            <?php echo $form->textField($model,'name_ru',array('size'=>30,'maxlength'=>250)); ?>
            <?php echo $form->error($model,'name_ru'); ?>
        </div>


        <div class="span-6 last">
            <?php echo $form->labelEx($model,'name_en'); ?>
            <?php echo $form->textField($model,'name_en',array('size'=>30,'maxlength'=>250)); ?>
            <?php echo $form->error($model,'name_en'); ?>
        </div>
    </div>



	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'color'); */?>
		<?php /*echo $form->textField($model,'color',array('size'=>30,'maxlength'=>255)); */?>
		<?php /*echo $form->error($model,'color'); */?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->hiddenField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

    <?php
        $this->widget('CTabView',array(
            'activeTab'=>'tab1',
            'tabs'=>array(

                'tab1'=>array('title'=>'Description AM',
                                    'content'=>$this->renderPartial(
                                        '_form_desc',
                                        array('form'=>$form, 'model'=>$model),true
                                        )),

                'tab2'=>array('title'=>'Description RU',
                    'content'=>$this->renderPartial(
                            '_form_desc_ru',
                            array('form'=>$form, 'model'=>$model),true
                        )),
                'tab3'=>array('title'=>'Description EN',
                    'content'=>$this->renderPartial(
                            '_form_desc_en',
                            array('form'=>$form, 'model'=>$model),true
                        )),
            ),
            'htmlOptions'=>array(

            )
        ));
    ?>

    <div class="clear"></div>

    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
        array(
            'id'=>'uploadFile',
            'config'=>array(
                'action'=>Yii::app()->createUrl('/cms/items/upload'),
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
                    'width'=>728,
                    'height'=>600,
                    'buttons'=>array('OK'=>'js:function(){$(this).dialog("close")}'),
                    'autoOpen'=>false,
                )
        ));

    echo '<div id="cropImg"></div>';

    $this->endWidget('zii.widgets.jui.CJuiDialog');
    ?>

    <div class="row">
        <?php echo $form->labelEx($model,'main'); ?>
        <?php echo $form->checkBox($model,'main'); ?>
        <?php echo $form->error($model,'main'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

    <?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>

    <script type="text/javascript">

        tinymce.init({
            selector: "textarea",
            theme: "modern",
            width: 700,
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            content_css: "css/content.css",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    </script>

<?php $this->endWidget(); ?>


</div><!-- form -->

<div class="crop_wrapper"></div>

<script>
   var getImageCrop = function(){

           $.ajax({
               type: 'POST',
               url: '<?=$this->createUrl("items/initcropper")?>',
               data: {},
               // dataType: 'json',
               // context: document.body,
               //async: false,   //Send Synchronously
               success: function (resp) {
                   $(".crop_wrapper").html(resp);
               }
           });
    }
</script>




