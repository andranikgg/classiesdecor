<?php
/* @var $this SiteController */
/* @var $contacts Contacts[] */

Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap.min.js');

?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/contact.css"/>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
</script>

<script >
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
        position: new google.maps.LatLng(<?=$contact->address_coord_x?>, <?=$contact->address_coord_y?>),
        map: map
    });
    <?php endforeach ?>
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="container_wrapper">
    <div class="container_block_row">
        <div class="hdr">Contacts</div>
        <div class="content paddind_10">
            <div class="container_contacts_block block_30per left">
                <div style="margin-right:10px;">
                    <?php foreach ($contacts as $contact): ?>
                        <div class="container_contacts_item">
                            <ul>
                                <li>
                                    <p>
                                        <?= $contact->address ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <?= $contact->worktime ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <?= $contact->phone ?>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        Email <?= $contact->contact_email ?>
                                    </p>
                                </li>
                                <div class="left global-footer-social-sharing">
                                    <div class="contacts">
                                        <a href="<?= $contact->fb_link ?>" target="_blank">
                                            <span class="global-footer-icon global-footer-icon-facebook"></span>
                                            <span class="global-footer-text">Facebook</span>
                                        </a>

                                        <a href="<?= $contact->tw_link ?>" target="_blank">
                                            <span class="global-footer-icon global-footer-icon-twitter"></span>
                                            <span class="global-footer-text">Twitter</span>
                                        </a>

                                        <a href="<?= $contact->in_link ?>" target="_blank">
                                            <span class="global-footer-icon global-footer-icon-linkedin"></span>
                                            <span class="global-footer-text">LinkedIn</span>
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

            <!--                <div class="container_contacts_block block_70per left">-->
            <!--                    <div class="container_contacts_map_container">-->
            <!--                        <div class="container_contacts_map">-->
            <!--                            <div class="map" id="googleMap" style="width:100%; height:340px;"></div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="clear"></div>-->
            <!--                <br>-->

            <div class="container_contacts_block  col-lg-4 " style="max-width: 310px;margin-left: 60px;">

                <form role="form" action="<?= Yii::app()->baseUrl ?>/site/contacts" method="post" id="form_susbmit">
                    <div class="form-group">
                        <label for="InputPhone">Phone</label>

                        <div class="input-group">
                            <input type="text" class="form-control" id="InputPhone" name="InputPhone" required>
                            <span class="input-group-addon"></span></div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail">E-mail</label>

                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" required>
                            <span class="input-group-addon"></span></div>
                    </div>

                    <div class="form-group">
                        <label for="InputMessage">Message</label>

                        <div class="input-group">
                            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required
                                      style="resize: none"></textarea>
                            <span class="input-group-addon"></span></div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Send""
                    class="btn btn-success pull-right">

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
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        id="x" class="sr-only">Close</span></button>
            </div>
            <div class="modal-body alert-success">
                <span class="message">Thank You . Your message has been successfully sent !!!</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $("#form_susbmit").submit(function (e) {

            var phone = $("#InputPhone").val();
            var email = $("#InputEmail").val();
            var message = $("#InputMessage").val();

            $.ajax({
                type: 'POST',
                url: '<?=Yii::app()->baseUrl?>/site/contacts',
                data: {email: email, phone: phone, message: message},
                success: function (data) {
                    //console.log(data);
                    $('#response').modal('show');
                    $("#InputPhone").val("");
                    $("#InputEmail").val("");
                    $("#InputMessage").val("");
                }
            });

            return false;
        });
    });
</script>