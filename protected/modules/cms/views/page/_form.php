<?php
/* @var $this PageController */
/* @var $model Page */
/* @var $form CActiveForm */

    $banners = $model->bannerImages;

?>

<?php if(Yii::app()->user->hasFlash('success')):?>

    <?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
        'id'=>'mydialog',
        // additional javascript options for the dialog plugin
        'options'=>array(
            'title'=>'Dialog box 1',
            'modal'=>true,
            'autoOpen'=>true,
        ),
    ));
    ?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>

   <?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>


<?php endif; ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


    <div class="row">
        <?php echo $form->labelEx($model,'title_ru'); ?>
        <?php echo $form->textField($model,'title_ru',array('size'=>60,'maxlength'=>250)); ?>
        <?php echo $form->error($model,'title_ru'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'title_en'); ?>
        <?php echo $form->textField($model,'title_en',array('size'=>60,'maxlength'=>250)); ?>
        <?php echo $form->error($model,'title_en'); ?>
    </div>


    <?php
    $this->widget('CTabView',array(
        'activeTab'=>'tab1',
        'tabs'=>array(

            'dtab1'=>array('title'=>'grid 1 RU',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'1_ru'),true
                    )),

            'dtab2'=>array('title'=>'grid  2 RU',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'2_ru'),true
                    )),
            'dtab3'=>array('title'=>'grid 3 RU',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'3_ru'),true
                    )),
        ),
        'htmlOptions'=>array(
        )
    ));
    ?>

    <hr />

    <?php
    $this->widget('CTabView',array(
        'activeTab'=>'tab11',
        'tabs'=>array(

            'dtab11'=>array('title'=>'grid 1 EN',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'1_en'),true
                    )),

            'dtab22'=>array('title'=>'grid  2 EN',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'2_en'),true
                    )),
            'dtab33'=>array('title'=>'grid 3 EN',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'3_en'),true
                    )),
        ),
        'htmlOptions'=>array(
        )
    ));
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<hr>


<div id="banners" class="images-container">
    <?php foreach($banners as $banner): ?>
    <div class="banner-content">

        <div class="baneer-image">

            <img src="<?=Yii::app()->baseUrl?>/images/page/<?=$banner->image?>" width="120px" />
        </div>
        <div class="banner-link-wrap">
            <label for="link" value="<?=$banner->link?>">Link</label>
            <input type="text" class="banner-link" value="<?=$banner->link?>" data-value="<?=$banner->id?>" size="80" >
        </div>
        <div class="del" data-value="<?=$banner->id?>"></div>
        <div class="clear"></div>
    </div>

    <?php endforeach ?>

</div>


<?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
    array(
        'id'=>'uploadFile',
        'config'=>array(
            'action'=>Yii::app()->createUrl('/cms/page/upload'),
            'allowedExtensions'=>array("jpg", "jpeg", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
            'sizeLimit'=>2*1024*1024,// maximum file size in bytes
            'minSizeLimit'=>0*1024*1024,// minimum file size in bytes
            'onComplete'=>"js:function(id, fileName, responseJSON){

                                                                $('#cropImg').load('". $this->createUrl('cropImg') ."?fileName='+responseJSON.filename+'&pageid=". $id ."');
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










<script>
    $(document).ready(function() {


        $( "#cropDialog" ).dialog({
            autoOpen:false,
            close: function(event, ui) {
                if(isCropped) {
                    location.reload();
                }

            }

        });


        $(".del").click(function(){

            var bannerid = $(this).attr("data-value");

            $.ajax({
                type: "post",
                url: '<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/module/cms/page/deletebanner',
                data: {'bannerid':bannerid},
                success: function(res) {
                    location.reload();
                }
            });

        });


    });
</script>

















