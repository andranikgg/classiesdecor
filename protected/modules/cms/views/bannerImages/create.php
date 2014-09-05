<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */

$this->breadcrumbs=array(
	'Banner Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BannerImages', 'url'=>array('index')),
	array('label'=>'Manage BannerImages', 'url'=>array('admin')),
);
?>

<h1>Create BannerImages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>