<?php
/* @var $this SiteController */
/* @var $contacts Contacts[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap.min.css');

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
                    <div class="map" id="googleMap" style="width:862px; height:340px;"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container_contacts_form_block col-lg-4 pull-right " >

            <div class="container" >
                <div class="row">

                    <form role="form" action="<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/site/contact" method="post" >
                        <div class="pull-right">

                            <div class="form-group">
                                <label for="InputPhone"> Your Phone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="Enter Phone" required  >
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail">Your Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="InputMessage">Message</label>
                                <div class="input-group"
                                    >
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Message" required></textarea>
                                    <span class="input-group-addon"></span></div>
                            </div>
                              <input type="submit" name="submit" id="submit" value="Send" class="btn btn-success pull-right">
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


<script>
    $(document).ready(function(){

        $("input[type=submit]").click(function(e){
            e.preventDefault();

            var phone = $("#InputPhone").val();
            var email = $("#InputEmail").val();
            var message = $("#InputMessage").val();

            $.ajax({
                type: 'POST',
                url: '<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/site/contact',
                data: {email: email, phone: phone, message: message},
                success: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>