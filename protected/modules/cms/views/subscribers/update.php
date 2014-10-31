<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */

$this->breadcrumbs=array(
	'Subscribers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subscribers', 'url'=>array('index')),
	array('label'=>'Create Subscribers', 'url'=>array('create')),
	array('label'=>'View Subscribers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subscribers', 'url'=>array('admin')),
);
?>

<h1>Update Subscribers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>