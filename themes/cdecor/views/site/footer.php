<?php
/* @var $menu Menu[] */

$lmanager = Yii::app()->urlManager;
$langs = $lmanager->getLanguageLinksFooter();

$partners = Partner::model()->findAll();
$products = Product::model()->findAllByAttributes(array('status' => 1));
$contacts = Contacts::model()->findAll();

?>

<div class="footer">
    <div class="footer_wrapper">
        <div class="footer_logo_block">
            <div class="footer_logo_line"></div>
            <div class="footer_logo_container">
                <div class="footer_logo_back"></div>
                <div class="footer_logo"></div>
            </div>
        </div>
        <div class="footer_container">
            <div class="block">
                <div class="section">
                    <h3 class="hdr"><?= Yii::t("menu", "partners") ?></h3>
                    <ul>

                        <?php foreach ($partners as $partner): ?>
                            <li>
                                <a href="<?= $partner->link ?>" target="_blank"><?= $partner->cname ?>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="block">
                <div class="section">
                    <h3 class="hdr"><?= Yii::t("menu", "products") ?></h3>
                    <ul>

                        <?php foreach ($products as $product): ?>
                            <li>
                                <a href="<?php echo Yii::app()->request->baseUrl . "/" . Yii::app()->language; ?>/site/brands/<?= $product->brand_id ?>"><?= $product->ctitle ?>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>

            <?php $i = 0; foreach ($contacts as $contact): ?>
                <div class="block">

                    <div class="section">
                        <h3 class="hdr"><?= ($i == 0)? Yii::t("menu", "contacts"):"&nbsp;" ?></h3>

                        <ul>
                            <li>
                                <p>
                                    <?= $contact->caddress ?>
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
                            <li class="contacts_social_block">
                                <a href="<?= $contact->fb_link ?>" target="_blank">
                                    <div class="pointer contacts_social_fb left">f</div>
                                </a>
                                <a href="<?= $contact->in_link ?>" target="_blank">
                                    <div class="pointer contacts_social_in left">IN</div>
                                </a>
                                <a href="<?= $contact->pin_link ?>" target="_blank">
                                    <div class="pointer contacts_social_pin left">pin</div>
                                </a>

                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>


                </div>
            <?php $i++; endforeach; ?>

            <div class="clear">
            </div>
        </div>

        <div class="footer_copyright">
            <span class="reserved">Classies &copy; 2014. Design by <a class="footer_ggref" href="http://www.varant.am"
                                                                      target="_blank">varant.am</a> <br/>Development by <a
                    class="footer_ggref" href="http://www.gglaboratories.com" target="_blank">gglaboratories.</a></span>
        </div>

    </div>
</div>