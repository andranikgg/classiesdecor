<?php
echo CHtml::beginForm(CHtml::normalizeUrl(array('searchjob')), 'get', array('id' => 'filter-form'))
    . CHtml::textField('string', (isset($_GET['string'])) ? $_GET['string'] : '', array('id' => 'string'))
    . CHtml::submitButton('Search', array('name' => ''))
    . CHtml::endForm();


//Yii::app()->clientScript->registerScript('search',
//    "var ajaxUpdateTimeout;
//    var ajaxRequest;
//    $('input#string').keyup(function(){
//    ajaxRequest = $(this).serialize();
//    clearTimeout(ajaxUpdateTimeout);
//    ajaxUpdateTimeout = setTimeout(function () {
//    $.fn.yiiListView.update(
//    // this is the id of the CListView
//    'ajaxListView',
//    {data: ajaxRequest}
//    )
//    },
//    // this is the delay
//    300);
//    });"
//);

?>

