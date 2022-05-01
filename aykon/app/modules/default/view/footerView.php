<?php
@$defaultModel  = new defaultModel();
@$iletisim = $defaultModel->getIletisimOneModel();
?>
<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="position: fixed; bottom: 25px; right: -71px; z-index: 80;">
    <a id="WhatsApp-button" href="https://wa.me/<?=$iletisim['whatsapp']; ?>?text=Merhaba," target="_blank" class="phoneJs" title="Bize Hemen Ulaşın!">
        <div class="cbh-ph-circle"></div>
        <div class="cbh-ph-circle-fill"></div>
        <div class="cbh-ph-img-circle1"></div>
    </a>
</div>

<div class="footer">
    <div class="relative100">
        <div class="footercontent">
            <ul class="fotulfirst">
                <li><a style="color:#ffc30c;" href="/default/index"><b>ANASAYFA</b></a></li>
            </ul>

            <ul class="fotulfirst">
                <li><a style="color:#ffc30c;" href="/default/about"><b>KURUMSAL</b></a></li>
            </ul>

            <ul class="fotulfirst">
                <li><a style="color:#ffc30c;"><b>PROJELER</b></a></li>
                <li><a href="/default/devamedenprojeler">Devam Eden Projeler </a></li>
                <li><a href="/default/gelecekprojeler">Gelecek Projeler </a></li>
                <li><a href="/default/tamamlananprojeler">Tamamlanan Projeler </a></li>
            </ul>
            <ul class="fotulfirst">
                <li><a style="color:#ffc30c;"><b>KENTSEL DÖNÜŞÜM</b></a></li>
                <li><a href="/default/kentselhakkinda">Kentsel Dönüşüm Hakkında </a></li>
                <li><a href="/default/kentselprojeler">Kentsel Dönüşüm Projeleri </a></li>
            </ul>
            <ul class="fotulfirst">
                <li><a style="color:#ffc30c;"><b>HABERLER</b></a></li>
                <li><a href="/default/yapisektoru">Yapı Sektörü </a></li>
                <li><a href="/default/kentseldonusum">Kentsel Dönüşüm </a></li>
                <li><a href="/default/basindabiz">Basında Biz </a></li>
            </ul>

            <ul class="fotulfirst">
                <li><a style="color:#ffc30c;" href="/default/contact"><b>İLETİŞİM</b></a></li>
            </ul>

            <ul id="fotulfirst">
                <li>
                    <div class="relative100">
                        <div class="footleft">
                            <span class="cagrimerkezi">ÇAĞRI MERKEZİ</span>
                            <p class="relative100">
                                <i class="fa fa-phone-square"></i>
                                <span>
                                    <a href="tel:<?=$iletisim['telefon']; ?>"><?=$iletisim['telefon']; ?></a>
                                </span>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="relative100">
        <div class="footersocial">
            <a href="https://www.facebook.com/<?=$iletisim['facebook']; ?>/" target="_blank">
                <img src="/assets/img/facebook.jpg">
            </a>
            <a href="https://www.twitter.com/<?=$iletisim['twitter']; ?>/" target="_blank">
                <img src="/assets/img/twitter.jpg">
            </a>
            <a href="https://www.instagram.com/<?=$iletisim['instagram']; ?>/" target="_blank">
                <img src="/assets/img/instagram.jpg">
            </a>
            <a href="https://www.linkedin.com/in/<?=$iletisim['linkedin']; ?>/" target="_blank">
                <img src="/assets/img/linkedin.jpg">
            </a>
            <a href="https://wa.me/<?=$iletisim['whatsapp']; ?>?text=Merhaba," target="_blank">
                <img src="/assets/img/watsup.jpg">
            </a>

        </div>
    </div>

    <div class="bottom-bar-content" align="center">
        <div id="copyright"><span class="text" style="color:white;">Copyright © Tüm Hakları Saklıdır. AYKON GYO
            <br> Designed by <a href="http://www.bahadirtilki.site" class="text-accent">Bahadır Tilki</a></span>
        </div><br>
    </div>
</div>
</div><!-- /#page -->
</div><!-- /#wrapper -->

<!-- Javascript -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/animsition.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/equalize.min.js"></script>
<script src="/assets/js/jquery.isotope.min.js"></script>
<script src="/assets/js/owl.carousel2.thumbs.js"></script>

<script src="/assets/js/shortcodes.js"></script>
<script src="/assets/js/main.js"></script>

<script>
    //Footer

    $(".fotulfirst").css({ float: "left", height: "auto", display: "inline-block" });
    $("#fotullast").css({ float: "left", width: "330px", display: "inline-block" });
    $(".allowreg,.dissalowreg").css({ width: "290px", textAlign: "left" });
    $(".footleft").css({ width: "50%", textAlign: "left", marginBottom: "10px" });
    $(".footright").css({ width: "50%", textAlign: "left" });
    $(".footleft p span b,.footlabel").css({ textAlign: "left" });
    $(".formobile").css({ display: "block" });
    $(".footersocial").css({ textAlign: "left" });
    $(".footersocial a").css({ float: "left" });
    if (width < 1137) {
        $(".fotulfirst").css({ float: "none", height: "210px", display: "inline-block" });
        $("#fotullast").css({ float: "none", width: "330px", display: "inline-block" });
        if (width < 850) {
            $(".fotulfirst").css({ float: "none", height: "210px", display: "none" });
            $("#fotullast").css({ float: "none", width: "330px", display: "inline-block" });
            $(".allowreg,.dissalowreg").css({ width: "100%", textAlign: "left" });
            if (width < 530) {
                $("#fotullast").css({ float: "none", width: "96%", display: "inline-block" });
                $(".footleft").css({ width: "100%", textAlign: "center", marginBottom: "0px" });
                $(".footright").css({ width: "100%", textAlign: "center" });
                $(".footleft p span b,.footlabel").css({ textAlign: "center" });
                $(".formobile").css({ display: "none" });
                $(".footersocial").css({ textAlign: "center" });
                $(".footersocial a").css({ float: "none" });
                $(".allowreg,.dissalowreg").css({ width: "100%", textAlign: "center" });
            }
        }
    }
    //Mapmenu
    $(".locationlist").css({ display: "block" });
    $(".subMenu").css({ display: "none" });
    $(".div1").css({ marginBottom: "10px" });
    if (width < 1024) {
        $(".subMenu").css({ display: "block" });
        $(".locationlist").css({ display: "none" });
        $(".div1").css({ marginBottom: "0px" });
    }
</script>


</body>
</html>