<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Login';
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap.min.js');
?>

<div class="container_wrapper">
    <div class="container_block_row">
        <div class="hdr">Login</div>
        <div class="contentc paddind_10">
            <div class="container_contacts_block block_30per left">
                <div class="form pad">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'login-form',
                        'enableClientValidation' => false,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                    )); ?>

                    <div class="row">
                        <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Your Login:',)); ?>
                        <?php echo $form->error($model, 'username'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Your Password:', 'style' => 'margin-top:10px;')); ?>
                        <?php echo $form->error($model, 'password'); ?>
                    </div>

                    <div class="row buttons">
                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-default', 'style' => 'margin-top:10px;')); ?>
                    </div>

                    <?php $this->endWidget(); ?>
                </div>
                <!-- form -->

            </div>
        </div>
    </div>
</div>


















