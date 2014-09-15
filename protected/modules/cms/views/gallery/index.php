<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galleries',
);

$this->menu=array(
	array('label'=>'Create Inspiration', 'url'=>array('create')),
	array('label'=>'Manage Inspiration', 'url'=>array('admin')),
);
?>

<h1>Inspirations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
