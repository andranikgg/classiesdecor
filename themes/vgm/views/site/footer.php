<?php
/* @var $menu Menu[] */

$contact = Contacts::model()->findByPk(1);
?>

<div class="footer">
    <div class="footer_wrapper">
        <div class="left global-footer-social-sharing">
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

        <div class="left" style="margin-left: 30px">
            <iframe
                src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FVGM-PARTNERS%2F118994888133069&amp;send=false&amp;layout=button_count&amp;width=130&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21"
                scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:20px;"
                allowtransparency="true"></iframe>
        </div>

        <div class="right global-footer-legal">
            <a class="footer_ggref" href="<?= Yii::app()->baseUrl ?>/termsofuse" >Terms of use</a>
            <a class="footer_ggref" href="<?= Yii::app()->baseUrl ?>/contactus">Contact us</a>
        </div>
        <div class="clear"></div>

        <div class="footer_copyright">
            <span class="reserved">
                VGM Partners Ltd &copy; 2014.<br/>
                Design & development by <a class="footer_ggref" href="http://www.gglaboratories.com" target="_blank">gglaboratories.</a></span>
        </div>
    </div>
</div>