
<?php
$location_ids = Yii::app()->db->createCommand()
    ->select('locationid')
    ->from('project_location_xref')
    ->where('projectid=:id', array(':id' => $data->id))
    ->queryAll();

$list_ids = array();
foreach ($location_ids as $item) {
    $list_ids[] = $item ['locationid'];
}

$criteria = new CDbCriteria;
$criteria->addInCondition('id', $list_ids);
$countries = Countries::model()->findAll($criteria);

$sector_ids = Yii::app()->db->createCommand()
    ->select('sectorid')
    ->from('project_sector_xref')
    ->where('projectid=:id', array(':id' => $data->id))
    ->queryAll();

$list_ids = array();
foreach ($sector_ids as $item) {
    $list_ids[] = $item ['sectorid'];
}

$criteriasector = new CDbCriteria;
$criteriasector->addInCondition('id', $list_ids);
$sectors = Sectors::model()->findAll($criteriasector);
?>


<div class="grid_row">
    <div class="desc item left block_20per right_margin_20">

        <?php $i=0; $numItemsc = count($sectors); foreach ($sectors as $sector): ?>
            <span>
                                        <?= $sector->title ?>
                                        <?php if(++$i != $numItemsc) {
                                            echo "- ";
                                        } ?>
                                    </span>
        <?php endforeach ?>
    </div>

    <a href="<?= Yii::app()->request->url ?>&id=<?= $data->id ?>">
        <div class="title item left block_35per right_margin_20">
            <?= $data->title ?>
            <div class="desc">
                <?= substr($data->content, 0, 100) ?>
            </div>
        </div>
    </a>

    <div class="desc item left block_20per right_margin_20">

        <?php $i=0; $numItems = count($countries); foreach ($countries as $country): ?>
            <span>
                                        <?= $country->name ?>
                                        <?php if(++$i != $numItems) {
                                            echo "- ";
                                        } ?>
                                    </span>
        <?php endforeach ?>
    </div>

    <div class="desc item left block_15per">
        <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $data->startdate ) ?> -
        <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $data->enddate ) ?>
    </div>

    <div class="clear">
    </div>
    <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
    </div>
</div>