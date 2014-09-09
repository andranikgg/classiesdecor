<?php
/* @var $this CustomizationtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customization Types',
);

$this->menu=array(
	array('label'=>'Create CustomizationType', 'url'=>array('create')),
	array('label'=>'Manage CustomizationType', 'url'=>array('admin')),
);
?>

<h1>Customization Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
