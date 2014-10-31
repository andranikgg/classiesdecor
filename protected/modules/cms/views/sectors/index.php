<?php
/* @var $this SectorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sectors',
);

$this->menu=array(
	array('label'=>'Create Sectors', 'url'=>array('create')),
	array('label'=>'Manage Sectors', 'url'=>array('admin')),
);
?>

<h1>Sectors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
