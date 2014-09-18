<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */


$this->menu=array(
	array('label'=>'List BannerImages', 'url'=>array('index')),
	array('label'=>'Manage BannerImages', 'url'=>array('admin')),
);
?>

<h1><?=Yii::t("menu", "create")?> BannerImages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>