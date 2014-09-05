<?php
/* @var $this PageController */
/* @var $model Page */

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->id)),
);

      $pages = Page::model()->findAll();

?>

<h1>Update Page <?php echo $model->id; ?></h1>

<div id="page_menu">
    <ul>
        <?php foreach ($pages as $page) : ?>
            <li><a href="<?=Yii::app()->baseUrl . '/' . Yii::app()->language?>/cms/page/<?=$page->id?>"><?=$page->ctitle?></a></li>
        <?php endforeach ?>
    </ul>
</div>

<hr />
<center>
    <h2><?=$model->ctitle?></h2>
</center>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>