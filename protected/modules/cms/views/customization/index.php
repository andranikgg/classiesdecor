<?php
/* @var $this CustomizationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customizations',
);

$this->menu=array(
	array('label'=>'Create Customization', 'url'=>array('create')),
	array('label'=>'Manage Customization', 'url'=>array('admin')),
);
?>

<h1>Customizations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
