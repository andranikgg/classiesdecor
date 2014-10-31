<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */

$this->breadcrumbs=array(
	'Subscribers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subscribers', 'url'=>array('index')),
	array('label'=>'Manage Subscribers', 'url'=>array('admin')),
);
?>

<h1>Create Subscribers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>