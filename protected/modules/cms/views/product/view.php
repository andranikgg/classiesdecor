<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array(
            'label'=>'Photo',
            'type'=>'raw',
            'value'=>CHtml::image(Yii::app()->baseUrl."/images/product/".$model->image, "", array('width'=>100)),

        ),
		'id',
		'title_ru',
		'title_en',
		'desc_ru',
		'desc_en',
        array(
            'label'=>'Brand',
            'value'=> $model->brand->name_ru,

        ),
        array(
            'label'=>'Category',
            'value'=> $model->category->name_ru,

        ),
		'status',
	),
)); ?>
