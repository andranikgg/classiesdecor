
<?php

$location_ids = Yii::app()->db->createCommand()
    ->select('locationid')
    ->from('jobs_location_xref')
    ->where('jobid=:id', array(':id' => $data->id))
    ->queryAll();

$list_ids = array();
foreach ($location_ids as $item) {
    $list_ids[] = $item ['locationid'];
}

$criteria = new CDbCriteria;
$criteria->addInCondition('id', $list_ids);
$countries = Countries::model()->findAll($criteria);

?>


<div class="grid_row">
    <div class="desc item left block_15per right_margin_20 textcenter">
        <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $data->posted ) ?>
    </div>

    <a href="<?= Yii::app()->request->url ?>&id=<?= $data->id ?>">
        <div class="title item left block_35per right_margin_20">
            <?= $data->title ?>
            <div class="desc">
                <?= substr($data->description, 0, 100) ?>
            </div>
        </div>
    </a>

    <div class="desc item left block_22per right_margin_20">

        <?php $i=0; $numItems = count($countries); foreach ($countries as $country): ?>
            <span>
                                        <?= $country->name ?>
                                        <?php if(++$i != $numItems) {
                                            echo "- ";
                                        } ?>
                                    </span>
        <?php endforeach ?>
    </div>

    <div class="desc item left block_15per right_margin_20">
        <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $data->deadline ) ?>
    </div>

    <div class="clear">
    </div>
    <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
    </div>
</div>
