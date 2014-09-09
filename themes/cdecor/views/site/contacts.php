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
var langitut = 40.1867732132;
var longitut = 44.5151568619;
var myLatlng1 = new google.maps.LatLng(40.181938, 44.515196);
var myLatlng2 = new google.maps.LatLng(40.195407, 44.487915);
function initialize() {
    var latlng = new google.maps.LatLng(langitut, longitut);

    var mapProp = {
        center: latlng,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap")
        , mapProp);

    var marker1 = new google.maps.Marker({
        position: myLatlng1,
        map: map
    });

    var marker2 = new google.maps.Marker({
        position: myLatlng2,
        map: map
    });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


<div class="container_slider_block_content">
    <div class="banner">
        <ul id="banner_ul">
            <?php foreach($page->bannerImages as $banner): ?>
                <li>
                    <img src="<?= Yii::app()->baseUrl ?>/images/page/<?=$banner->image?>" class="content_slid_img"/>
                </li>
            <?php endforeach ?>
        </ul>
        <ol class="dots">
            <li class="dot" onclick="toslide(1)">1</li>
            <li class="dot" onclick="toslide(2)">2</li>
            <li class="dot" onclick="toslide(3)">3</li>
            <li class="dot" onclick="toslide(4)">4</li>
        </ol>
    </div>

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
            <div class="container_contacts_item">
                <ul>
                    <li>
                        <p>
                            Northern Avenue Hin Yerevantsi 2/9
                        </p>
                    </li>
                    <li>
                        <p>
                            Yerevan, Armenia
                        </p>
                    </li>
                    <li>
                        <p>
                            Today 11:00am - 8:00pm
                        </p>
                    </li>
                    <li>
                        <p>
                            Phone +374 60 44 61 64,
                        </p>
                    </li>
                    <li>
                        <p style="padding-left: 43px">
                            +374 94 25 31 69
                        </p>
                    </li>
                    <li>
                        <p>
                            Email hamlet@classiesdecor.com
                        </p>
                    </li>
                    <li class="contacts_social_block">
                        <div class="pointer contacts_social_fb left">f</div>
                        <div class="pointer contacts_social_in left">IN</div>
                        <div class="pointer contacts_social_pin left">pin</div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
            <div class="container_contacts_item">
                <ul>
                    <li>
                        <p>
                            Northern Avenue Hin Yerevantsi 2/9
                        </p>
                    </li>
                    <li>
                        <p>
                            Yerevan, Armenia
                        </p>
                    </li>
                    <li>
                        <p>
                            Today 11:00am - 8:00pm
                        </p>
                    </li>
                    <li>
                        <p>
                            Phone +374 60 44 61 64,
                        </p>
                    </li>
                    <li>
                        <p style="padding-left: 43px">
                            +374 94 25 31 69
                        </p>
                    </li>
                    <li>
                        <p>
                            Email hamlet@classiesdecor.com
                        </p>
                    </li>
                    <li class="contacts_social_block">
                        <div class="pointer contacts_social_fb left">f</div>
                        <div class="pointer contacts_social_in left">IN</div>
                        <div class="pointer contacts_social_pin left">pin</div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
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
