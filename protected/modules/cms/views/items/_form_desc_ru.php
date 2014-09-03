<div class="row">
    <?php echo $form->labelEx($model,'description_ru'); ?>
    <?php echo $form->textArea($model,'description_ru',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'description_ru'); ?>
</div>