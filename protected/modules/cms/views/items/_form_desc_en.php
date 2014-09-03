<div class="row">
    <?php echo $form->labelEx($model,'description_en'); ?>
    <?php echo $form->textArea($model,'description_en',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'description_en'); ?>
</div>