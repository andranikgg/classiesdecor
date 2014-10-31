<?=
$title = "";
if ($data->title == 1)
    $title = "Mr.";
elseif ($data->title == 2)
    $title = "Ms.";
elseif ($data->title == 3)
    $title = "Mrs.";

$location_ids = Yii::app()->db->createCommand()
    ->select('locationid')
    ->from('experts_location_xref')
    ->where('expertid=:id', array(':id'=>$data->id))
    ->queryAll();

$list_ids = array();
foreach($location_ids as $item) {
  $list_ids[] = $item ['locationid'];
}

//echo "<pre>";
//print_r($data);
//exit;

$criteria=new CDbCriteria;
$criteria->addInCondition('id',$list_ids);
$countries = Countries::model()->findAll($criteria);

?>
<div class="grid_row">
    <div class="desc item left block_10per right_margin_20 textcenter">
        <?= Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($data->createdate, 'yyyy-MM-dd'), 'medium', null); ?>
    </div>

    <div class="desc bold item left block_25per right_margin_20">
        <?= $title ?> <?= $data->firstname ?> <?= $data->lastname ?>
    </div>

    <div class="desc item left block_23per right_margin_20">
        <?= $data->email ?>
    </div>

    <div class="desc item left block_20per right_margin_20">

        <?php $i=0; $numItems = count($countries); foreach ($countries as $country): ?>
            <div class="left">
                <?= $country->name ?>
                <?php if(++$i != $numItems) {
                    echo "- ";
                } ?>
            </div>
        <?php endforeach ?>
        <div class="clear">
        </div>
    </div>

    <div class="desc item left block_5per right_margin_20">
        <a href="<?= Yii::app()->baseUrl ?>/cv/<?= $data->cv ?>">cv</a>
    </div>

    <div class="clear">
    </div>
    <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
    </div>
</div>
