

<div class="row">
    <?php echo $form->labelEx($model,'description'.$attr); ?>
    <?php echo $form->textArea($model,'description'.$attr,array('rows'=>6, 'cols'=>80)); ?>
    <?php echo $form->error($model,'description'.$attr); ?>
</div>