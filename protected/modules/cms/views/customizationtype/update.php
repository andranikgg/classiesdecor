<?php
/* @var $this CustomizationtypeController */
/* @var $model CustomizationType */

$this->breadcrumbs=array(
	'Customization Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomizationType', 'url'=>array('index')),
	array('label'=>'Create CustomizationType', 'url'=>array('create')),
	array('label'=>'View CustomizationType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CustomizationType', 'url'=>array('admin')),
);
?>

<h1>Update CustomizationType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>