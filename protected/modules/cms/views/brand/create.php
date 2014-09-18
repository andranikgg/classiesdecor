<?php
/* @var $this BrandController */
/* @var $model Brand */


$this->menu=array(
	array('label'=>'List Brand', 'url'=>array('index')),
	array('label'=>'Manage Brand', 'url'=>array('admin')),
);
?>

<h1><?=Yii::t("menu", "create")?> Brand</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>