<?php
/* @var $this CustomizationController */
/* @var $model Customization */

$this->breadcrumbs=array(
	'Customizations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customization', 'url'=>array('index')),
	array('label'=>'Create Customization', 'url'=>array('create')),
	array('label'=>'View Customization', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Customization', 'url'=>array('admin')),
);
?>

<h1>Update Customization <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>