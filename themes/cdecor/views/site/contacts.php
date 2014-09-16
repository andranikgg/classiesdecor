<?php
/* @var $this SiteController */
/* @var $contacts Contacts[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/bootstrap.min.js');

?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/contact.css"/>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
</script>

<script>
var langitut = <?=$contacts[0]->address_coord_x?>;
var longitut = <?=$contacts[0]->address_coord_y?>;

function initialize() {
    var latlng = new google.maps.LatLng(langitut, longitut);

    var mapProp = {
        center: latlng,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap")
        , mapProp);

    <?php foreach ($contacts as $contact):?>
        var marker<?=$contact->id?> = new google.maps.Marker({
            position:new google.maps.LatLng(<?=$contact->address_coord_x?>, <?=$contact->address_coord_y?>),
            map: map
        });
    <?php endforeach ?>
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<div class="container_slider_block_content">
    <?php $this->renderPartial('_banners', array('page' => $page)); ?>

    <div class="absolute whiteline" style="height: 10px;bottom: 0px;z-index: 2">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -2px;z-index: 2;background-color:gray">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -1px;z-index: 2;background-color:white">
    </div>
    <div class="absolute whiteline" style="height: 10px;bottom: -12px;z-index: 2">
    </div>
</div>

<div class="container_wrapper">
    <div class="container_row">
        <div class="container_contacts_block block_30per left">
            <div class="hdr"><?=Yii::t("menu", "contacts")?></div>

        <?php foreach($contacts as $contact): ?>
            <div class="container_contacts_item">
                <ul>
                    <li>
                        <p>
                            <?=$contact->caddress ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <?=$contact->worktime ?>
                        </p>
                    </li>
                    <li>
                        <p>
                            <?=$contact->phone ?>
                        </p>
                    </li>

                    <li>
                        <p>
                           Email <?=$contact->contact_email ?>
                        </p>
                    </li>
                    <li class="contacts_social_block">
                        <a href="<?=$contact->fb_link?>" target="_blank"><div class="pointer contacts_social_fb left">f</div></a>
                        <a href="<?=$contact->in_link?>" target="_blank"><div class="pointer contacts_social_in left">IN</div></a>
                        <a href="<?=$contact->pin_link?>" target="_blank"><div class="pointer contacts_social_pin left">pin</div></a>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
        <?php endforeach ?>

        </div>

        <div class="">
            <div class="container_contacts_block block_30per left">

            </div>

        <div class="container_contacts_block block_60per left">
            <div class="container_contacts_map_container">
                <div class="container_contacts_map">
                    <div class="map" id="googleMap" style="width:862px; height:340px;"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <br>

        <div class="container_contacts_block  col-lg-4 " style="max-width: 340px;">



                    <form role="form" action="<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/site/contacts" method="post" id="form_susbmit" >


                            <div class="form-group">
                                <label for="InputPhone"><?=Yii::t("menu", "tel")?></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="<?=Yii::t("menu", "tel")?>" required  >
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail"><?=Yii::t("menu", "mail")?></label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="<?=Yii::t("menu", "mail")?>" required  >
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="InputMessage"><?=Yii::t("menu", "message")?></label>
                                <div class="input-group"
                                    >
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="<?=Yii::t("menu", "message")?>" required></textarea>
                                    <span class="input-group-addon"></span></div>
                            </div>
                              <input type="submit" name="submit" id="submit" value="<?=Yii::t("menu", "send")?>" class="btn btn-success pull-right" >

                    </form>

        </div>
        <div class="clear"></div>
    </div>


</div>
</div>

<!-- Modal -->
<div class="modal fade" id="response" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span id="x" class="sr-only">Close</span></button>
            </div>
            <div class="modal-body alert-success" >
                <span class="message"> <?=Yii::t("menu", "response")?> </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $("#form_susbmit").submit(function(e){

            var phone = $("#InputPhone").val();
            var email = $("#InputEmail").val();
            var message = $("#InputMessage").val();

            $.ajax({
                type: 'POST',
                url: '<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/site/contacts',
                data: {email: email, phone: phone, message: message},
                success: function (data) {
                    console.log(data);
                    $('#response').modal('show');
                    $("#InputPhone").val("");
                    $("#InputEmail").val("");
                    $("#InputMessage").val("");
                }
            });

            return false; c
        });
    });



</script>