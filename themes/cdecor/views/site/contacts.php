<?php
/* @var $this SiteController */
/* @var $contacts Contacts[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/contacts.css"/>

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

    <div class="absolute whiteline" style="height: 15px;bottom: 0px;z-index: 2">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -2px;z-index: 2;background-color:gray">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -1px;z-index: 2;background-color:white">
    </div>
    <div class="absolute whiteline" style="height: 15px;bottom: -17px;z-index: 2">
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
        <div class="container_contacts_block block_60per left">
            <div class="container_contacts_map_container">
                <div class="container_contacts_map">
                    <div id="googleMap" style="width:100%;height:340px;"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container_contacts_form_block">
            <div class="container_contacts_form">
                <form action="#">
                    <div class="container_contacts_form_left left">
                        <div class="form_row">
                            Phone*
                        </div>
                        <div class="form_row">
                            Email*
                        </div>
                        <div class="form_row">
                            Message*
                        </div>
                    </div>
                    <div class="container_contacts_form_right left">
                        <div class="form_row">
                            <input type="text" name="phone">
                        </div>
                        <div class="form_row">
                            <input type="text" name="email">
                        </div>
                        <div class="">
                            <textarea rows="4" cols="50">
                            </textarea>
                        </div>
                        <input type="submit" value="Send" class="form_button">
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
