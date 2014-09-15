<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inspiration', 'url'=>array('index')),
	array('label'=>'Create Inspiration', 'url'=>array('create')),
	array('label'=>'Update Inspiration', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inspiration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inspiration', 'url'=>array('admin')),
);
?>

<h1>View Inspiration <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        'title_ru',
        'title_en',
        array(
            'label'=>'Photo',
            'type'=>'raw',
            'value'=>CHtml::image(Yii::app()->baseUrl."/images/gallery/".$model->image, "", array('width'=>200)),

        ),
		'status',
	),
)); ?>
