<?php
/* @var $this ProductController */

$this->breadcrumbs=array(
    'Product'=>array('/cms/product'),
    'Create',
);

$this->menu=array(
    array('label'=>'List Products', 'url'=>array('index')),
    array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

    <h1>Create Products</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'categories'=>$categories));