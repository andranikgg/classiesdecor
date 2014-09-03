<?php
/* @var $this CategoriesController */
/* @var $model Categories */

$this->breadcrumbs=array(
	'Product'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List product', 'url'=>array('index')),
	array('label'=>'Create product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Categories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'categories-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name_ru',
		'name_en',
		'name_de',
		'name_it',
		/*
		'text_en',
		'text_de',
		'text_it',
		'image',
		'keywords_ru',
		'keywords_en',
		'keywords_de',
		'keywords_it',
		'mdescription_ru',
		'mdescription_en',
		'mdescription_de',
		'mdescription_it',
		*/
		array(
			'class'=>'CButtonColumn',
            'template'=>'{del}',
            'buttons' => array(
                'del' => array( //the name {reply} must be same
                    'label' => 'Reply', // text label of the button
                    'url' => 'Yii::app()->baseUrl ."/". Yii::app()->language . "/module/cms/product/delete?id=".$data->id."&cat_id=".$data->cat_id', //Your URL According to your wish
                    'imageUrl' => Yii::app()->baseUrl . '/images/reply_mail_icon.png', // image URL of the button. If not set or false, a text link is used, The image must be 16X16 pixels
                ),
            ),
		),
	),
)); ?>
