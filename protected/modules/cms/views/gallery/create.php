<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inspiration', 'url'=>array('index')),
	array('label'=>'Manage Inspiration', 'url'=>array('admin')),
);
?>

<h1>Create Inspiration</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>