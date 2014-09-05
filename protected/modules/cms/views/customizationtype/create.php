<?php
/* @var $this CustomizationtypeController */
/* @var $model CustomizationType */

$this->breadcrumbs=array(
	'Customization Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomizationType', 'url'=>array('index')),
	array('label'=>'Manage CustomizationType', 'url'=>array('admin')),
);
?>

<h1>Create CustomizationType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>